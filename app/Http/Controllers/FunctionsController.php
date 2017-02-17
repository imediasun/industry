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

        $result = $request->session()->all();//получаем данные из сессии
        $token = $result['_token'];
        return view('index',['token'=>$token]); //передаём данные в шаблон
     /*   if ($request->ajax()) {
            dump($request->input());
            $array=$request->input();
            var_dump($array);
        }*/
    }
}
