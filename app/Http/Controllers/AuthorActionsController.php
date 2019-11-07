<?php

namespace App\Http\Controllers;

use App\Actions;
use App\Booking;
use App\Http\Requests\UserAuctionsRequest;
use App\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorActionsController extends Controller
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

        $user = Auth::user();
        $notifications = Booking::where('user_id', $user->id)
            ->where('is_read', 1)
            ->get();
        $actions = Actions::where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(5);
        return view('silver.actions.index', compact('notifications', 'actions', 'parametarExport'));
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
            $actions = Actions::where('id', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('title', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('body', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('benefits', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orderBy($sort_by, $sort_type)->where('user_id', \Auth::user()->id)
                ->paginate(5);
            return view('silver.ajax.actions_data', compact('actions'))->render();
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
        $parametarExport = substr($parametar, 1,2);

        $user = Auth::user();
        $notifications = Booking::where('user_id', $user->id)
            ->where('is_read', 1)
            ->get();
        $user_id = Auth::user()->id;
        $restaurants = Restaurant::where('user_id', $user_id)->pluck('title', 'id')->all();
        return view('silver.actions.create', compact('notifications', 'restaurants', 'parametarExport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAuctionsRequest $request)
    {
        $input = $request->all();
        $user = Auth::user();
        $user->actions()->create($input);
        return redirect('/admin/actions');
    }

    public function updateActions(Request $request, $locale, $id) {

        Actions::findOrFail($id)->update($request->all());
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
    public function edit(Request $request, $locale, $id)
    {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar,1,2);

        $user = Auth::user();
        $notifications = Booking::where('user_id', $user->id)
            ->where('is_read', 1)
            ->get();

        $user_id = Auth::user()->id;
        $actions = Actions::findOrFail($id);
        $restaurants = Restaurant::where('user_id', $user_id)->pluck('title', 'id')->all();

        return view('silver.actions.edit', compact('notifications', 'actions', 'restaurants', 'parametarExport'));
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
        $user = Auth::user();
        $user->actions()->whereId($id)->first()->update($input);
        return redirect('/admin/actions');
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
        $parametarExport = substr($parametar, 1,2);
        $actions = Actions::findOrFail($id);
        $actions->delete();
        return redirect('/'.$parametarExport.'/admin/actions');
    }
}
