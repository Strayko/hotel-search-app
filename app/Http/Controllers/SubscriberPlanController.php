<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriberPlanController extends Controller
{
    public function planAndPrice() {

    	return view('plan_and_price');
    }
}
