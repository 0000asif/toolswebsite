<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Job;
use App\Models\Blog;
use App\Models\Post;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\Category;
use App\Models\Customer;
use App\Models\District;
use App\Models\BloodDonor;
use App\Models\JobCategory;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerProfileController extends Controller
{
    public function CustomerProfile()
    {
        return view('frontend.pages.profile.dashboard');
    }

    //start 1/5/25
    public function CustomerUpdate()
    {
        $customer = auth()->guard('customer')->user();
        return view('frontend.pages.profile.customer-update', compact('customer'));
    }

    public function CustomerUpdateStore(Request $request)
    {
        $authcustomer = auth()->guard('customer')->user();
        $customer = Customer::find($authcustomer->id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:customers,email,' . $customer->id],
            'phone' => ['nullable'],
        ]);

        $data = $request->all();

        //update image and also save the path in the database also delete form old image in storage
        if ($request->hasFile('image')) {
            // Delete old image from storage
            if ($customer->image && file_exists(public_path('images/customers/' . $customer->image))) {
                unlink(public_path('images/customers/' . $customer->image));
            }

            // Store new image and save the path in the database
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/customers'), $image_name);
            $data['image'] = $image_name;
        }

        $customer->update($data);

        return redirect()->back()->with('success', 'Customer updated successfully.');
    }

    public function CustomerPasswordUpdate()
    {
        $customer = auth()->guard('customer')->user();
        return view('frontend.pages.profile.customer-password', compact('customer'));
    }

    public function CustomerPasswordUpdateStore(Request $request)
    {
        $authcustomer = auth()->guard('customer')->user();
        $customer = Customer::find($authcustomer->id);


        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        // Check if the current password matches
        if (!Hash::check($request->current_password, $customer->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $customer->password = Hash::make($request->new_password);
        $customer->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
    //end 5/1/25
    public function BloodDoner()
    {
        $upazilas = Upazila::where('district_id', '12')->get();
        return view('frontend.pages.profile.blood-doner', compact('upazilas'));
    }

    public function BloodDonerStore(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'upazila_id' => 'required',
            'name' => 'required',
            'blood_group' => 'required',
            'contract_number' => 'required',
            'address' => 'nullable',
            'last_donation_date' => 'required',
            'note' => 'nullable',
        ]);
        $donation_date = date('Y-m-d', strtotime($request->last_donation_date));
        $data = $request->all();
        $data['last_donation_date'] = $donation_date;
        $data['status'] = 1;
        // dd($data);
        BloodDonor::create($data);

        return redirect()->back()->with('success', 'Blood donation request sent successfully.');
    }



    public function CustomerBloodDonor()
    {
        $donors = BloodDonor::where('customer_id', auth()->guard('customer')->id())->get();
        return view('frontend.pages.profile.all-blood-donor', compact('donors'));
    }


    public function CustomerPost()
    {
        $posts = Post::where('customer_id', auth()->guard('customer')->id())->get();
        return view('frontend.pages.profile.customer-post', compact('posts'));
    }

    public function CustomerBlog()
    {
        $blogs = Blog::where('customer_id', auth()->guard('customer')->id())->get();
        return view('frontend.pages.profile.customer-blog', compact('blogs'));
    }
    //job post show
    public function CustomerJobPosts()
    {
        $jobposts = Job::where('customer_id', auth()->guard('customer')->id())->get();
        return view('frontend.pages.profile.customer-job-posts', compact('jobposts'));
    }



    //job post add
    public function CustomerJobPostAdd()
    {
        $districts = District::all();
        $upazilas = Upazila::all();
        $jobCategories = JobCategory::where('status', '1')->get();
        return view('frontend.pages.profile.customer-job-post-add', compact('districts', 'upazilas', 'jobCategories'));
    }
    public function CustomerJobPostStore(request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'district_id' => 'required|exists:districts,id',
            'upazila_id' => 'required|exists:upazilas,id',
            'job_category_id' => 'required|exists:job_categories,id',
            'title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'vacancy' => 'required|string|max:50',
            'age_range' => 'required|string|max:50',
            'location' => 'required|string|max:255',
            'salary' => 'required|string|max:100',
            'experience' => 'nullable|string|max:255',
            'deadline' => 'required|date',
            'gender' => 'nullable|string|max:50',
            'job_type' => 'nullable|string|max:50',
            'description' => 'required|string',
            'company_discription' => 'nullable|string',
            'company_number' => 'nullable|string|max:20',
            'company_email' => 'nullable|email|max:255',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $jobData = $request->all();
        $jobData['status'] = 0;
        // Generate slug if not provided
        if (empty($jobData['slug'])) {
            $jobData['slug'] = Str::slug($jobData['title']);
        }

        // Store company logo if uploaded
        if ($request->hasFile('company_logo')) {
            $logo = $request->file('company_logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('image/company_logo'), $logoName);
            $jobData['company_logo'] = $logoName;
        }

        Job::create($jobData);

        return redirect()->back()->with('success', 'Job created successfully.');
    }
    public function CustomerBlogAdd()
    {
        $categories = BlogCategory::get();
        return view('frontend.pages.profile.customer-blog-add', compact('categories'));
    }
    public function CustomerPostAdd()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $upazilas = Upazila::where('district_id', 12)->get();
        $unions = Union::where('upazilla_id', 1)->get();
        return view('frontend.pages.profile.customer-post-add', compact('categories', 'subCategories', 'upazilas', 'unions'));
    }
    public function CustomerPostStore(request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'main_img' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'description' => 'required|string',
            'category_id' => 'required',
            'sub_category_id' => 'nullable',
            'upazila_id' => 'required',
        ]);
        // dd($request->all());

        DB::beginTransaction();
        try {
            $blog_data = $request->all();
            $blog_data['status'] = 0;
            // dd($blog_data);
            // Generate slug if not provided
            if (empty($blog_data['slug'])) {
                $blog_data['slug'] = Str::slug($blog_data['title']) . '-' . Str::random(5);
            }

            // Handle main image upload
            if ($request->hasFile('main_img')) {
                $main_img_name = time() . '.' . $request->main_img->extension();
                $request->main_img->move(public_path('images/blogs'), $main_img_name);
                $blog_data['main_img'] = $main_img_name;
            }

            // Handle gallery images upload
            $galleryImages = [];
            if ($request->hasFile('gallry_img')) {
                foreach ($request->file('gallry_img') as $image) {
                    $galleryImgName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images/blogs/gallery'), $galleryImgName);
                    $galleryImages[] = $galleryImgName;
                }
                $blog_data['gallry_img'] = json_encode($galleryImages); // Save as JSON
            }

            Blog::create($blog_data);
            DB::commit();

            return back()->with('success', 'Blog created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function CustomerBlogStore(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'img'               => 'required|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'category_id'       => 'required',
            'customer_id'       => 'required|exists:customers,id',
            'content'           => 'required|string',

        ]);
        DB::beginTransaction();
        try {
            $blog_data = $request->all();
            $blog_data['slug'] = Str::slug($blog_data['title']);
            $blog_data['status'] = 0;

            if ($request->hasFile('img')) {
                $img_name = time() . '.' . $request->img->extension();
                $request->img->move(public_path('image/post'), $img_name);
                $blog_data['img'] = $img_name;
            }
            Post::create($blog_data);
            DB::commit();
            return back()->with('success', 'Blog created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    public function CusMahfilPoserAdd()
    {
        $categories = BlogCategory::get();
        return view('frontend.pages.profile.customer-mahfil-poster', compact('categories'));
    }
}
