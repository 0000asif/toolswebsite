<?php

namespace App\Http\Controllers;

use App\Models\Revision;
use Illuminate\Http\Request;

class RevisionController extends Controller
{
    public function index(){
        $pending_rev = Revision::with('post:id,title')->where('status', '0')->orderBy('created_at','desc')->get();
        return view('backend.pages.revision.pending',compact('pending_rev'));
    }
    public function SaveRevision(Request $request)
    {
        $request->validate([
            'post_id'    => 'required|exists:blogs,id',
            'name'       => 'required|string|max:30',
            'number'     => 'required|numeric',
            'email'      => 'nullable|email|max:50',
            'text'       => 'required|string'
        ]);

        Revision::create([
            'post_id'   => $request->post_id,
            'name'      => $request->name,
            'number'    => $request->number,
            'email'     => $request->email,
            'text'      => $request->text,
            'status'    => 0
        ]);

        return redirect()->back()->with('success', 'Your revision request has been successfully submitted.');
    }

    public function update(Request $request,$id){
        // dd($request->all());
        $revision = Revision::find($id);
        $revision->status  = $request->status;
        $revision->user_id = Auth()->user()->id;
        $revision->save();

        return redirect()->back()->with('success', 'Revision approved successfully.');
    }

    public function ConfiremRevision(){
        $confirmed_rev = Revision::with('post:id,title')->where('status', '1')->orderBy('created_at','desc')->get();
        return view('backend.pages.revision.confirmed',compact('confirmed_rev'));
    }
    public function CancelRevision(){
        $cancels = Revision::with('post:id,title')->where('status', '2')->orderBy('created_at','desc')->get();
        return view('backend.pages.revision.cancel',compact('cancels'));
    }
    public function TrashRevision(){
        $trashes = Revision::with('post:id,title')->where('status', '3')->orderBy('created_at','desc')->get();
        return view('backend.pages.revision.trash',compact('trashes'));
    }

}
