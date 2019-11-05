<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    public function redirectTo() {
        return app()->getLocale() . '/';
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showResetForm(Request $request) {

        $getParametar = $request->getRequestUri();
        $parametarExport = substr($getParametar,1,2);
        $token = substr($getParametar, 19);
        return view('auth.passwords.reset', compact('token', 'parametarExport'));
    }

//    public function reset(Request $request) {
//    $parametar = $request->getRequestUri();
//    $parametarExport = substr($parametar, 1,2);
//    return view('de contact');
//}

    public function __construct()
    {
        $this->middleware('guest');
    }
}
