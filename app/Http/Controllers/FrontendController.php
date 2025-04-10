<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use App\Models\Blog;
use App\Models\Post;
use App\Models\About;
use App\Models\Union;
use App\Models\Mahfil;
use App\Models\Setting;
use App\Models\Upazila;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndCondition;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    // abdullah start 
    public function home()
    {
        $view = Setting::first();
        $view->view = $view->view + 1;
        $view->save();
        $sub_cat     = SubCategory::where('status', '1')->get();
        $upazila     = Upazila::where('district_id', '12')->get();
        $union       = Union::get();
        $categories  = Category::where('status', 1)->orderBy('created_at', 'desc')->get();
        $tools = Blog::with('category')->where('status','1')->get()->groupBy('category_id');
        return view('frontend.index', compact('categories', 'upazila', 'union', 'sub_cat','tools'));
    }
    // abdullah end 


    public function category_view($slug)
    {
        $category = Category::where('slug', $slug)->first();
        if ($category) {
            $blogs = $category->blogs()->where('status', 1)->paginate(20);
            $sub_cat = SubCategory::where('category_id', $category->id)->orderBy('created_at', 'desc')->where('status', '1')->paginate(20);
            return view('frontend.category_view', compact('category', 'blogs', 'sub_cat'));
        } else {
            return redirect()->back()->with('error', 'Category not found');
        }
    }

    public function subcategory_view($slug)
    {
        $category = SubCategory::where('slug', $slug)->firstOrFail();
        if ($category) {
            $blogs = Blog::where('sub_category_id', $category->id)->where('status', 1)->orderBy('created_at', 'desc')->where('status', '1')->paginate(20);
            // dd($blogs);
            return view('frontend.subcategory_view', compact('category', 'blogs'));
        } else {
            return redirect()->back()->with('error', 'Category not found');
        }
    }

    public function blogcategory_view($category_slug)
    {
        $category = BlogCategory::where('slug', $category_slug)->first();
        if ($category) {
            $posts = Post::where('category_id', $category->id)->where('status', 1)->orderBy('created_at', 'desc')->paginate(20);
            return view('frontend.blogcategory_view', compact('category', 'posts'));
        } else {
            return redirect()->back()->with('error', 'Not found');
        }
    }

    public function single_post($slug)
    {
        $blog       = Blog::where('slug', $slug)->first();
        $blog->view = $blog->view + 1;
        $blog->save();
        if ($blog) {
            $relatedBlogs = Blog::where('category_id', $blog->category_id)
                ->where('id', '!=', $blog->id)
                ->where('status', 1)
                ->take(20)
                ->get();

            return view('frontend.blog_view', compact('blog', 'relatedBlogs'));
        } else {
            return redirect()->back()->with('error', 'Blog not found');
        }
    }




    public function blog_view($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->view = $post->view + 1;
        $post->save();
        //related posts
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 1)
            ->take(3)
            ->get();
        return view('frontend.pages.blogs.post_view', compact('post', 'relatedPosts'));
    }


    //start 7/1/25
    public function terms_and_conditions()
    {
        $condition = TermsAndCondition::first();
        $type = 'terms';
        //dd($condition);

        return view('frontend.pages.policy.terms-condition', compact('condition','type'));
    }

    public function privacy_policy()
    {
        $condition = PrivacyPolicy::first();
        $type = 'privacy';
        //dd($condition);

        return view('frontend.pages.policy.terms-condition', compact('condition','type'));
    }

    public function advertisements()
    {
        $condition = SEO::where('type','adds')->first();
        return view('frontend.advertisements', compact('condition'));
    }

    public function contact_us()
    {
        $condition = SEO::where('type', 'contact')->first();
        return view('frontend.contact_us',compact('condition'));
    }

    public function about_us()
    {
        $about = About::first();
        return view('frontend.about_us',compact('about'));
    }

    //end 7/1/25
    // Mahfil Poster 
    public function MahfilPoster()
    {
        $condition = SEO::where('type', 'poster')->first();
        return view('frontend.pages.mahfil.poster', compact('condition'));
    }
}
