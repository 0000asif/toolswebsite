<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function ViewSingleTools($slug){
        $views = Blog::where('slug', $slug)->first();
        if($views){
            $views->increment('view');
        } 
        $relatedBlogs = null;
        $blog = null;
        $type = 'all';
        if($slug == 'bmi-calculator'){
            $type = 'bmi';
        }
        if($slug == 'age-calculator'){
            $type = 'age';
        }
        if($slug == 'strong-password-generator'){
            $type = 'password_generator';
        }

        return view('frontend.pages.singleTools', compact('relatedBlogs','type'));
    }

    public function ToolsUsedCount(Request $request){
        $id = $request->toolsID;
        // dd($id);
        $views = Blog::where('id', $id)->first();
        if($views){
            $views->increment('used_count');
        } 
        return response()->json(['status' => 'success']);
    }
}
