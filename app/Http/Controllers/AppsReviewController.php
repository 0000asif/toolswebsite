<?php

namespace App\Http\Controllers;

use App\Models\AppsReview;
use Illuminate\Http\Request;

class AppsReviewController extends Controller
{
    public function index(){
      $appsreview = AppsReview::get();
      return view('backend.pages.apps-review.index', compact('appsreview'));
    }

    public function edit($id){
      $appsreview = AppsReview::find($id);
      return view('backend.pages.apps-review.edit', compact('appsreview'));
    }

   public function update(Request $request, $id)
   {
       $appsreview = AppsReview::find($id);
       $appsreview->review = $request->review;
       $appsreview->status = $request->status;
       $appsreview->save();

       return redirect()->route('appsreview.index')->with('success', 'Review updated successfully!');
   }
   public function destroy($id){
       $appsreview = AppsReview::find($id);
       $appsreview->delete();

       return redirect()->route('appsreview.index')->with('success', 'Review deleted successfully!');
   }
}
