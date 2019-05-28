<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthorGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $restaurants = Restaurant::where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(5);
        return view('silver.gallery.index', compact('restaurants'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $restaurants = Restaurant::where('id', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('title', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('body', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orderBy($sort_by, $sort_type)->where('user_id', \Auth::user()->id)
                ->paginate(5);
            return view('silver.ajax.restaurants_choose_data', compact('restaurants'))->render();
        }
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
        $restaurant_id = $restaurants['id'];
        $gallerys = $restaurants->gallery()->where('restaurant_id', $restaurant_id)->orderBy('id', 'asc')->paginate(5);
        return view('silver.gallery.edit', compact('restaurants', 'gallerys'));
    }

    function fetch_data2(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $gallerys = Gallery::where('id', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('photo', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orderBy($sort_by, $sort_type)->where('user_id', \Auth::user()->id)
                ->paginate(5);
            return view('silver.ajax.gallerys_data', compact('gallerys'))->render();
        }
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
        $user = Auth::user();
        $restaurant = Restaurant::findOrFail($id);
        $restaurant_id = $restaurant['id'];

        $files = $request->file('file');
        if($request->hasFile('file'))
        {
            foreach ($files as $file) {
                $name = time() . $file->getClientOriginalName();
                $file->move('gallery', $name);
                Gallery::create([
                    'photo'=>$name,
                    'restaurant_id'=>$restaurant_id,
                    'user_id'=>$user->id
                ]);
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteGallery(Request $request) {


        if(isset($request->delete_all) && !empty($request->checkBoxArray)) {
            $photos = Gallery::findOrFail($request->checkBoxArray);
            //dd($photos[0]['id']);
            foreach($photos as $photo) {
                unlink(public_path() . '/gallery/' . $photo['photo']);
                $photo->delete();
            }
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
