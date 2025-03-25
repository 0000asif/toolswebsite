<?php

namespace App\Http\Controllers;

use App\Models\AppsReview;
use App\Models\MobileApps;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MobileAppsController extends Controller
{
    public function index()
    {
        $data = MobileApps::first();
        return view('backend.pages.settings.apps', compact('data'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $data = MobileApps::first(); // Adjust as necessary to get the correct model instance.

        // Validate the request
        $request->validate([
            'apps_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the images if provided
        $random = Str::random(5);
        $imageFields = ['apps_logo', 'img1', 'img2', 'img3', 'img4', 'apps'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                // Delete the old image
                if ($data->$field && file_exists(public_path("image/Apps/{$data->$field}"))) {
                    unlink(public_path("image/Apps/{$data->$field}"));
                }

                // Upload the new image
                $file = $request->file($field);
                // $filename = $random . '_' . "Sirajganj-city-mobile-apps" . '.' . $file->getClientOriginalExtension();
                $filename = "Sirajganj-city-mobile-apps" . '-' . $random . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('image/Apps'), $filename);

                // Update the field in the model
                $data->$field = $filename;
            }
        }

        // Update other fields
        $data->update($request->except($imageFields)); // Exclude image fields as they are already handled.

        return redirect()->back()->with('success', 'Mobile Apps updated successfully');
    }

    public function show() {}
    public function MobileApss()
    {
        $data = MobileApps::first();
        $reviews = AppsReview::where('status', '1')->get();
        return view('frontend.pages.apps.index', compact('data','reviews'));
    }
    public function downloadApk($filename)
    {
        $apps = MobileApps::first();
        $apps->view = $apps->view + 1;
        $apps->save();
        $filePath = public_path('image/Apps/' . $filename);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        return redirect()->back()->with('error', 'File not found.');
    }

    public function saveappsreview(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|digits:11',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
        ]);

        // Create the review with validated data
        AppsReview::create($request->only(['name', 'email', 'phone', 'rating', 'review']));

        return redirect()->back()->with('success', 'রিভিউ দেওয়ার জন্য আপনাকে অনেক ধন্যবাদ');
    }
}
