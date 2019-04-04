<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search() {

    	$restaurants = Restaurant::all();
    	return view('search', compact('restaurants'));
    }
}
