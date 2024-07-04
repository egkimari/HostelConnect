<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     *
     * @return \Illuminate\View\View
     */
    public function showContactForm()
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        // Logic to handle form submission, e.g., sending email
        // Mail::to(config('mail.from.address'))->send(new ContactMail($request->all()));

        return redirect()->route('contact')->with('status', 'Your message has been sent!');
    }
}
