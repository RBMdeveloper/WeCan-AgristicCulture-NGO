<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    /**
     * Store Contact Message
     */
    public function store(Request $request)
    {
        $request->validate([
            'form_name'    => 'required|string|max:255',
            'form_email'   => 'required|email|max:255',
            'form_subject' => 'required|string|max:255',
            'form_phone'   => 'nullable|string|max:20',
            'form_message' => 'required|string',
        ]);

        try {

            ContactMessage::create([

                'name'    => $request->form_name,

                'email'   => $request->form_email,

                'subject' => $request->form_subject,

                'phone'   => $request->form_phone,

                'message' => $request->form_message,

            ]);

            return back()->with('success', 'Your message has been sent successfully.');

        } catch (\Exception $e) {

            return back()->with('error', 'Something went wrong. Please try again.');

        }
    }
}