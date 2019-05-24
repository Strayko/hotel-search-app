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
use App\Distance;
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
    $locationss = Location::limit(8)->get();
    $foods = Food::pluck('name', 'id')->all();
    $distance = Distance::pluck('id', 'distance')->all();
    return view('welcome', compact('restaurants', 'locations', 'foods', 'locationss', 'distance'));
});
Auth::routes();




/*---------------------------------------------
  ---> AJAX FETCHING DATA MAIN ADMIN PANEL <---
---------------------------------------------*/
Route::get('/admin2/users/Cd3XZEkaB3dFS2jc', 'AdminUsersController@fetch_data');
Route::get('/admin2/restaurants/Nh7vbS3VDh6S5fQh', 'AdminRestaurantsController@fetch_data');
Route::get('/admin2/packages/46x2bvCw8JfSHT24', 'AdminPackagesController@fetch_data');
Route::get('/admin2/media/APm573uRgxAnSFHE', 'AdminMediaController@fetch_data');
Route::get('/admin2/comments/BCNZj3nE2fsD6SaN', 'RestaurantCommentController@fetch_data');
Route::get('/admin2/locations/mz8y9arxaj6qPBMP', 'AdminLocationsController@fetch_data');
Route::get('/admin2/foods/cSgG2EREmKrVtvqn', 'AdminFoodController@fetch_data');
Route::get('/admin2/distance/6bHgNQGUJvBTRz47', 'AdminRadiusController@fetch_data');
Route::get('/admin2/blog/v88D4TpNWbL3yGQf', 'AdminBlogController@fetch_data');




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
    Route::resource('admin2/distance', 'AdminRadiusController');
    Route::resource('admin2/blog', 'AdminBlogController');

    Route::delete('admin2/delete/media', 'AdminMediaController@deleteMedia');

});



/*------------------------------
  ---> INDELIBLE <---
-------------------------------*/
Route::group(['middleware'=>'protected'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});



/*------------------------------
  ---> SINGLE PAGE FRONTEND <---
-------------------------------*/
Route::resource('user/register', 'AuthorUsersController');
Route::get('/restaurant/{id}', ['as'=>'single_restaurant.restaurant', 'uses'=>'AuthorRestaurantController@restaurant']);
Route::get('/plan-and-price', ['as'=>'plan_and_price.planAndPrice', 'uses'=>'SubscriberPlanController@planAndPrice']);
Route::get('/contact', ['as'=>'contact.contact', 'uses'=>'SubscriberPlanController@contact']);
Route::post('/contact', ['as'=>'contact.contact', 'uses'=>'SubscriberPlanController@contactSend']);
Route::get('/show-all', ['as'=>'show_all.showAll', 'uses'=>'SubscriberPlanController@showAll']);
Route::get('/locations', ['as'=>'locations.locations', 'uses'=>'SubscriberPlanController@locations']);
Route::get('/location/{id}', ['as'=>'single_location.locationCategory', 'uses'=>'SubscriberPlanController@locationCategory']);


Route::post('/renew-account', ['as' => 'renew_account.renewAccount', 'uses' => 'RenewAccountController@store']);
Route::get('/renew-account', ['as' => 'renew_account.renewAccount', 'uses' => 'RenewAccountController@renewAccount']);


/*------------------------------------------
  ---> SINGLE PAGE FRONTEND SEARCH ONLY <---
-------------------------------------------*/
Route::post('/search', function() {
    $name = Input::get('name');
    $food = Input::get('food');
    $distance = Input::get('distance');
    $bodyMap = [
        'zoom' => 14,
        'center' => true,
        'marker' => false,
        'eventAfterLoad' => 'onMapLoad(maps[0].map);'
    ];



    $name = Input::get('name');
    $food = Input::get('food');
    $distance = Input::get('distance');
    $restos = Restaurant::where('location_id', 'LIKE', '%' . $name . '%')
        ->where('food_id', 'LIKE', '%' . $food . '%')
        ->get();


    $lnglat = null;
    foreach($restos as $resto){
        $lng = $resto['lng'];
        $lat = $resto['lat'];
        $lnglat[] = array('lng'=>$lng, 'lat'=>$lat);
    }
    $json = json_encode($lnglat);




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
//			->polyline([['latitude' => 48.5667364, 'longitude' => 13.431946599999947], ['latitude' => 48.5707981, 'longitude' => 13.431985299999951]]);
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
        case '19':
            Mapper::location('Zavidovići')->map($bodyMap);
            break;
        case '20':
            Mapper::location('Sarajevo')->map($bodyMap);
            break;
        default:
            Mapper::location('Schweiz')->map(
                [
                    'zoom' => 8,
                    'draggable' => false,
                    'marker' => false,
                    'eventAfterLoad' =>
                        'circleListener(maps[0].shapes[0].circle_0);'
                ]
            );
    }

    $q = Input::get('q');


    if($q != ' ') {
        $restaurant = Restaurant::where('location_id', 'LIKE', '%' . $name . '%')
            ->where('title', 'LIKE', '%' .$q . '%')
            ->where('food_id', 'LIKE', '%' . $food . '%')
            ->get();
        if(count($restaurant) > 0) {
            return view('search', compact('distance', 'json'))->withDetails($restaurant)->withQuery($q);
        }
    }
    return view('search', compact('distance', 'json'))->withMessage('No restaurant could not be found!');

});



/*---------------------------------------------
  ---> AJAX FETCHING DATA USER ADMIN PANEL <---
---------------------------------------------*/
Route::get('/admin/restaurant/DSLvuwum9LmE2hPg', 'SilverRestaurantController@fetch_data');
Route::get('/admin/event/tvy5kTYJeWYBY4CX', 'AuthorEventController@fetch_data');
Route::get('/admin/gallery/jLYZFd64ggZe3s8f', 'AuthorGalleryController@fetch_data');
Route::get('/admin/gallery/{id}/cKS3dpqP6xF6qZEf', 'AuthorGalleryController@fetch_data2');


/*---------------------------
  ---> MIDDLEWARE AUTHOR <---
----------------------------*/
Route::group(['middleware'=>'author'], function() {

    Route::get('/admin', ['as'=>'silver.index.locations', 'uses'=>'SilverAdminIndex@index']);

    Route::resource('admin/user', 'SilverUserController');
    Route::resource('admin/restaurant', 'SilverRestaurantController');
});


/*---------------------------
  ---> MIDDLEWARE PREMIUM PACKAGE <---
----------------------------*/
Route::group(['middleware'=>'platinium'], function() {
    Route::resource('admin/event', 'AuthorEventController');
    Route::patch('admin/event/{id}', 'AuthorEventController@updateEvent');
    Route::resource('admin/gallery', 'AuthorGalleryController');
    Route::delete('admin/gallery/{id}/delete/gallery', 'AuthorGalleryController@deleteGallery');
});



/*-------------------------
  ---> MIDDLEWARE AUTH <---
--------------------------*/
Route::group(['middleware'=>'auth'], function() {
    Route::post('comment/reply', 'CommentRepliesController@createReply');
    Route::post('comment', 'RestaurantCommentController@store');
});
