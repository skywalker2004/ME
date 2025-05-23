<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($request->all());

        Mail::to('kelvinkiprono659@gmail.com')->send(new \App\Mail\ContactForm($contact));

        return redirect()->route('home')->with('success', 'Message sent successfully!');
    }
}
