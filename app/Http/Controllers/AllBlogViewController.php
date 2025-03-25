<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class AllBlogViewController extends Controller
{
    public function blogs()
    {
        $categories  = BlogCategory::orderBy('created_at', 'desc')->get();
        return view('frontend.pages.blogs.blogs', compact('categories'));
    }
    public function all_blog_response(Request $request)
    {
        // $blogs = Post::paginate(40);
        $posts       = Post::where('status', 1)->orderBy('created_at', 'desc')->paginate(40);
        return view('frontend.pages.blogs.allBlogRes', compact('posts'));
    }

    public function get_blog_filter_data(Request $request)
    {
        $category_id = $request->category_id;
        $filter1 = $request->filter1;
        $filter2 = $request->filter2;

        // Initialize the query
        $data = Post::query();

        // Filter by category
        if ($category_id) {
            $data->where('category_id', $category_id);
        }

        // Filter by filter1 (Category-based filtering)
        if ($filter1) {
            switch ($filter1) {
                case 'populer':
                    $data->orderBy('view', 'desc'); // Assuming 'views' column tracks popularity
                    break;
                case 'new':
                    $data->orderBy('created_at', 'desc'); // Latest blogs
                    break;
                case 'old':
                    $data->orderBy('created_at', 'asc'); // Oldest blogs
                    break;
            }
        }

        // Filter by filter2 (Date-based filtering)
        if ($filter2) {
            switch ($filter2) {
                case 'today':
                    $data->whereDate('created_at', now()->toDateString());
                    break;
                case 'this_week':
                    $data->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
                    break;
                case 'this_month':
                    $data->whereMonth('created_at', now()->month)
                        ->whereYear('created_at', now()->year);
                    break;
                case 'this_year':
                    $data->whereYear('created_at', now()->year);
                    break;
            }
        }

        // Fetch the filtered data
        $posts = $data->orderBy('created_at', 'desc')->paginate(40);
        return view('frontend.pages.blogs.allBlogRes', compact('posts'));
    }
}
