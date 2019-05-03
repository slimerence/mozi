<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function contact(Request $request){
        dd($request->all());
    }
}
