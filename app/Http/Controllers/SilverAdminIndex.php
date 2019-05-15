<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SilverAdminIndex extends Controller
{
    public function index() {

        $gold = User::where('package_id', Auth::user()->isGold())->first();
	    $restaurants = Restaurant::where('user_id', Auth::user()->id)->get();
		$user = User::where('id', Auth::user()->id)->first();

	    return view('silver.index', compact('restaurants', 'user', 'gold'));
    }
}
