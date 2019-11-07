<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminPackageRequest;
use App\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar,1,2);
    	$packages = Package::orderBy('id', 'asc')->paginate(5);
        return view('admin.package.index', compact('packages', 'parametarExport'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $referer = $_SERVER['HTTP_REFERER'];
            if(strpos($referer, 'en')) {
                $referer = 'en';
            } else {
                $referer = 'de';
            }
            $setCarbon = Carbon::setLocale($referer);

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
    public function create(Request $request)
    {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar,1,2);
        return view('admin.package.create', compact('parametarExport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPackageRequest $request)
    {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar,1,2);
        Package::create($request->all());
        return redirect(''.$parametarExport.'/admin2/packages');
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
    public function edit(Request $request, $locale, $id)
    {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar, 1,2);
        $package = Package::findOrFail($id);
        return view('admin.package.edit', compact('package', 'parametarExport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPackageRequest $request, $locale, $id)
    {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar,1,2);
        $package = Package::findOrFail($id);
        $package->update($request->all());
        return redirect('/'.$parametarExport.'/admin2/packages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $locale, $id)
    {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar,1,2);
        $package = Package::findOrFail($id);
        $package->delete();
        Session::flash('deleted_package', 'The Package has ben deleted');
        return redirect('/'.$parametarExport.'/admin2/packages');
    }
}
