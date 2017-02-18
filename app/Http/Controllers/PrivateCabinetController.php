<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\Display_lib;
class PrivateCabinetController extends Controller
{
    public function index($id,Request $request){
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //cabinet data
        /*$data_content['good']=Good::where('id',$id)
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();*/

        //page
        $data_cab['cab_btn']='index';
        $data_cab['id']=$id;
        $data_content['title']="Industry";
        $path='cabinet_page';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::cabinet($path,$data,$data_nav,$data_content,$data_cab);

    }

    public function orders($id){
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //cabinet data
        /*$data_content['good']=Good::where('id',$id)
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();*/

        //page
        $data_cab['cab_btn']='orders';
        $data_cab['id']=$id;
        $data_content['title']="Industry";
        $path='cabinet_page_orders';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::cabinet($path,$data,$data_nav,$data_content,$data_cab);

    }

    public function likes($id){
        print('likes');
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //cabinet data
        /*$data_content['good']=Good::where('id',$id)
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();*/

        //page
        
        $data_cab['cab_btn']='likes';
        $data_cab['id']=$id;
        $data_content['title']="Industry";
        $path='cabinet_page_likes';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::cabinet($path,$data,$data_nav,$data_content,$data_cab);

    }
    public function messages($id){
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //cabinet data
        /*$data_content['good']=Good::where('id',$id)
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();*/

        //page
        
        $data_cab['cab_btn']='messages';
        $data_cab['id']=$id;
        $data_content['title']="Industry";
        $path='cabinet_page_messages';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::cabinet($path,$data,$data_nav,$data_content,$data_cab);

    }
}
