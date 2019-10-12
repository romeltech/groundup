<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Send an Email
        Mail::to('tet@test.com')->send(new ContactFormMail($data));

        return redirect('contact');
    }
}
