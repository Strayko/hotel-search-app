<?php

namespace App\Http\Controllers;

use App\Location;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;

class SearchController extends Controller
{
    public function search() {

	    Mapper::map(
		    53.381128999999990000,
		    -1.470085000000040000,
		    [
			    'zoom' => 16,
			    'draggable' => true,
			    'marker' => false,
			    'eventAfterLoad' =>
				    'circleListener(maps[0].shapes[0].circle_0);'
		    ]
	    );


    	$q = Input::get('q');
    	$name = Input::get('name');
    	$food = Input::get('food');

//    	$location = Restaurant::where('location_id', 'LIKE', '%' . $name . '%');

    	if($q != ' ') {
			$restaurant = Restaurant::where('location_id', 'LIKE', '%' . $name . '%')
										->where('title', 'LIKE', '%' .$q . '%')
										->where('food_id', 'LIKE', '%' . $food . '%')
										->get();


			if(count($restaurant) > 0) {
				return view('search')->withDetails($restaurant)->withQuery($q);
			}
	    }
	    return view('search')->withMessage('No restaurants found!');
    }
}
