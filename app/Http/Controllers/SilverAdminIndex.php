<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SilverAdminIndex extends Controller
{
    public function index() {

	    $restaurants = Restaurant::where('user_id', Auth::user()->id)->get();


	    return view('silver.index', compact('restaurants'));
    }
}
