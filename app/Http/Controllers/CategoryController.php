<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('created_at','desc')->get();
        return view('backend.pages.category.index', compact('categories'));
    }

    // New Column : view , meta_title , meta_text , meta_keywords 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpeg,png,jpg,gif,web,svg', 'max:2048'],
            'status' => ['required'],
        ]);

        DB::beginTransaction();

        try {
            // Initialize data array
            $data = [
                'name' => $request->name,
                'status' => $request->status,
                'meta_keywords' => $request->meta_keywords,
                'meta_description' => $request->meta_description,
                'meta_title' => $request->meta_title,
                'text' => $request->text,
                'user_id' => Auth::id(), // Set user ID
            ];

            // Create a slug for the category
            $slug = $request->name;
            while (Category::where('slug', $slug)->exists()) {
                $slug = $request->name . '-' . Str::random(8); 
            }
            $data['slug'] = $slug;

            // Handle image upload
            if ($request->hasFile('image')) {
                $img_name = time() . '.' . $request->file('image')->extension(); 
                $request->file('image')->move(public_path('image/category'), $img_name); 
                $data['image'] = $img_name; 
            }

            $data['view'] = '0'; 
            // Store category in the database
            Category::create($data);

            DB::commit();
            return redirect()->back()->with('success', 'Category created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image'], // Image is optional during updates
            'status' => ['required', 'boolean'], // Ensure status is boolean
        ]);

        DB::beginTransaction();

        try {

            // Update basic fields
            $category->name = $request->name;
            $category->status = $request->status;
            $category->meta_description = $request->meta_description;
            $category->meta_keywords = $request->meta_keywords;
            $category->meta_title = $request->meta_title;
            $category->text = $request->text;

            // Handle slug uniqueness
            $slug = $request->name;
            if ($category->slug !== $slug && Category::where('slug', $slug)->exists()) {
                $slug = $slug . '-' . Str::random(8);
            }
            $category->slug = $slug;

            // Handle image upload (optional)
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($category->image && file_exists(public_path('image/category/' . $category->image))) {
                    unlink(public_path('image/category/' . $category->image));
                }

                // Save new image
                $img_name = time() . '.' . $request->file('image')->extension();
                $request->file('image')->move(public_path('image/category'), $img_name);
                $category->image = $img_name;
            }

            $category->save();

            DB::commit();

            return redirect()->route('category.index')->with('success', 'Category updated successfully');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Replace `Product` with the actual related model, and `category_id` with the appropriate foreign key
        if (SubCategory::where('category_id', $category->id)->exists()) {
            return redirect()->back()->with('error', 'This category is in use and cannot be deleted.');
        }

        DB::beginTransaction();

        try {
            // Delete the category image if it exists
            if ($category->image && file_exists(public_path('image/category/' . $category->image))) {
                unlink(public_path('image/category/' . $category->image));
            }

            // Delete the category
            $category->delete();

            DB::commit();
            return redirect()->route('category.index')->with('success', 'Category deleted successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
