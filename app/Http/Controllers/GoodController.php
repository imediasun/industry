<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Photo;
use App\Video;
use App\Http\Libraries\Display_lib;
class GoodController extends Controller
{
    public function index($id){
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //goods
        $data_content['good']=Good::where('id',$id)
        ->get();
        $data_content['photos']=Photo::where('id_good',$id)
            ->get();

        $data_content['video']=Video::where('id_good',$data_content['good'][0]['original']['id'])
            ->get();
        
        //page
        $data_content['title']="Industry";
        $path='good_page';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::index($path,$data,$data_nav,$data_content);

    }
}
