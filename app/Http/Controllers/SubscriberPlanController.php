<?php

namespace App\Http\Controllers;

use App\Location;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SubscriberPlanController extends Controller
{
    public function planAndPrice() {

    	return view('plan_and_price');
    }

    public function contact() {
    	return view('contact');
    }

    public function contactSend(Request $request) {
	    $data = $request->all();

	    Mail::send('email', $data, function($message) use ($data) {
		    $message->to($data['email'], $data['author'])->subject($data['subject']);
	    });

	    Session::flash('form_submitted', 'Form is sent!');
	    return redirect()->back();
    }

	public function showAll() {
		$restaurants = Restaurant::orderBy('id', 'desc')->paginate(9);
    	return view('show_all', compact('restaurants'));
	}

	public function locations() {

    	$locations = Location::all();
    	return view('locations', compact('locations'));
	}

	public function locationCategory($id) {

    	$location = Location::findOrFail($id);
    	$restaurantLocation = $location->restaurant;
    	return view('single_location', compact('location', 'restaurantLocation'));
	}





}
