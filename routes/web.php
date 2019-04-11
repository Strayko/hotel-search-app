<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Comment;
use App\Food;
use App\Location;
use App\Package;
use App\Restaurant;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Cornford\Googlmapper\Facades\MapperFacade;

/*-------------------------
  ---> HOME PAGE <---
--------------------------*/
Route::get('/', function () {
	$restaurants = Restaurant::orderBy('id', 'desc')->limit(6)->get();
	$locations = Location::pluck('name', 'id')->all();
	$foods = Food::pluck('name', 'id')->all();
    return view('welcome', compact('restaurants', 'locations', 'foods'));
});
Auth::routes();



//Route::get('/register', 'AuthorUsersController@register');
//Route::post('register', 'Auth\RegisterController@register');
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

/*--------------------------
  ---> MIDDLEWARE ADMIN <---
---------------------------*/
Route::group(['middleware'=>'admin'], function() {
	Route::get('/admin2', function() {

		$users = User::all();
		$restaurants = Restaurant::orderBy('id', 'desc')->paginate(7);
		$restaurantsall = Restaurant::all();
		$packages = Package::pluck('name', 'id')->all();
		$package = Package::all();
		$roles = Role::pluck('name', 'id')->all();
		$locations = Location::pluck('name', 'id')->all();
		$foods = Food::pluck('name', 'id')->all();
		return view('admin.index', compact('users', 'roles', 'packages', 'restaurants', 'package', 'locations', 'foods', 'restaurantsall'));
	});
	Route::get('/home', 'HomeController@index')->name('home');


	Route::resource('admin2/users', 'AdminUsersController');
	Route::resource('admin2/restaurants', 'AdminRestaurantsController');
	Route::resource('admin2/packages', 'AdminPackagesController');
	Route::resource('admin2/media', 'AdminMediaController');
	Route::resource('admin2/comments', 'RestaurantCommentController');
	Route::resource('admin2/comment/replies', 'CommentRepliesController');
	Route::resource('admin2/locations', 'AdminLocationsController');
	Route::resource('admin2/foods', 'AdminFoodController');

	Route::delete('admin2/delete/media', 'AdminMediaController@deleteMedia');

});


/*------------------------------
  ---> SINGLE PAGE FRONTEND <---
-------------------------------*/
Route::resource('user/register', 'AuthorUsersController');
Route::get('/restaurant/{id}', ['as'=>'single_restaurant.restaurant', 'uses'=>'AuthorRestaurantController@restaurant']);
Route::get('/plan-and-price', ['as'=>'plan_and_price.planAndPrice', 'uses'=>'SubscriberPlanController@planAndPrice']);
Route::get('/contact', ['as'=>'contact.contact', 'uses'=>'SubscriberPlanController@contact']);
Route::get('/show-all', ['as'=>'show_all.showAll', 'uses'=>'SubscriberPlanController@showAll']);
Route::get('/locations', ['as'=>'locations.locations', 'uses'=>'SubscriberPlanController@locations']);
Route::get('/location/{id}', ['as'=>'single_location.locationCategory', 'uses'=>'SubscriberPlanController@locationCategory']);



/*------------------------------------------
  ---> SINGLE PAGE FRONTEND SEARCH ONLY <---
-------------------------------------------*/
Route::post('/search', function() {
	$name = Input::get('name');
	$bodyMap = [
		'zoom' => 14,
		'draggable' => true,
		'marker' => false,
		'eventAfterLoad' =>
			'circleListener(maps[0].shapes[0].circle_0);'
	];

	switch($name) {
		case '2':
			Mapper::location('Fürth')->map($bodyMap);
		break;
		case '3':
			Mapper::location('München')->map($bodyMap);
		break;
		case '4':
			Mapper::location('Würzburg')->map($bodyMap);
		break;
		case '5':
			Mapper::location('Aschaffenburg')->map($bodyMap);
		break;
		case '6':
			Mapper::location('Nüremberg')->map($bodyMap);
		break;
		case '7':
			Mapper::location('Ingolstadt')->map($bodyMap);
		break;
		case '8':
			Mapper::location('Passau')->map($bodyMap);
		break;
		case '9':
			Mapper::location('Augsburg')->map($bodyMap);
		break;
		case '10':
			Mapper::location('Bayreuth')->map($bodyMap);
		break;
		case '13':
			Mapper::location('Kempten')->map($bodyMap);
		break;
		case '14':
			Mapper::location('Rosenheim')->map($bodyMap);
		break;
		case '18':
			Mapper::location('Rogensburg')->map($bodyMap);
		break;
		default:
			Mapper::location('Schweiz')->map(
				[
					'zoom' => 8,
					'draggable' => true,
					'marker' => false,
					'eventAfterLoad' =>
						'circleListener(maps[0].shapes[0].circle_0);'
				]
			);
	}

	$q = Input::get('q');
	$food = Input::get('food');

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

});





/*---------------------------
  ---> MIDDLEWARE AUTHOR <---
----------------------------*/
Route::group(['middleware'=>'author'], function() {

	Route::get('/admin', ['as'=>'silver.index.locations', 'uses'=>'SilverAdminIndex@index']);

	Route::resource('admin/user', 'SilverUserController');
	Route::resource('admin/restaurant', 'SilverRestaurantController');
});



/*-------------------------
  ---> MIDDLEWARE AUTH <---
--------------------------*/
Route::group(['middleware'=>'auth'], function() {
	Route::post('comment/reply', 'CommentRepliesController@createReply');
	Route::post('comment', 'RestaurantCommentController@store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
