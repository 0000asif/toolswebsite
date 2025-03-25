<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Blog;
use App\Models\Post;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'desc')->get();
        return view('backend.pages.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'phone' => ['nullable'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $data['password'] = Hash::make($request->password);



        //store image and also save the path in the database
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/customers'), $image_name);
            $data['image'] = $image_name;
        }

        Customer::create($data);


        return redirect()->route('customer.index')->with('success', 'Customer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        $blogs = Blog::where('customer_id', $customer->id)->get();
        $jobs = Job::where('customer_id', $customer->id)->get();
        $posts = Post::where('customer_id', $customer->id)->get();
        return view('backend.pages.customer.show', compact('customer', 'blogs', 'jobs', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('backend.pages.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateCustomer(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        // dd($request->all() , $customer);
        // Validate request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'old_password' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,png,jpeg,gif,web,webp', 'max:2048'],
            'status' => ['required', 'in:0,1'],
        ]);

        // Password update logic
        if ($request->old_password) {
            $request->validate([
                'password' => ['required', 'string', 'min:6'],
            ]);

            // 🔥 Correct password verification
            if (Hash::check($request->old_password, $customer->password)) {
                $customer->password = Hash::make($request->password);
                $customer->save(); // 🔥 Save the updated password
            } else {
                return redirect()->back()->with('error', 'Old Password is Incorrect');
            }
        }


        // Image upload logic
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($customer->image && file_exists(public_path('images/customers/' . $customer->image))) {
                unlink(public_path('images/customers/' . $customer->image));
            }

            // Upload new image
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/customers'), $image_name);
            $customer->image = $image_name;
        }

        // Update customer details
        $customer->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => $request->status,
        ]);

        return redirect()->route('customer.index')->with('success', 'Customer updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        // Delete image from storage
        if ($customer->image && file_exists(public_path('images/customers/' . $customer->image))) {
            unlink(public_path('images/customers/' . $customer->image));
        }

        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully.');
    }

    public function addCustomer(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:customers,email',
            'phone' => 'nullable|string|max:15',
        ]);
        $validated['user_id'] = auth()->user()->id;

        $customer = Customer::create($validated);

        return response()->json([
            'success' => true,
            'customer' => $customer,
        ]);
    }
}
