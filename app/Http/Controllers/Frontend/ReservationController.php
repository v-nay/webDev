<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function __construct()
    {
    }

    public function store(Request $request)
    {
        
        
        $validated = $request->validate(
            [
                'date' => 'required|date',
                'time' => 'required|string',
                'guest' => 'required|integer|max:10',
                'name' => 'required|string|max:255',
                'phone' => 'required',
            ],
            [
                'date.required' => 'The date field is required.',
                'time.required' => 'The time field is required.',
                'name.required' => 'The name field is required.',
                'guest.required' => 'The guest number  field is required.',
                'phone.required' => 'The phone number  field is required.',
                // 'phone.max' => 'The phone number cannot exceed 10 digits.',
            ]
        );
        
        Reservation::create($validated);

        return back()->with('success', 'Reservation Booked successfully!');
    }
}
