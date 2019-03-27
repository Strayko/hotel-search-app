<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Restaurant;
use Illuminate\Http\Request;

class AuthorRestaurantController extends Controller
{
    public function restaurant($slug) {

    	$restaurant = Restaurant::findBySlugOrFail($slug);
    	$comments = $restaurant->comments()->whereIsActive(1)->get();

    	return view('single_restaurant', compact('restaurant', 'comments'));
    }
}
