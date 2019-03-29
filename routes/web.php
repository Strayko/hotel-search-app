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

use App\Package;
use App\Restaurant;
use App\Role;
use App\User;

/*-------------------------
  ---> HOME PAGE <---
--------------------------*/
Route::get('/', function () {
	$restaurants = Restaurant::orderBy('id', 'desc')->get();
    return view('welcome', compact('restaurants'));
});
Auth::routes();



//Route::get('/register', 'AuthorUsersController@register');
//Route::post('register', 'Auth\RegisterController@register');
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

/*-------------------------
  ---> MIDDLEWARE ADMIN <---
--------------------------*/
Route::group(['middleware'=>'admin'], function() {
	Route::get('/admin2', function() {

		$users = User::all();
		$restaurants = Restaurant::all();
		$packages = Package::pluck('name', 'id')->all();
		$package = Package::all();
		$roles = Role::pluck('name', 'id')->all();
		return view('admin.index', compact('users', 'roles', 'packages', 'restaurants', 'package'));
	});
	Route::get('/home', 'HomeController@index')->name('home');


	Route::resource('admin2/users', 'AdminUsersController');
	Route::resource('admin2/restaurants', 'AdminRestaurantsController');
	Route::resource('admin2/packages', 'AdminPackagesController');
	Route::resource('admin2/media', 'AdminMediaController');
	Route::resource('admin2/comments', 'RestaurantCommentController');
	Route::resource('admin2/comment/replies', 'CommentRepliesController');

	Route::delete('admin2/delete/media', 'AdminMediaController@deleteMedia');

});


Route::resource('user/register', 'AuthorUsersController');
Route::get('/restaurant/{id}', ['as'=>'single_restaurant.restaurant', 'uses'=>'AuthorRestaurantController@restaurant']);
Route::get('/plan-and-price', ['as'=>'plan_and_price.planAndPrice', 'uses'=>'SubscriberPlanController@planAndPrice']);


/*-------------------------
  ---> MIDDLEWARE AUTHOR <---
--------------------------*/
Route::group(['middleware'=>'author'], function() {

	Route::get('/admin', function() {
//		$restaurants = Restaurant::all();
		return view('silver.index');
	});


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
