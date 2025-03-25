<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = 'all';
        $blogs = Blog::with(['user', 'category', 'subCategory'])->whereNot('status', '33')->latest()->get();
        return view('backend.pages.blogs.index', compact('blogs', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('backend.pages.blogs.create', compact('categories', 'subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required',
            'sub_category_id' => 'nullable',
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

            Blog::create($blog_data);
            DB::commit();

            return redirect(route('tools.index'))->with('success', 'Blog created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    // public function show(Blog $blog)
    // {
    //     return view('backend.pages.tools.show', compact('blog'));
    // }
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('frontend.post-preview', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('backend.pages.blogs.edit', compact('blog', 'categories', 'subcategories'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,' . $id,
            'description' => 'required|string',
            'category_id' => 'required',
            'sub_category_id' => 'nullable',
            'status' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        DB::beginTransaction();

        try {
            $blogData = $request->all();
            $blogData['user_id'] = Auth::user()->id;
            
            //   Upload a new image if provided*
            if ($request->hasFile('main_img')) {
                // Delete the old image if it exists
                if ($blog->main_img && file_exists(public_path('images/blogs/' . $blog->main_img))) {
                    unlink(public_path('images/blogs/' . $blog->main_img));
                }

                $mainImageName = time() . '.' . $request->main_img->extension();
                $request->main_img->move(public_path('images/blogs'), $mainImageName);
                $blogData['main_img'] = $mainImageName;
            }
            //   Rename the existing image*
            elseif (!empty($request->new_main_img_name) && $blog->main_img) {
                $oldFilePath = public_path('images/blogs/' . $blog->main_img);
                $extension = pathinfo($oldFilePath, PATHINFO_EXTENSION);
                $newFileName = $request->new_main_img_name . '.' . $extension;
                $newFilePath = public_path('images/blogs/' . $newFileName);

                if (File::exists($oldFilePath) && !File::exists($newFilePath)) {
                    rename($oldFilePath, $newFilePath);
                    $blogData['main_img'] = $newFileName;
                }
            } else {
                $blogData['main_img'] = $blog->main_img;
            }


            //   Update the blog with new data*
            $blog->update($blogData);

            DB::commit();

            return redirect()->route('tools.index')->with('success', 'Blog updated successfully');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with(
                'error',
                $e->getMessage()
            );
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {


        $blog->delete();
        return redirect()->route('tools.index')->with('success', 'Blog and associated images deleted successfully.');
    }

    public function BlogTrash($id)
    {
        $blog = Blog::find($id);
        $blog->status = 33;
        $blog->save();
        return redirect()->route('tools.index')->with('success', 'Blog moved to trash successfully.');
    }
    public function BlogRestor($id)
    {
        $blog = Blog::find($id);
        $blog->status = 0;
        $blog->save();
        return redirect()->route('tools.index')->with('success', 'Blog moved to trash successfully.');
    }

    public function pending()
    {
        $type = 'pending';
        $blogs = Blog::with(['user', 'category', 'subCategory', 'upazila'])->where('status', '0')->latest()->get();
        return view('backend.pages.tools.index', compact('blogs', 'type'));
    }

    public function approved()
    {
        $type = 'public';
        $blogs = Blog::with(['user', 'category', 'subCategory', 'upazila'])->where('status', '1')->latest()->get();
        return view('backend.pages.tools.index', compact('blogs', 'type'));
    }
    public function BlogTrashView()
    {
        $blogs = Blog::with(['user', 'category', 'subCategory', 'upazila'])->where('status', '33')->latest()->get();
        $type = 'trash';
        return view('backend.pages.tools.index', compact('blogs', 'type'));
    }
}
