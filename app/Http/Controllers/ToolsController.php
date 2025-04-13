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
        if($slug == 'random-number-generator'){
            $type = 'random_number';
        }
        if($slug == 'temperature-converter'){
            $type = 'temperature';
        }
        if($slug == 'unit-converter'){
            $type = 'unit';
        }
        if($slug == 'text-counter'){
            $type = 'text_counter';
        }
        if($slug == 'percentage-calculator')
        {
            $type = 'percentage';
        }
        if($slug == 'average-calculator')
        {
            $type = 'average';
        }
        if($slug == 'grade-calculator')
        {
            $type = 'grade';
        }

        if($slug == 'smileys-emoji-copy'){
            $type = 'smileys_copy_emoji';
        }

        if($slug == 'pale-and-body-part-emoji'){
            $type = 'pale_copy_emoji';
        }

        if($slug == 'clothing-animals-nature-emoji-copy'){
            $type = 'clothe_animal_emoji';
        }


        // ---------- Game ------------------
        if($slug == 'online-guessing-game'){
            $type = 'guessing_game';
        }
        if($slug == 'online-snake-game'){
            $type = 'snake_game';
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
