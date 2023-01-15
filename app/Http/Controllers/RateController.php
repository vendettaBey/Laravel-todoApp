<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class RateController extends Controller
{
    public function rating(Request $request){
        dd($request->all());
    }

    public function contact(Request $request) {
        dd($request->all());
    }
}