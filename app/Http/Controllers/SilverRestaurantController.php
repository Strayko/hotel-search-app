<?php

namespace App\Http\Controllers;

use App\Package;
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
	    $bronze = User::where('package_id', Auth::user()->isBronze())->first();
	    $gold = User::where('package_id', Auth::user()->isGold())->first();
	    $silver = User::where('package_id', Auth::user()->isSilver())->first();

	    $restaurants = Restaurant::where('user_id', Auth::user()->id)->get();
	    $packages = Package::pluck('name', 'id')->all();

        return view('silver.restaurant.index', compact('restaurants', 'packages', 'bronze', 'gold', 'silver'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $input = $request->all();
	    $user = Auth::user();
	    if($file = $request->file('photo_id')) {
		    $name = time() . $file->getClientOriginalName();
		    $file->move('images', $name);
		    $photo = Photo::create(['file'=>$name]);
		    $input['photo_id'] = $photo->id;
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
	    $packages = Package::pluck('name', 'id')->all();

	    $bronze = User::where('package_id', Auth::user()->isBronze())->first();
	    $gold = User::where('package_id', Auth::user()->isGold())->first();
	    $silver = User::where('package_id', Auth::user()->isSilver())->first();

//	    $silver = DB::table('users')->where('package_id', '=', '3')->value('package_id');
	    return view('silver.restaurant.edit', compact('restaurants', 'packages', 'silver', 'bronze', 'gold'));
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
	    unlink(public_path() . $restaurant->photo->file);
	    $restaurant->delete();
	    return redirect('/admin/restaurant');
    }
}