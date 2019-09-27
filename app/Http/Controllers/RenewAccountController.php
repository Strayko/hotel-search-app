<?php

namespace App\Http\Controllers;


use App\Http\Requests\RenewAccount;
use App\Renew;
use App\Restaurant;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class RenewAccountController extends Controller
{
    public function renewAccount() {

        $packages = Renew::pluck('name', 'id')->all();
        return view('renew_account', compact('packages'));
    }

    public function store(RenewAccount $request)
    {




        $user = User::where('email', Input::get('email'))->first();
        $bcryptPass = $user['password'];
        $password = Input::get('passwordrenew');


        $passwordCompare = Hash::check($password, $bcryptPass);




        $user_id = $user['id'];
        if($user && $passwordCompare) {

            $input = $request->all();
            $input['is_active'] = 1;

            switch($request->get('package_id')) {
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
                case '4':
                    $dateTime = Carbon::now();
                    $dateTime->modify('+20 hour');
                    $dateTime->format('Y-m-d H:i:s');
                    $input['package_expiry'] = $dateTime;
                    break;
            }
            Restaurant::where('user_id', $user_id)->restore();
            $user->update($input);
            return redirect('/')->with('account-renew-successful', 'Your account is up to date!');
        } else {
            Session::flash('renew-user', 'Invalid email od password');
            return redirect('/renew-account');
        }









        //return $request->all();
    }
}
