<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    /**
     * Show All Contact Messages
     */
    public function index()
    {
        $messages = ContactMessage::latest()->get();

        return view('admin.contact_message.index', compact('messages'));
    }

    /**
     * Delete Contact Message
     */
    public function destroy($id)
    {
        try {

            $message = ContactMessage::findOrFail($id);

            $message->delete();

            return back()->with('success', 'Contact message deleted successfully.');

        } catch (\Exception $e) {

            return back()->with('error', 'Something went wrong while deleting message.');

        }
    }
}