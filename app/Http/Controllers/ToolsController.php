<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function ViewSingleTools($slug)
    {
        $views = Blog::where('slug', $slug)->first();
        if ($views) {
            $views->increment('view');
        }
        $relatedBlogs = null;
        $blog = null;
        $type = 'all';
        if ($slug == 'bmi-calculator') {
            $type = 'bmi';
        }
        if ($slug == 'age-calculator') {
            $type = 'age';
        }
        if ($slug == 'strong-password-generator') {
            $type = 'password_generator';
        }
        if ($slug == 'random-number-generator') {
            $type = 'random_number';
        }
        if ($slug == 'temperature-converter') {
            $type = 'temperature';
        }
        if ($slug == 'unit-converter') {
            $type = 'unit';
        }
        if ($slug == 'text-counter') {
            $type = 'text_counter';
        }
        if ($slug == 'percentage-calculator') {
            $type = 'percentage';
        }
        if ($slug == 'average-calculator') {
            $type = 'average';
        }
        if ($slug == 'grade-calculator') {
            $type = 'grade';
        }
        if ($slug == 'uppercase-to-lowercase') {
            $type = 'uppercase_lowercase';
        }
        if ($slug == 'lowercase-to-uppercase') {
            $type = 'lowercase_uppercase';
        }

        if ($slug == 'smileys-emoji-copy') {
            $type = 'smileys_copy_emoji';
        }

        if ($slug == 'pale-and-body-part-emoji') {
            $type = 'pale_copy_emoji';
        }

        if ($slug == 'clothing-animals-nature-emoji-copy') {
            $type = 'clothe_animal_emoji';
        }
        if ($slug == 'decimal-to-hexadecimal-converter') {
            $type = 'decimal_hexadecimal';
        }
        if ($slug == 'decimal-to-binary-converter') {
            $type = 'decimal_binary';
        }
        if ($slug == 'decimal-to-octal-converter') {
            $type = 'decimal_octal';
        }
        if ($slug == 'binary-to-decimal-converter') {
            $type = 'binary_decimal';
        }
        if ($slug == 'octal-to-decimal-converter') {
            $type = 'octal_decimal';
        }
        if ($slug == 'hexadecimal-to-decimal-converter') {
            $type = 'hexadecimal_decimal';
        }
        if ($slug == 'decimal-to-ascii-converter') {
            $type = 'decimal_ascii';
        }
        if ($slug == 'ascii-to-decimal-converter') {
            $type = 'ascii_decimal';
        }
        if ($slug == 'text-to-ascii-converter') {
            $type = 'text_ascii';
        }
        if ($slug == 'ascii-to-text-converter') {
            $type = 'ascii_text';
        }
        if ($slug == 'text-to-binary-converter') {
            $type = 'text_binary';
        }
        if ($slug == 'binary-to-text-converter') {
            $type = 'binary_text';
        }

        //not done
        if ($slug == 'text-to-html-entities-converter') {
            $type = 'text_html_entities';
        }
        if ($slug == 'html-entities-to-text-converter') {
            $type = 'html_entities_text';
        }

        return view('frontend.pages.singleTools', compact('relatedBlogs', 'type'));
    }

    public function ToolsUsedCount(Request $request)
    {
        $id = $request->toolsID;
        // dd($id);
        $views = Blog::where('id', $id)->first();
        if ($views) {
            $views->increment('used_count');
        }
        return response()->json(['status' => 'success']);
    }
}
