<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        $pending_contact = Contact::with('user')->where('status', '0')->latest()->get();
        return view('backend.pages.contact.pending', compact('pending_contact'));
    }

    public function SaveContact(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'   => 'required|string|max:30|',
            'number' => 'required|numeric',
            'email'  => 'nullable|email|max:50',
            'text'   => 'required|string|max:300',
            'type'   => 'required', 
        ]);

        Contact::create([
            'name'   => $request->name,
            'number' => $request->number,
            'email'  => $request->email,
            'text'   => $request->text,
            'type'   => $request->type,
            'status' => 0
        ]);

        return redirect()->back()->with('success', 'Contact request has been successfully submitted.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:0,1,2,3',
        ]);

        $revision = Contact::findOrFail($id);
        $revision->update([
            'status'  => $request->status,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Contact updated successfully.');
    }

    public function CompletedContact()
    {
        $completed_contact = Contact::where('status', 1)->latest()->get();
        return view('backend.pages.contact.completed', compact('completed_contact'));
    }

    public function CancelContact()
    {
        $cancels = Contact::where('status', 2)->latest()->get();
        return view('backend.pages.contact.cancel', compact('cancels'));
    }

    public function TrashContact()
    {
        $trashes = Contact::where('status', 3)->latest()->get();
        return view('backend.pages.contact.trash', compact('trashes'));
    }
}
