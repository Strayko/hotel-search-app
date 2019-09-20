<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$packages = Package::orderBy('id', 'asc')->paginate(5);

        return view('admin.package.index', compact('packages'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $packages = Package::where('id', 'like', '%'.$query.'%')
                ->orWhere('name', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);
            return view('admin.ajax.packages_data', compact('packages'))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Package::create($request->all());
        return redirect('/admin2/packages');
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
        $package = Package::findOrFail($id);
        return view('admin.package.edit', compact('package'));
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
        $package = Package::findOrFail($id);
        $package->update($request->all());
        return redirect('/admin2/packages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();
        Session::flash('deleted_package', 'The Package has ben deleted');
        return redirect('/admin2/packages');
    }
}
