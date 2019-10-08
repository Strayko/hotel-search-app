<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use URL;

use Redirect;
use Input;
use App\User;
use Stripe\Error\Card;

class MoneySetupController extends Controller
{
    public function paymentStripe()
    {
        return view('paymentstripe');
    }
    public function postPaymentStripe(Request $request)
    {


        $input = $request->all();

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
                    return redirect()->route('addmoney.paystripe');
                }
                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'USD',
                    'amount' => 20.49,
                    'description' => 'wallet',
                ]);



                if($charge['status'] == 'succeeded') {
                    echo "<pre>";
//                    print_r($charge);exit();
                    Session::flash('payment-success2', 'Payment successfully completed!');
                    return redirect()->route('addmoney.paystripe');
                } else {
                    Session::flash('error','Money not add in wallet!!');
                    return redirect()->route('addmoney.paystripe');
                }
            } catch (Exception $e) {
                Session::flash('error',$e->getMessage());
                return redirect()->route('addmoney.paystripe');
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                Session::flash('error',$e->getMessage());
                return redirect()->route('addmoney.paystripe');
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                Session::flash('error',$e->getMessage());
                return redirect()->route('addmoney.paystripe');
            }

    }
}