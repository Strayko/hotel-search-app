<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Event;
use App\Http\Requests\UserEventRequest;
use App\Photo;
use App\Restaurant;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthorEventController extends Controller
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

        $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
        $gold = User::where('package_id', Auth::user()->isGold())->first();
        $events = Event::where('user_id', Auth::user()->id)->orderBy('id', 'asc')->paginate(5);
        return view('silver.event.index', compact('events', 'gold', 'notifications', 'platinium', 'parametarExport'));
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
            $events = Event::where('id', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('title', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('body', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orderBy($sort_by, $sort_type)->where('user_id', \Auth::user()->id)
                ->paginate(5);
            return view('silver.ajax.events_data', compact('events'))->render();
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

        $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
        $user_id = Auth::user()->id;
        $restaurants = Restaurant::where('user_id', $user_id)->pluck('title', 'id')->all();
        return view('silver.event.create', compact('restaurants', 'notifications', 'platinium', 'parametarExport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(UserEventRequest $request)
    {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar,1,2);

        $input = $request->all();
        $user = Auth::user();
        if($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }


        $user->events()->create($input);
        return redirect(''.$parametarExport.'/admin/event');
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


    public function updateEvent(Request $request, $locale, $id) {

        Event::findOrFail($id)->update($request->all());
        return redirect()->back();
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

        $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
        $user_id = Auth::user()->id;
        $events = Event::findOrFail($id);
        $restaurants = Restaurant::where('user_id', $user_id)->pluck('title', 'id')->all();
        return view('silver.event.edit', compact('events', 'restaurants', 'notifications', 'platinium', 'parametarExport'));
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
        if($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }


        $user->events()->whereId($id)->first()->update($input);
        return redirect('/admin/event');
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

        $events = Event::findOrFail($id);
        if($events->photo_id != 3){
            unlink(public_path() . $events->photo->file);
            DB::delete('delete from photos where id = ?',[$events->photo_id]);
        }
        $events->delete();
        return redirect('/'.$parametarExport.'/admin/event');
    }

}
