<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TermsAndCondition;
use Illuminate\Routing\Controller;

class TermsAndConditionController extends Controller
{
    public function index()
    {
        $terms = TermsAndCondition::with('user')->first();
        return view('backend.pages.terms-conditon.index', compact('terms'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'user_id' => 'required',
        ]);
        TermsAndCondition::first()->update($request->all());
        return back()->with('success', 'Term and Conditions updated successfully');
    }
}
