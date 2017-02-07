<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use DB;
use App\Specialization;
class MainController extends Controller
{
    //
  /*  public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    $data['special_filter']=DB::select('select * from specializations');

    $data['title']="Фрилансим по крупному";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
       return \App\Http\Libraries\Display_lib::index($data);
    }

    public function ajax_usersessions(Request $request)
    {

        if ($request->ajax()) {
            print('123');
        }
    }
}
