<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{

    private function menu(){
    return $data_nav['menu']=DB::table('admin_categories')
        ->get();

    }
    public function index()
    {


        $data_nav['menu']=$this->menu();
        $path='admin_page';
        $data['title']="Фрилансим по крупному";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return \App\Http\Libraries\Display_lib::admin($path,$data,$data_nav);
    }

    public function customers_registration()
    {


        $data_nav['menu']=$this->menu();
        $path='admin_page/customers_registration';
        $data['title']="Фрилансим по крупному";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return \App\Http\Libraries\Display_lib::admin($path,$data,$data_nav);
    }

    public function add_good()
    {


        $data_nav['menu']=$this->menu();
        $path='admin_page/add_good';
        $data['title']="Фрилансим по крупному";
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return \App\Http\Libraries\Display_lib::admin($path,$data,$data_nav);
    }
    public function ajax_usersessions(Request $request)
    {

        if ($request->ajax()) {
            print('123');
        }
    }
}
