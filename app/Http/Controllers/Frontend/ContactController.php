<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function __construct()
    {
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:10',
                'message' => 'required|string|max:255',
            ],
            [
                'name.required' => 'The name field is required.',
                'email.required' => 'The email field is required.',
                'phone.required' => 'The phone field is required.',
                'message.required' => 'The message field cannot be empty.',
                'phone.max' => 'The phone number cannot exceed 10 digits.',
            ]
        );

        Contact::create($validated);

        return back()->with('success', 'Message sent successfully!');
    }
}
