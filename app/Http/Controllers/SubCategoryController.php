<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategory = SubCategory::all();
        return view('backend.pages.SubCategory.index', compact('subCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', '1')->get();
        return view('backend.pages.SubCategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'], // Ensure category exists
            'status' => ['required', 'boolean'], // Ensure status is boolean
        ]);

        DB::beginTransaction();

        try {
            // Create a slug for the subcategory
            $slug = Str::slug($request->name);
            while (Subcategory::where('slug', $slug)->exists()) {
                $slug = Str::slug($request->name) . '-' . Str::random(8); // Ensure unique slug
            }

            // Prepare data for storing
            $data = [
                'category_id' => $request->category_id,
                'user_id' => Auth::id(), // Logged in user
                'name' => $request->name,
                'slug' => $slug,
                'status' => $request->status,
            ];

            // Store subcategory in database
            Subcategory::create($data);

            DB::commit();
            return redirect()->route('subcategory.index')->with('success', 'Subcategory created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subcategory)
    {
        $categories = Category::where('status', '1')->get();
        return view('backend.pages.subcategory.edit', compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
            'status' => ['required', 'boolean'],
        ]);

        DB::beginTransaction();

        try {

            // Create a slug for the subcategory
            $slug = Str::slug($request->name);
            while (Subcategory::where('slug', $slug)->where('id', '!=', $subCategory->id)->exists()) {
                $slug = Str::slug($request->name) . '-' . Str::random(8); // Ensure unique slug
            }

            // Update the subcategory data
            $subCategory->update([
                'category_id' => $request->category_id,
                'user_id' => Auth::id(),
                'name' => $request->name,
                'slug' => $slug,
                'status' => $request->status,
            ]);

            DB::commit();
            return redirect()->route('subcategory.index')->with('success', 'Subcategory updated successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $sub = SubCategory::find($id);
        $sub->delete();
        return redirect()->route('subcategory.index')->with('success', 'Subcategory deleted successfully');
    }
}
