<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Blog;
use App\Models\Post;
use App\Models\Mahfil;
use App\Models\Category;
use App\Models\BloodPost;
use App\Models\BloodDonor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->validate([
            'query' => 'nullable|string|max:255',
        ])['query'] ?? '';

        $query = $request->get('query', '');

        // Perform searches in multiple tables
        $table1Results = Blog::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->select('id', 'title', 'description')
            ->paginate(10);

        $table2Results = Post::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->select('id', 'title as title', 'content as description')
            ->paginate(10);


        // Combine and return results
        $results = $table1Results->merge($table2Results);

        return response()->json($results);
    }

    public function SearchShow($id)
    {
        // Attempt to find the result in both tables
        $result = Blog::find($id) ?? Post::find($id);

        if (!$result) {
            abort(404, 'Result not found');
        }

        // dd($result);
        return view('frontend.pages.search.search-result', compact('result'));
    }

    public function GlobalSearch(Request $request)
    {
        $query = $request->input('query');

        // Search blogs
        $blogs = Blog::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        // Search posts
        $posts = Post::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->get();

        // Search jobs
        $jobs = Job::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        // Search categories
        $categories = Category::where('name', 'LIKE', "%{$query}%")
            ->get();

        // Search mahfils
        $mahfils = Mahfil::where('address', 'LIKE', "%{$query}%")
            ->get();

        // Search blood donors
        $bloodDonors = BloodDonor::where('name', 'LIKE', "%{$query}%")
            ->orWhere('note', 'LIKE', "%{$query}%")
            ->get();

        // Search blood posts
        $bloodPosts = BloodPost::where('patient_info', 'LIKE', "%{$query}%")
            ->get();

        // Combine results
        $results = [
            'blogs' => $blogs,
            'posts' => $posts,
            'jobs' => $jobs,
            'categories' => $categories,
            'mahfils' => $mahfils,
            'blood_donors' => $bloodDonors,
            'blood_posts' => $bloodPosts
        ];

        // dd($results);
        return view('frontend.pages.search.global-search-result', compact('results', 'query'));
    }
}
