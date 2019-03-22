<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class AuthorRestaurantController extends Controller
{
    public function restaurant($id) {

    	$restaurant = Restaurant::findOrFail($id);

    	return view('single_restaurant', compact('restaurant'));
    }
}
