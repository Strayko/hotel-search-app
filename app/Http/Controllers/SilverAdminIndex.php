<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SilverAdminIndex extends Controller
{
    public function index(Request $request) {

        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar,1,2);

        $user = Auth::user();
        $notifications = Booking::where('user_id', $user->id)
            ->where('is_read', 1)
            ->get();

        $platinium = User::where('package_id', Auth::user()->isPlatinium())->first();
        $gold = User::where('package_id', Auth::user()->isGold())->first();
        $silver = User::where('package_id', Auth::user()->isSilver())->first();
	    $restaurants = Restaurant::where('user_id', Auth::user()->id)->get();
		$user = User::where('id', Auth::user()->id)->first();

	    return view('silver.index', compact('restaurants', 'user', 'platinium', 'silver', 'gold', 'notifications', 'parametarExport'));
    }
}
