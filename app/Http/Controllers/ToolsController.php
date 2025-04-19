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

        if($slug == 'food-activity-sport-emoji-copy'){
            $type = 'food_sport_emoji';
        }

        if($slug == 'travel-place-objects-emoji-copy'){
            $type = 'travel_object_emoji';
        }

        if($slug == 'text-symbol-copy-paste-online'){
            $type = 'symbol_copy_paste';    
        }

        if($slug == 'fraction-punctuation-symbols-copy'){
            $type = 'function_symbols';    
        }

        if($slug == 'popular-symbols-emoji-icon-copy-and-paste'){
            $type = 'popular_symbols';    
        }

        if($slug == 'year-2025-calendar-bangladesh'){
            $type = 'english_calendar';    
        }

        if($slug == 'scientific-calculator-online'){
            $type = 'scientific_calculator';    
        }

        if($slug == 'online-math-calculator'){
            $type = 'math_calculator';    
        }
        if($slug == 'domain-name-checker'){
            $type = 'domain_name_checker';    
        }

        if($slug == 'what-is-my-ip-find-my-ip-address'){
            $type = 'what_id_address';    
        }
        if($slug == 'ip-address-location'){
            $type = 'ip_address_location';    
        }
        if($slug == 'free-placeholder-image'){
            $type = 'free_placeholder_image';    
        }
        if($slug == 'current-position-of-the-iss'){
            $type = 'space_station_map';    
        }
        if($slug == 'free-meme-image-download'){
            $type = 'meme_image_download';    
        }
        if ($slug == 'free-brand-logo-download') {
            $type = 'free_brand_logo';
        }
        if ($slug == 'website-seo-checker') {
            $type = 'website_seo_checker';
        }
        if ($slug == 'random-user-generator') {
            $type = 'random_user_generator';
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
