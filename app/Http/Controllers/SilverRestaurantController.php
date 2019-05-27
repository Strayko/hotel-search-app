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
use App\Social;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SilverRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
        $gold = User::where('package_id', Auth::user()->isGold())->first();
	    $restaurants = Restaurant::where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(5);

        return view('silver.restaurant.index', compact('restaurants', 'platinium', 'gold'));
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
            return view('silver.ajax.restaurants_data', compact('restaurants'))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
	    $gold = User::where('package_id', Auth::user()->isGold())->first();
	    $silver = User::where('package_id', Auth::user()->isSilver())->first();
        $frei = User::where('package_id', Auth::user()->isFrei())->first();

	    $restaurants = Restaurant::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

	    $locations = Location::pluck('name', 'id')->all();
	    $foods = Food::pluck('name', 'id')->all();
	    $distance = Distance::pluck('distance', 'id')->all();


        return view('silver.restaurant.create', compact('restaurants', 'locations', 'foods', 'platinium', 'gold', 'silver', 'distance', 'frei'));
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

        if(!Auth::user()->isFrei()) {
            $social_network = Social::create([
                'facebook'=>$input['facebook'],
                'twitter'=>$input['twitter'],
                'instagram'=>$input['instagram'],
                'google'=>$input['google']
            ]);
            $input['social_network_id'] = $social_network->id;
        }

	    $user = Auth::user();
	    if($file = $request->file('photo_id')) {
		    $name = time() . $file->getClientOriginalName();
		    $file->move('images', $name);
		    $photo = Photo::create(['file'=>$name]);
		    $input['photo_id'] = $photo->id;
	    }

	    if(!Auth::user()->isFrei()) {
            if($file = $request->file('pdf_id')) {
                $name = time() . $file->getClientOriginalName();
                $file->move('documents', $name);
                $document = Pdf::create(['document' => $name]);
                $input['pdf_id'] = $document->id;
            }
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

	    $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
	    $gold = User::where('package_id', Auth::user()->isGold())->first();
	    $silver = User::where('package_id', Auth::user()->isSilver())->first();
        $frei = User::where('package_id', Auth::user()->isFrei())->first();

//	    $silver = DB::table('users')->where('package_id', '=', '3')->value('package_id');
	    return view('silver.restaurant.edit', compact('restaurants', 'platinium', 'silver', 'gold', 'locations', 'foods', 'frei'));
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
	    $restaurant = Restaurant::findOrFail($id);

	    $restaurantImage = public_path($restaurant->photo->file);

        if(File::exists($restaurantImage) && $restaurant->photo_id != 2) {
            unlink($restaurantImage);
        }

        if(!Auth::user()->isFrei()) {
            $social_network = Social::find($restaurant->social->id);
            $social_network['facebook'] = $input['facebook'];
            $social_network['twitter'] = $input['twitter'];
            $social_network['instagram'] = $input['instagram'];
            $social_network['google'] = $input['google'];
            $social_network->save();
        }

	    if($file = $request->file('photo_id')) {
		    $name = time() . $file->getClientOriginalName();
		    $file->move('images', $name);
		    $photo = Photo::find($restaurant->photo->id);
		    $photo->file = $name;
            $photo->save();
            $input['photo_id'] = $photo->id;
	    }

        if(!Auth::user()->isFrei()) {
            if ($file = $request->file('pdf_id')) {
                $name = time() . $file->getClientOriginalName();
                $file->move('documents', $name);
                $document = Pdf::create(['document' => $name]);
                $input['pdf_id'] = $document->id;
            }
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
        $resto = $restaurant->events;
        $gallerys = $restaurant->gallery;


        if(!$restaurant->pdf_id == null) {
            unlink(public_path() . '/documents/' . $restaurant->documents->document);
            DB::delete('delete from pdf_documents where id = ?',[$restaurant->documents->id]);
        }

	    if($restaurant->photo_id == 2) {
            foreach($resto as $rest){
                if($rest['photo_id'] != 3) {
                    unlink(public_path() . $rest->photo->file);
                    DB::delete('delete from photos where id = ?', [$rest['photo_id']]);
                }
            }
            if(count($gallerys) > 0) {
                foreach($gallerys as $gallery) {
                    unlink(public_path() . '/gallery/' . $gallery['photo']);
                    DB::delete('delete from gallery where restaurant_id = ?', [$restaurant->id]);
                }
            }
            DB::delete('delete from social_networks where id = ?', [$restaurant->social_network_id]);
	        DB::delete('delete from events where restaurant_id = ?', [$restaurant->id]);
		    $restaurant->forceDelete();
		    return redirect('/admin/restaurant');
	    } else {
		    unlink(public_path() . $restaurant->photo->file);
            foreach($resto as $rest){
                if($rest['photo_id'] != 3) {
                    unlink(public_path() . $rest->photo->file);
                    DB::delete('delete from photos where id = ?', [$rest['photo_id']]);
                }
            }
            if(count($gallerys) > 0) {
                foreach($gallerys as $gallery) {
                    unlink(public_path() . '/gallery/' . $gallery['photo']);
                    DB::delete('delete from gallery where restaurant_id = ?', [$restaurant->id]);
                }
            }
            DB::delete('delete from social_networks where id = ?', [$restaurant->social_network_id]);
            DB::delete('delete from events where restaurant_id = ?', [$restaurant->id]);
            DB::delete('delete from photos where id = ?',[$restaurant->photo_id]);
		    $restaurant->forceDelete();
		    return redirect('/admin/restaurant');
	    }
    }
}
