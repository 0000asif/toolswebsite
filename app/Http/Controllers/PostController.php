<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use App\Models\Post;
use App\Models\Customer;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $blogs = Post::with(['category:id,name', 'user:id,name', 'customer:id,name'])->orderBy('created_at', 'desc')->get();
        return view('backend.pages.post.index', compact('blogs'));
    }
    public function pending()
    {
        $blogs = Post::with(['category:id,name', 'user:id,name'])->orderBy('created_at', 'desc')->where('status', '0')->get();
        return view('backend.pages.post.index', compact('blogs'));
    }
    public function approved()
    {
        $blogs = Post::with(['category:id,name', 'user:id,name'])->orderBy('created_at', 'desc')->where('status', '1')->get();
        return view('backend.pages.post.index', compact('blogs'));
    }

    public function create()
    {
        $categorys = BlogCategory::get();
        $customers = Customer::all();
        return view('backend.pages.post.create', compact('categorys', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'img'               => 'required|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'category_id'       => 'required',
            'customer_id'       => 'required|exists:customers,id',
            'content'           => 'required|string',

            // SEO Fields
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
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
            return redirect(route('blog.index'))->with('success', 'Blog created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $blogData    = Post::findOrFail($id);
        $categorys   = BlogCategory::get();
        $customers   = Customer::all();
        return view('backend.pages.post.edit', compact('blogData', 'categorys', 'customers'));
    }
    public function update(Request $request, $id)
    {
        $blog = Post::findOrFail($id);
        $request->validate([
            'title'             => 'required|string',
            'category_id'       => 'required',
            'customer_id'       => 'required|exists:customers,id',
            'content'           => 'required',
            'status'           => 'required',
            'img'               => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ]);
        DB::beginTransaction();
        try {
            $data = $request->all();
            if ($request->hasFile('img')) {
                $previous_img = public_path('image/post') . '/' . $blog->img;
                if (File::exists($previous_img)) {
                    File::delete($previous_img);
                }
                $img_name = time() . '.' . $request->img->extension();
                $request->img->move(public_path('image/post'), $img_name);
                $data['img'] = $img_name;
            } //   Rename the existing image*
            elseif (!empty($request->new_main_img_name) && $blog->img) {
                $oldFilePath = public_path('image/post/' . $blog->img);
                $extension = pathinfo($oldFilePath, PATHINFO_EXTENSION);
                $newFileName = $request->new_main_img_name . '.' . $extension;
                $newFilePath = public_path('image/post/' . $newFileName);

                if (File::exists($oldFilePath) && !File::exists($newFilePath)) {
                    rename($oldFilePath, $newFilePath);
                    $data['img'] = $newFileName;
                }
            } else {
                $data['img'] = $blog->img;
            }
            $data['slug'] = $request->slug;
            $data['user_id'] = auth()->user()->id;
            $data['status'] = $request->status;

            $blog->update($data);
            DB::commit();
            return redirect(route('blog.index'))->with('success', 'Blog updated successfully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('failed', 'something went wrong' . $e->getMessage());
        }
    }

    // public function show($id)
    // {
    //     $blogData = Post::with(['category:id,name', 'user:id,name'])->findOrFail($id);
    //     return view('backend.pages.post.show', compact('blogData'));
    // }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('frontend.pages.blogs.preview-blog', compact('post'));
    }

    public function destroy($id)
    {
        $data = Post::findOrFail($id);
        // dd($data);
        if ($data->img) {
            $previous_img = public_path('image/post') . '/' . $data->img;
            if (File::exists($previous_img)) {
                File::delete($previous_img);
            }
        }
        $data->delete();
        return redirect()->back()->with('success', 'Delete Successful!');
    }


    // api
    public function GetBlog()
    {
        $data = Post::get();
        $customLink = env('DOMAIN') . '/public/image/blog/';

        $data->transform(function ($item, $key) use ($customLink) {
            $item->img = $customLink . $item->img;
            return $item;
        });
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
    public function GetBlogById($id)
    {
        $data = Post::findOrFail($id);
        $customLink = env('DOMAIN') . '/public/image/slider/';

        $data->transform(function ($item, $key) use ($customLink) {
            $item->img = $customLink . $item->img;
            return $item;
        });
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
