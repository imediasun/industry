<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use DB;
use Illuminate\Http\RedirectResponse;
class FunctionsController extends Controller
{
    //
  /*  public function __construct(){
        $this->middleware('guest');
    }*/
    public function index(Request $request){



    if(!empty($_FILES)) {
        dump(session()->all());
        // Файл передан через обычный массив $_FILES
        echo 'Contents of $_FILES:<br/><pre>'.print_r($_FILES, true).'</pre>';
        $file = $_FILES['my-pic'];
        $file_name=$file['name'];
        $ppos = strrpos($file_name, '.');
        $file_name = substr($file_name, 0, $ppos).'('.md5(uniqid(rand(),1)).').'.substr($file_name, $ppos + 1);

        $tmp_name=$file['tmp_name'];
        $uploads_dir='./../photos';

        move_uploaded_file($tmp_name, "$uploads_dir/$file_name");



        if (session()->has('file_name')) {
            $sess_array=session('file_name');
            $last_key = key( array_slice( $sess_array, -1, 1, TRUE ) );
            var_dump($last_key);
            var_dump($file_name);
            session()->push('file_name',$file_name);
        }
        else{

            session(['file_name.0'=>$file_name]);
        }


        dump($request->session('file_name.0'));
        /* $data['img']='/photos/'.$file_name;
        $this->baget_model->insert($data); */
        // Внимание! Имя файла для Blob-данных может различаться в разных браузерах
        if ( ($file['type'] == 'image/png') && ($file['name'] == 'blob') ) {
            //move_uploaded_file($file['tmp_name'], './canvas-' . uniqid() . '.png');
        }
    }
}


 public function form(Request $request){
        if ($request->ajax()) {
        $main_array=$request->input();

        }

     $main_array=$_POST;
//Add photos
    if(!empty(session('file_name'))){
        $data_m = Good::all();
        $last_data_object = collect($data_m)->last();

        $last_data_object =$last_data_object['original']['id'];
        foreach (session('file_name') as $key=> $photo) {
            $photo_set[] = [
                'id' => NULL,
                'id_good'  => $last_data_object+1,
                'photo'    => $photo
            ];

        }

        DB::table('photos')->insert($photo_set);

    }
//Add videos

   $video_set[0]=[
       'id' => NULL,
       'id_good'  => $last_data_object+1,
       'video'=> $main_array['video1']

   ];
     $video_set[1]=[
         'id' => NULL,
         'id_good'  => $last_data_object+1,
         'video'=> $main_array['video2']

     ];
     $video_set[2]=[
         'id' => NULL,
         'id_good'  => $last_data_object+1,
         'video'=> $main_array['video3']

     ];
     $video_set[3]=[
         'id' => NULL,
         'id_good'  => $last_data_object+1,
         'video'=> $main_array['video4']

     ];
     DB::table('videos')->insert($video_set);
//Add goods_
         $dataSet['type'] = $main_array['type'];
         $dataSet['category'] = $main_array['category'];
         $dataSet['articul'] = $main_array['artikul'];
         $dataSet['description'] = $main_array['editor1'];
         $dataSet['name'] = $main_array['name'];
         $dataSet['price'] = 15;
         DB::table('goods')->insert($dataSet);

    }

    public function role(Request $request){
        
        if ($request->ajax()) {
         $inp_array=$request->input();
//поменять роль
         DB::table('role_user')-> where('user_id', $inp_array['user'])

                ->update(['role_id' => $inp_array['role']]);


        }
        
    }
}
