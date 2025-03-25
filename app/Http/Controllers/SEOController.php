<?php

namespace App\Http\Controllers;

use App\Models\SEO;
use Illuminate\Http\Request;

class SEOController extends Controller
{

    public function SuccessStory(){
        $success_storys = Story::with('department')->get()->groupBy('department_id');
        return view('fontend.pages.institute.success-story',compact('success_storys'));
    }


    
    public function ContactPageSeo()
    {
        $data    = SEO::where('type', 'contact')->first();
        $type    = 'contact';
        return view('backend.pages.seo.seo', compact('data', 'type'));
    }

    public function SaveContactPageSeo(Request $request)
    {
        // dd($request->all());
        $type    = $request->type;
        $data    = SEO::where('type', $type)->where('id', $request->table_id)->first();
        if ($data) {
            SEO::where('type', $type)->where('id', $request->table_id)->update([
                'user_id'                => $request->user_id,
                'type'                   => $type,
                'text'                   => $request->text,
                'meta_title'             => $request->meta_title,
                'meta_description'       => $request->meta_description,
                'meta_keywords'          => $request->meta_keywords
            ]);
        } else {
            SEO::create($request->all());
        }
        return redirect()->back()->with('success', 'SEO data saved successfully.');
    }

    // Blood Doner Page Seo 
    public function AddsPageSeo()
    {
        $data    = SEO::where('type', 'adds')->first();
        $type    = 'adds';
        return view('backend.pages.seo.seo', compact('data', 'type'));
    }

    // Blood Doner Page Seo 
    public function BloodDonnerPageSeo()
    {
        $data    = SEO::where('type', 'blood_donner')->first();
        $type    = 'blood_donner';
        return view('backend.pages.seo.seo', compact('data', 'type'));
    }

    // BloodPostPageSeo Page Seo 
    public function BloodPostPageSeo()
    {
        $data    = SEO::where('type', 'blood_post')->first();
        $type    = 'blood_post';
        return view('backend.pages.seo.seo', compact('data', 'type'));
    }

    // PosterPageSeo Page Seo 
    public function PosterPageSeo()
    {
        $data    = SEO::where('type', 'poster')->first();
        $type    = 'poster';
        return view('backend.pages.seo.seo', compact('data', 'type'));
    }

    // LoginPageSeo Page Seo 
    public function LoginPageSeo()
    {
        $data    = SEO::where('type', 'login')->first();
        $type    = 'login';
        return view('backend.pages.seo.seo', compact('data', 'type'));
    }

    // RegPageSeo Page Seo 
    public function RegPageSeo()
    {
        $data    = SEO::where('type', 'reg')->first();
        $type    = 'reg';
        return view('backend.pages.seo.seo', compact('data', 'type'));
    }

    // JobPageSeo Page Seo 
    public function JobPageSeo()
    {
        $data    = SEO::where('type', 'job')->first();
        $type    = 'job';
        return view('backend.pages.seo.seo', compact('data', 'type'));
    }
}
