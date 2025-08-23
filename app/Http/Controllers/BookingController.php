<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        return $request->user()->bookings()->with('service')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'service_id' => 'required|exists:services,id',
            'booking_date' => 'required|date|after_or_equal:today'
        ]);
        return Booking::create([
            'user_id' => $request->user()->id,
            'service_id' => $data['service_id'],
            'booking_date' => $data['booking_date'],
            'status' => 'pending'
        ]);
    }
}
