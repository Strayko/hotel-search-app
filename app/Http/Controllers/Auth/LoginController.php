<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/admin';

    public function login(LoginRequest $request) {



        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar, 1,2);

        $credentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        $remember = false;
        if(isset($request->remember)) {
            $remember = true;
        }

        if(Auth::attempt($credentials, $remember)) {
            return redirect($parametarExport.'/admin');
        } else {
            Session::flash('loginFailed', 'Credentials failed');
            return redirect($parametarExport.'/login');
        }

    }

    public function showLoginForm(Request $request) {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar, 1,2);

        return view('auth.login', compact('parametar', 'parametarExport'));
    }

    public function logout(Request $request) {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar, 1,2);

        if($parametarExport == 'en') {
            Session::flush();
            Auth::logout();
            return redirect('/en');
        } else {
            Session::flush();
            Auth::logout();
            return redirect('/de');
        }

    }

//    protected function credentials(Request $request)
//    {
//        $credentials = $request->only($this->username(), 'password');
//        $credentials['is_active'] = 1;
//        return $credentials;
//
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest', 'checkstatus'])->except('logout');
    }
}
