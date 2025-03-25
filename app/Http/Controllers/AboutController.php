<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::with('user')->first(); 
        return view('backend.pages.page.about', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'text'       => 'required',
            'title'      => 'required',
            'user_id'    => 'required',
        ]);

        // Update the first about policy record
        About::first()->update($request->only(['text', 'title', 'user_id', 'meta_title', 'meta_desc', 'meta_tag']));

        return back()->with('success', 'about Policy updated successfully');
    }
}
