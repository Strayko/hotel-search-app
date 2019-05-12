<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDocumentController extends Controller
{

    //single delete pdf in edit restaurants not allowed
    public function deletepdf(Request $request) {

        if(isset($request->delete_pdf)) {
            $restaurant = Restaurant::findOrFail($request->delete_pdf);
            dd($restaurant);

        }
    }
}
