<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use DB;
use App\Good;
use App\Category;
use App\Http\Libraries\Display_lib;
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
    //Get data from DB

        //menu
    $data_nav['menu']=DB::table('categories')
        ->get();
      
        //goods
    $data_content['goods']['akcionniy']=Good::where('type', 1)
        ->orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
    $data_content['goods']['optoviy']=Good::where('type', 2)
        ->orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
    $data['goods']['rozdribny']=Good::where('type', 3)
        ->orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'desc')
        ->take(4)
        ->get();
        //page
    $data_content['title']="Industry";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
       return Display_lib::index($data,$data_nav,$data_content);
    }

    public function ajax_usersessions(Request $request)
    {

        if ($request->ajax()) {
            print('123');
        }
    }
}
