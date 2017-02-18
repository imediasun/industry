<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest');
    }
    public function index(Request $request){


       if ($request->ajax()) {
            dump($request->input());
           
        }
    }
}
