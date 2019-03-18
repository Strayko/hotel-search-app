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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'], function() {
	Route::get('/admin', function() {

		$users = User::all();
		$restaurants = Restaurant::all();
		$packages = Package::pluck('name', 'id')->all();
		$package = Package::all();
		$roles = Role::pluck('name', 'id')->all();
		return view('admin.index', compact('users', 'roles', 'packages', 'restaurants', 'package'));
	});

	Route::resource('admin/users', 'AdminUsersController');
	Route::resource('admin/restaurants', 'AdminRestaurantsController');
	Route::resource('admin/packages', 'AdminPackagesController');
});