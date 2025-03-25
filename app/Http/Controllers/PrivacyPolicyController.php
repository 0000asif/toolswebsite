<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $privacy = PrivacyPolicy::with('user')->first(); // Retrieve the first privacy policy with user relationship
        return view('backend.pages.privacy-policy.index', compact('privacy'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'title' => 'required',
            'user_id' => 'required',
        ]);

        // Update the first privacy policy record
        PrivacyPolicy::first()->update($request->only([
            'content',
            'title',
            'user_id',
            'meta_title',
            'meta_description',
            'meta_keywords',
        ]));

        return back()->with('success', 'Privacy Policy updated successfully');
    }
}
