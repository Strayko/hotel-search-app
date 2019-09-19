<?php

namespace App\Http\Controllers;

use App\Distance;
use App\Food;
use App\Http\Requests\RestaurantCreateRequest;
use App\Location;
use App\Package;
use App\Pdf;
use App\Photo;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminRestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$restaurants = Restaurant::orderBy('id', 'asc')->paginate(5);
	    $locations = Location::pluck('name', 'id')->all();
	    $foods = Food::pluck('name', 'id')->all();

        return view('admin.restaurants.index', compact('restaurants', 'locations', 'foods'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $restaurants = Restaurant::where('id', 'like', '%'.$query.'%')
                ->orWhere('title', 'like', '%'.$query.'%')
                ->orWhere('body', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);
            return view('admin.ajax.restaurants_data', compact('restaurants'))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

	    $locations = Location::pluck('name', 'id')->all();
	    $foods = Food::pluck('name', 'id')->all();
	    $distance = Distance::pluck('distance', 'id')->all();

        return view('admin.restaurants.create', compact('locations', 'foods', 'distance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantCreateRequest $request)
    {
	    $input = $request->all();
	    $user = Auth::user();
	    if($file = $request->file('photo_id')) {
		    $name = time() . $file->getClientOriginalName();
		    $file->move('images', $name);
		    $photo = Photo::create(['file'=>$name]);
		    $input['photo_id'] = $photo->id;
	    }

	    if($file = $request->file('pdf_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('documents', $name);
            $document = Pdf::create(['document'=>$name]);
            $input['pdf_id'] = $document->id;
        }

	    $user->restaurants()->create($input);
	    return redirect('/admin2/restaurants');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	    $restaurants = Restaurant::findOrFail($id);
		$locations = Location::pluck('name', 'id')->all();
	    $foods = Food::pluck('name', 'id')->all();
        return view('admin.restaurants.edit', compact('restaurants', 'locations', 'foods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$restaurant = Restaurant::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('photo_id')) {
			$name = time() . $file->getClientOriginalName();
			$file->move('images', $name);
			$photo = Photo::create(['file'=>$name]);
			$input['photo_id'] = $photo->id;
        }

        if($file = $request->file('pdf_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('documents', $name);
            $document = Pdf::create(['document'=>$name]);
            $input['pdf_id'] = $document->id;
        }

        $restaurant->whereId($id)->first()->update($input);
        return redirect('/admin2/restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $restaurant = Restaurant::findOrFail($id);
	    if(!$restaurant->pdf_id == null) {
            unlink(public_path() . '/documents/' . $restaurant->documents->document);
            DB::delete('delete from pdf_documents where id = ?',[$restaurant->documents->id]);
        }

	    if($restaurant->photo_id == 2) {
		    $restaurant->delete();
		    Session::flash('deleted_restaurant', 'The Restaurant has been deleted');
		    return redirect('/admin2/restaurants');
	    } else {
		    unlink(public_path() . $restaurant->photo->file);
            DB::delete('delete from photos where id = ?',[$restaurant->documents->id]);
		    $restaurant->delete();
		    Session::flash('deleted_restaurant', 'The Restaurant has been deleted');
		    return redirect('/admin2/restaurants');
	    }
    }

}
