<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function ViewSingleTools($slug){
        $relatedBlogs = null;
        $blog = null;
        $type = 'all';
        if($slug == 'bmi-calculator'){
            $type = 'bmi';
        }
        if($slug == 'age-calculator'){
            $type = 'age';
        }

        return view('frontend.pages.singleTools', compact('relatedBlogs','type'));
    }
}
