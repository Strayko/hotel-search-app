<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Food;
use App\Location;
use App\Restaurant;
use Illuminate\Http\Request;

class AuthorRestaurantController extends Controller
{
    public function restaurant($slug) {

    	$restaurant = Restaurant::findBySlugOrFail($slug);
    	$comments = $restaurant->comments()->whereIsActive(1)->paginate(5);
    	$commentss = $restaurant->comments()->whereIsActive(1)->get();
    	$relateds = Restaurant::all()->random(2);
    	$locations = Location::all();
    	$foods = Food::all();
	    $restaurantRecents = Restaurant::orderBy('id', 'desc')->limit(3)->get();

    	return view('single_restaurant', compact('restaurant', 'comments', 'relateds', 'commentss', 'locations', 'foods', 'restaurantRecents'));
    }

}
