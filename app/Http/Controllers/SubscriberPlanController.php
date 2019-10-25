<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactForm;
use App\Location;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SubscriberPlanController extends Controller
{
    public function planAndPrice(Request $request) {
        $parametar = $request->getRequestUri();
        dd($parametar);
        $parametarExport = substr($parametar, 1, 2);
        dd($parametarExport);
    	return view('plan_and_price', compact('parametarExport'));
    }

    public function contact() {
    	return view('contact');
    }

    public function contactSend(SendContactForm $request) {
	    $data = $request->all();

	    Mail::send('email', $data, function($message) use ($data) {
		    $message->to($data['email'], $data['author'])->subject($data['firma']);
	    });

	    Session::flash('form_submitted', 'Form is sent!');
	    return redirect()->back();
    }

	public function showAll() {
		$restaurants = Restaurant::orderBy('id', 'desc')->paginate(3);
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
