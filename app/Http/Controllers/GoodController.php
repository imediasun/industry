<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Http\Libraries\Display_lib;
class GoodController extends Controller
{
    public function index($id){
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //goods
        $data_content['good']=Good::where('id',$id)
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();
        
        //page
        $data_content['title']="Industry";
        $path='good_page';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::index($path,$data,$data_nav,$data_content);

    }
}
