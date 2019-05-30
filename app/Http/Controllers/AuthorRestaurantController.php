<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Comment;
use App\Event;
use App\Food;
use App\Location;
use App\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorRestaurantController extends Controller
{
    public function restaurant($slug) {

    	$restaurant = Restaurant::findBySlugOrFail($slug);
    	$restaurant_id = $restaurant['id'];

    	$times = Carbon::now();
    	$time = $times->toTimeString();

    	$gallerys = $restaurant->gallery()->where('restaurant_id', $restaurant_id)->get();
        $event = $restaurant->events()->orderBy('id', 'desc')->whereIsActive(1)->first();
    	$comments = $restaurant->comments()->whereIsActive(1)->paginate(5);
    	$commentss = $restaurant->comments()->whereIsActive(1)->get();
    	$relateds = Restaurant::orderBy(DB::raw('RAND()'))->limit(2)->get();
    	$locations = Location::all();
    	$foods = Food::all();
	    $restaurantRecents = Restaurant::orderBy('id', 'desc')->limit(3)->get();

    	return view('single_restaurant', compact('restaurant', 'comments', 'relateds', 'commentss', 'locations', 'foods', 'restaurantRecents', 'event', 'gallerys', 'time'));
    }

    public function store(Request $request) {

        $data = $request->all();
        Booking::create($data);
        $request->session()->flash('online_booking', 'Your request for reservation is sent and we will contact you');
        return redirect()->back();
    }

}
