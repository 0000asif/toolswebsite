<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\Category;
use App\Models\Customer;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with(['user', 'category', 'subCategory', 'upazila'])->latest()->get();
        return view('backend.pages.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $upazilas = Upazila::where('district_id', 12)->get();
        $unions = Union::where('upazilla_id', 6)->get();
        $customers = Customer::all();
        return view('backend.pages.blogs.create', compact('categories', 'subCategories', 'upazilas', 'unions', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'main_img' => 'required|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'description' => 'required|string',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'upazila_id' => 'required',
            // SEO Fields
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
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

            return redirect(route('blogs.index'))->with('success', 'Blog created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('backend.pages.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        $customers = Customer::all();
        $subcategories = SubCategory::all();
        $upazilas = Upazila::where('district_id', 12)->get();
        $unions = Union::where('upazilla_id', 6)->get();
        return view('backend.pages.blogs.edit', compact('blog', 'categories', 'subcategories', 'upazilas', 'unions', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */

public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'slug' => 'required|string|unique:blogs,slug,' . $id,
            'main_img' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'description' => 'required|string',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'upazila_id' => 'required',
            'status' => 'required|boolean',
            // SEO Fields
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
        ]);
        // dd($request->all());
        DB::beginTransaction();

        try {
            $blogData = $request->all();
            // dd($blogData);
            $blogData['user_id'] = Auth::user()->id;

            // Update main image if a new file is uploaded
            if ($request->hasFile('main_img')) {
                // Delete the old main image if it exists
                if ($blog->main_img && file_exists(public_path('images/blogs/' . $blog->main_img))) {
                    unlink(public_path('images/blogs/' . $blog->main_img));
                }

                $mainImageName = time() . '.' . $request->main_img->extension();
                $request->main_img->move(public_path('images/blogs'), $mainImageName);
                $blogData['main_img'] = $mainImageName;
            }

            // Handle gallery image updates
            if ($request->hasFile('gallry_img')) {
                // Delete old gallery images if they exist
                if ($blog->gallry_img) {
                    $oldGalleryImages = json_decode($blog->gallry_img, true);
                    foreach ($oldGalleryImages as $oldImage) {
                        $oldImagePath = public_path('images/blogs/gallery/' . $oldImage);
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }
                }

                $galleryImages = [];
                foreach ($request->file('gallry_img') as $image) {
                    $galleryImageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images/blogs/gallery'), $galleryImageName);
                    $galleryImages[] = $galleryImageName;
                }
                $blogData['gallry_img'] = json_encode($galleryImages);
            }

            // Update the blog with new data
            $blog->update($blogData);

            DB::commit();

            return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->main_img && file_exists(public_path('images/blogs/' . $blog->main_img))) {
            unlink(public_path('images/blogs/' . $blog->main_img));
        }

        if ($blog->gallry_img) {
            $galleryImages = json_decode($blog->gallry_img, true);
            foreach ($galleryImages as $image) {
                $imagePath = public_path('images/blogs/gallery/' . $image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        }

        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog and associated images deleted successfully.');
    }
}
