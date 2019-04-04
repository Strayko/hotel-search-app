<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function search() {

    	$q = Input::get('q');
    	if($q != ' ') {
			$restaurant = Restaurant::where('title', 'LIKE', '%' . $q . '%')
										->orWhere('body', 'LIKE', '%' .$q . '%')
										->get();
			if(count($restaurant) > 0) {
				return view('search')->withDetails($restaurant)->withQuery($q);
			}
	    }
	    return view('search')->withMessage('No restaurants found!');
    }
}
