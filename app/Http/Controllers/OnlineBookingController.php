<?php

namespace App\Http\Controllers;

use App\Booking;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OnlineBookingController extends Controller
{
    public function index(Request $request) {

        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar, 1,2);

        $user = Auth::user();
        $booking = Booking::where('user_id', $user->id)->orderBy('id', 'asc')->paginate(5);
        $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
        $gold = User::where('package_id', Auth::user()->isGold())->first();
        $silver = User::where('package_id', Auth::user()->isSilver())->first();
        $notifications = Booking::where('user_id', $user->id)
            ->where('is_read', 1)
            ->get();


        return view('silver.booking.index', compact('booking', 'notifications', 'platinium', 'silver', 'gold', 'parametarExport'));
    }

    public function update() {

        $user = Auth::user();
        $booking = Booking::where('user_id', $user->id)->get();

        foreach($booking as $key => $object) {
            $object->is_read = 0;
            $object->save();
        }
        return redirect()->back();

    }

    public function edit(Request $request, $locale, $id) {

        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar, 1,2);

        $booking = Booking::findOrFail($id);
        $booking['is_read'] = 0;
        $booking->save();
        $user = Auth::user();
        $notifications = Booking::where('user_id', $user->id)
            ->where('is_read', 1)
            ->get();

        $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
        $gold = User::where('package_id', Auth::user()->isGold())->first();
        $silver = User::where('package_id', Auth::user()->isSilver())->first();
        return view('silver.booking.edit', compact('booking', 'notifications', 'platinium', 'silver', 'gold', 'parametarExport'));
    }

    public function destroy(Request $request, $locale, $id) {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar,1,2);
        $booking = Booking::findOrFail($id);
        $booking->delete();
        Session::flash('deleted_reservations', 'The Reservation has been deleted');
        return redirect('/'.$parametarExport.'/admin/booking');
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
            $booking = Booking::where('id', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('name', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('email', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orWhere('restaurant_title', 'like', '%'.$query.'%')->where('user_id', \Auth::user()->id)
                ->orderBy($sort_by, $sort_type)->where('user_id', \Auth::user()->id)
                ->paginate(5);
            return view('silver.ajax.booking_data', compact('booking'))->render();
        }
    }
}
