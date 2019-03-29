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
    	$relateds = Restaurant::all()->random(2);

    	return view('single_restaurant', compact('restaurant', 'comments', 'relateds'));
    }

}
