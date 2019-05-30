<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlineBookingController extends Controller
{
    public function index() {

        $user = Auth::user();
        $booking = Booking::where('user_id', $user->id)->get();


        return view('silver.booking.index', compact('booking'));
    }
}
