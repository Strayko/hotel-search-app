<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('silver.gallery.index', compact('restaurants'));
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

        dd($request->all());

        $file = $request->file('file');
        $user = Auth::user();
//        dd($user['id']);
        if($request->hasFile('file'))
        {
            foreach ($file as $fil) {
                $name = time() . $fil->getClientOriginalName();
                $fil->move('gallery', $name);
                Gallery::create(['photo'=>$name, 'user_id'=>$user['id']]);
            }
        }
        return redirect()->back();
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
        return view('silver.gallery.edit', compact('restaurants'));
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
        $restaurant_id = $restaurant['id'];

        $files = $request->file('file');
        if($request->hasFile('file'))
        {
            foreach ($files as $file) {
                $name = time() . $file->getClientOriginalName();
                $file->move('gallery', $name);
                Gallery::create(['photo'=>$name, 'restaurant_id'=>$restaurant_id]);
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
}
