<?php

namespace App\Http\Controllers;

use App\Location;
use App\Restaurant;
use Illuminate\Http\Request;

class SubscriberPlanController extends Controller
{
    public function planAndPrice() {

    	return view('plan_and_price');
    }

    public function contact() {
    	return view('contact');
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
