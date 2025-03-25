<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $blog_category = BlogCategory::with('user:id,name')->get();
        return view('backend.pages.blog-category.index', compact('blog_category'));
    }
    public function create()
    {
        return view('backend.pages.blog-category.create');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name'      => 'required|string|max:255',
        ]);

        $blog_category              = $request->all();
        $blog_category['user_id']   = auth()->user()->id;
        $blog_category['slug']      =  Str::slug($blog_category['name']);
        BlogCategory::create($blog_category);

        return back()->with('success', 'Blog Category Added Successfully');
    }
    public function edit(BlogCategory $blog_category)
    {
        return view('backend.pages.blog-category.edit', compact('blog_category'));
    }
    public function update(Request $request, BlogCategory $blog_category)
    {
        // Validate the request data
        $request->validate([
            'name'           => 'required|string|max:255',
        ]);

        $update_blog_category            = $request->all();
        $update_blog_category['user_id'] = auth()->user()->id;
        $update_blog_category['slug']    = Str::slug($update_blog_category['name']);

        $blog_category->update($update_blog_category);
        return redirect(route('blog-category.index'))->with('success', 'Blog Category Updated Successfully');
    }
    public function destroy($id)
    {
        $blog_category = BlogCategory::findOrFail($id);

        $blog_exists = Blog::where('category_id', $blog_category->id)->exists();
        if ($blog_exists) {
            return back()->with('error', 'This blog category is associated with a blog post and cannot be deleted.');
        } else {
            $blog_category->delete();
            return back()->with('success', 'Blog Category Deleted Successfully');
        }
    }
}
