<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Package;
use App\Photo;
use App\Restaurant;
use App\User;
use Carbon\Carbon;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthorUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(!Auth::check()) {
            $users = User::all();
            $packages = Package::pluck('name', 'id')->all();
            $parametar = $request->getRequestUri();
            $parametarExport = substr($parametar, 1,2);
            return view('author.index', compact('users', 'packages', 'restaurants', 'parametarExport'));
        } else {
            return redirect('/')->with('account-renew-successful', 'IT WORKS');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRegisterRequest $request)
    {





//        if($request->package_id == 2){
//            $packagePrice = $request->package_id = "30";
//            echo $packagePrice;
//        }

	    if(trim($request->password) == '') {
		    $input = $request->except('password');
	    } else {
		    $input = $request->all();
		    $input['password'] = bcrypt($request->password);
	    }


        $input = array_except($input,array('_token'));

        $stripe = Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $token = $stripe->tokens()->create([
                'card' => [
                    'number' => $request->get('card_no'),
                    'exp_month' => $request->get('ccExpiryMonth'),
                    'exp_year' => $request->get('ccExpiryYear'),
                    'cvc' => $request->get('cvvNumber'),
                ],
            ]);

            if (!isset($token['id'])) {
                return redirect('/user/register');
            }

            switch($request->get('package_id')) {
                case '1':
                    $dateTime = Carbon::now();
                    $dateTime->modify('+5 hour');
                    $dateTime->format('Y-m-d H:i:s');
                    $input['package_expiry'] = $dateTime;
                    $charge = $stripe->charges()->create([
                        'card' => $token['id'],
                        'currency' => 'EUR',
                        'amount' => 00.00,
                        'description' => 'wallet',
                    ]);
                    break;
                case '2':
                    $dateTime = Carbon::now();
                    $dateTime->modify('+10 hour');
                    $dateTime->format('Y-m-d H:i:s');
                    $input['package_expiry'] = $dateTime;
                    $charge = $stripe->charges()->create([
                        'card' => $token['id'],
                        'currency' => 'EUR',
                        'amount' => 28.00,
                        'description' => 'wallet',
                    ]);
                    break;
                case '3':
                    $dateTime = Carbon::now();
                    $dateTime->modify('+15 hour');
                    $dateTime->format('Y-m-d H:i:s');
                    $input['package_expiry'] = $dateTime;
                    $charge = $stripe->charges()->create([
                        'card' => $token['id'],
                        'currency' => 'EUR',
                        'amount' => 46.00,
                        'description' => 'wallet',
                    ]);
                    break;
                case '4':
                    $dateTime = Carbon::now();
                    $dateTime->modify('+20 hour');
                    $dateTime->format('Y-m-d H:i:s');
                    $input['package_expiry'] = $dateTime;
                    $charge = $stripe->charges()->create([
                        'card' => $token['id'],
                        'currency' => 'EUR',
                        'amount' => 52.00,
                        'description' => 'wallet',
                    ]);
                    break;
            }


            if($charge['status'] == 'succeeded') {
                echo "<pre>";
                if($file = $request->file('photo_id')) {
                    $name = time() . $file->getClientOriginalName();
                    $file->move('images', $name);
                    $photo = Photo::create(['file'=>$name]);
                    $input['photo_id'] = $photo->id;
                }
                User::create($input);
//                    print_r($charge);exit();
                Session::flash('payment-success2', 'Payment successfully completed!');
                return redirect('/login');
            } else {
                Session::flash('error','Money not add in wallet!!');
                return redirect('/user/register');
            }
        } catch (Exception $e) {
            Session::flash('error',$e->getMessage());
            return redirect('/user/register');
        } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
            Session::flash('error',$e->getMessage());
            return redirect('/user/register');
        } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
            Session::flash('error',$e->getMessage());
            return redirect('/user/register');
        }




	    //return $request->all();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
