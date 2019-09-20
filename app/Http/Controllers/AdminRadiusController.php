<?php

namespace App\Http\Controllers;

use App\Distance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminRadiusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$distances = Distance::orderBy('id', 'asc')->paginate(5);
    	return view('admin.distance.index', compact('distances'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $distances = Distance::where('id', 'like', '%'.$query.'%')
                ->orWhere('distance', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);
            return view('admin.ajax.distances_data', compact('distances'))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.distance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Distance::create($request->all());
        return redirect('/admin2/distance');
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
        $distance = Distance::findOrFail($id);
        return view('admin.distance.edit', compact('distance'));
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
        $distance = Distance::findOrFail($id);
        $distance->update($request->all());
        return redirect('/admin2/distance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distance = Distance::findOrFail($id);
        $distance->delete();
        Session::flash('deleted_distance', 'The Distance has ben deleted');
        return redirect('/admin2/distance');
    }
}
