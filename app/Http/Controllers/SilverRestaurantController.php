<?php

namespace App\Http\Controllers;

use App\Distance;
use App\Food;
use App\Http\Requests\SilverRequest;
use App\Location;
use App\Package;
use App\Pdf;
use App\Photo;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SilverRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

	    $restaurants = Restaurant::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('silver.restaurant.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    $bronze = User::where('package_id', Auth::user()->isBronze())->first();
	    $gold = User::where('package_id', Auth::user()->isGold())->first();
	    $silver = User::where('package_id', Auth::user()->isSilver())->first();

	    $restaurants = Restaurant::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

	    $locations = Location::pluck('name', 'id')->all();
	    $foods = Food::pluck('name', 'id')->all();
	    $distance = Distance::pluck('distance', 'id')->all();


        return view('silver.restaurant.create', compact('restaurants', 'locations', 'foods', 'bronze', 'gold', 'silver', 'distance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SilverRequest $request)
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
            $document = Pdf::create(['document' => $name]);
            $input['pdf_id'] = $document->id;
        }

	    $user->restaurants()->create($input);
	    return redirect('/admin/restaurant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
	    $foods = Food::pluck('name', 'id')->all();
	    $locations = Location::pluck('name', 'id')->all();

	    $bronze = User::where('package_id', Auth::user()->isBronze())->first();
	    $gold = User::where('package_id', Auth::user()->isGold())->first();
	    $silver = User::where('package_id', Auth::user()->isSilver())->first();

//	    $silver = DB::table('users')->where('package_id', '=', '3')->value('package_id');
	    return view('silver.restaurant.edit', compact('restaurants', 'silver', 'bronze', 'gold', 'locations', 'foods'));
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
            $document = Pdf::create(['document' => $name]);
            $input['pdf_id'] = $document->id;
        }

	    Auth::user()->restaurants()->whereId($id)->first()->update($input);
	    return redirect('/admin/restaurant');
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
		    $restaurant->forceDelete();
		    return redirect('/admin/restaurant');
	    } else {
		    unlink(public_path() . $restaurant->photo->file);
            DB::delete('delete from photos where id = ?',[$restaurant->documents->id]);
		    $restaurant->forceDelete();
		    return redirect('/admin/restaurant');
	    }
    }
}
