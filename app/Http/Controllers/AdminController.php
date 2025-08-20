<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allBookings()
    {
        return Booking::with(['user', 'service'])->get();
    }
}
