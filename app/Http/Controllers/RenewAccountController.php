<?php

namespace App\Http\Controllers;

use App\Package;
use App\Restaurant;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class RenewAccountController extends Controller
{
    public function renewAccount() {

        $packages = Package::pluck('name', 'id')->all();
        return view('renew_account', compact('packages'));
    }

    public function store(Request $request)
    {



        $user = User::where('email', Input::get('email'))->first();
        $user_id = $user['id'];
        if($user) {
            $input = $request->all();
            $input['is_active'] = 1;

            switch($request->get('package_id')) {
                case '1':
                    $dateTime = Carbon::now();
                    $dateTime->modify('+5 hour');
                    $dateTime->format('Y-m-d H:i:s');
                    $input['package_expiry'] = $dateTime;
                    break;
                case '2':
                    $dateTime = Carbon::now();
                    $dateTime->modify('+10 hour');
                    $dateTime->format('Y-m-d H:i:s');
                    $input['package_expiry'] = $dateTime;
                    break;
                case '3':
                    $dateTime = Carbon::now();
                    $dateTime->modify('+15 hour');
                    $dateTime->format('Y-m-d H:i:s');
                    $input['package_expiry'] = $dateTime;
                    break;
            }
            Restaurant::where('user_id', $user_id)->restore();
            $user->update($input);
            return redirect('/login');
        } else {
            return redirect('/renew-account');
        }









        //return $request->all();
    }
}
