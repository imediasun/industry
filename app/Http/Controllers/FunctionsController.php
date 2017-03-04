<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use DB;
use Intervention\Image\Facades\Image;
use Illuminate\Http\RedirectResponse;
use App\Http\Libraries\Display_lib;
class FunctionsController extends Controller
{
    //
  /*  public function __construct(){
        $this->middleware('guest');
    }*/
    private static $num;
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
        $uploads_dir='photos';
        $upload=$uploads_dir.'/'.$file_name;



        //"$uploads_dir/$file_name"
        move_uploaded_file($tmp_name,$upload );
        $this->resize_($upload,$uploads_dir,$file_name,'file_name');

        /* $data['img']='/photos/'.$file_name;
        $this->baget_model->insert($data); */
        // Внимание! Имя файла для Blob-данных может различаться в разных браузерах
        if ( ($file['type'] == 'image/png') && ($file['name'] == 'blob') ) {
            //move_uploaded_file($file['tmp_name'], './canvas-' . uniqid() . '.png');
        }
    }
}

private function resize_($upload,$uploads_dir,$file_name,$process){
    //resize of the images
    //image1_small
    $image_info = getimagesize($upload);
    $img_width=$image_info[0];
    $img_height=$image_info[1];
    //проверяем больше ли ширена высоты
    //если больше меняем ширену и высоту
    //real 305x427
    //500х335  (1,4925)
    $uploads[0]=[
        'upload' => $upload,
        'name'=>'thumbnail',
        'width'  => 200,
        'height'=> 133,
    ];
    $uploads[1]=[
    'upload' => $upload,
    'name'=>'image_small',
    'width'  => 500,
    'height'=> 335,
    ];
$uploads[2]=[
    'upload' => $upload,
    'name'=>'image_medium',
    'width'  => 1000,
    'height'=> 667,
    ];
$uploads[3]=[
    'upload' => $upload,
    'name'=>'image_large',
    'width'  => 2000,
    'height'=> 1333,
    ];


    foreach ($uploads as $key=>$up){
        if($img_height>$img_width) {
            $ratio_img=$image_info[1]/$image_info[0];//1,4


            $img = Image::make($up['upload']);
// resize image instance
            $img->resize($up['height']/$ratio_img, $up['height']); //1,4
// set a background-color for the emerging area
            $img->resizeCanvas($up['width'], $up['height'], 'center', false, 'fff');
// insert a watermark
// save image in desired format
            $img->save($uploads_dir.'/'.$up['name'].$file_name);
            $this->kind($process,$imag=$up['name'].$file_name);
}
        if($img_height<$img_width ) {
            $ratio_img=$image_info[0]/$image_info[1];//1,4

            $img = Image::make($up['upload']);
// resize image instance
//image1_small
//500х335  (1,4925)
            $img->resize($up['width'], $up['width']/$ratio_img); //1,4
// set a background-color for the emerging area
            $img->resizeCanvas( $up['width'],$up['height'], 'center', false, 'fff');
// insert a watermark
// save image in desired format
            $img->save($uploads_dir.'/'.$up['name'].$file_name);
            $this->kind($process,$imag=$up['name'].$file_name);

        }
        if($img_height==$img_width ) {
           $img = Image::make($up['upload']);
// resize image instance
//image1_small
//500х335  (1,4925)
            $img->resize($up['height'], $up['height']); //1,4
// set a background-color for the emerging area
            $img->resizeCanvas( $up['width'],$up['height'], 'center', false, 'fff');
// insert a watermark
// save image in desired format
            $img->save($uploads_dir.'/'.$up['name'].$file_name);
            $this->kind($process,$imag=$up['name'].$file_name);

        }


    }







}


    private function kind($process,$imag){

        //нам необходимо свойство класса заменить на сессионную переменную

        for($i=0;$i<1;$i++) {
        dump('ENTER');
        dump(session('variable'));

        dump(session()->all());


            if($process=='file_name_main_image'){
            $num=0;
            }
            else{
            if(empty (session('variable'))){
            session(['variable' => 0]);
            $num=0;
            }
            else{
            $num=session('variable');
            }
            }
            if (session()->has($process . '.' . $num . '.image_medium')) {
                session()->put($process . '.' . $num . '.image_large', $imag);
                //когда уже один то large переписывается а не должен
            dump('this num before');

                session(['variable' => $num+1]);
                dump('this num ufter');
                dump(session('variable'));
                break;
            }

            else if (session()->has($process . '.' . $num . '.image_small')) {
                session()->put($process . '.' . $num . '.image_medium', $imag);

                break;
            }
            else if (session()->has($process . '.' . $num . '.image_thumbnail')) {
                session()->put($process . '.' . $num . '.image_small', $imag);

                break;
            }
            else
            {
            session([$process . '.' . $num . '.image_thumbnail' => $imag]);
            break;
            }

        }
        dump('EXIT');
        dump(Display_lib::$num);
        dump(session()->all());
    }
    public function main_image(Request $request){

        if(!empty($_FILES)) {
            dump(session()->all());
            // Файл передан через обычный массив $_FILES
            echo 'Contents of $_FILES:<br/><pre>'.print_r($_FILES, true).'</pre>';
            $file = $_FILES['my-pic'];
            $file_name=$file['name'];
            $ppos = strrpos($file_name, '.');
            $file_name = substr($file_name, 0, $ppos).'('.md5(uniqid(rand(),1)).').'.substr($file_name, $ppos + 1);

            $tmp_name=$file['tmp_name'];
            $uploads_dir='photos';
            $upload=$uploads_dir.'/'.$file_name;

            move_uploaded_file($tmp_name, "$uploads_dir/$file_name");
            $this->resize_($upload,$uploads_dir,$file_name,'file_name_main_image');

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
                'image_small'    => $photo['image_small'],
                'image_medium'    => $photo['image_medium'],
                'image_large'    => $photo['image_large'],
                'thumbnail'    => $photo['image_thumbnail'],
            ];

        }

        DB::table('photos')->insert($photo_set);

    }
//Add videos
if(!empty($main_array['video1']) ){
    $check=1;

    $video_set[0]=[
        'id' => NULL,
        'id_good'  => $last_data_object+1,
        'video'=> $main_array['video1']

    ];

}
if(!empty($main_array['video2'])){
    $check=1;
     $video_set[1]=[
         'id' => NULL,
         'id_good'  => $last_data_object+1,
         'video'=> $main_array['video2']

     ];}
if(!empty($main_array['video3'])){
    $check=1;
     $video_set[2]=[
         'id' => NULL,
         'id_good'  => $last_data_object+1,
         'video'=> $main_array['video3']

     ];}
if(!empty($main_array['video4'])){
    $check=1;
     $video_set[3]=[
         'id' => NULL,
         'id_good'  => $last_data_object+1,
         'video'=> $main_array['video4']

     ];}
     if(isset($check) && $check==1){
         DB::table('videos')->insert($video_set);
     }

//Add goods_
     $main_image=session('file_name_main_image');

         $dataSet['type'] = $main_array['type'];
         $dataSet['category'] = $main_array['category'];
         $dataSet['articul'] = $main_array['artikul'];
         $dataSet['description'] = $main_array['editor1'];
     $dataSet['description2'] = $main_array['editor2'];
         $dataSet['name'] = $main_array['name'];
         $dataSet['price'] = $main_array['price'];
         $dataSet['image_small']=$main_image[0]['image_small'];
     $dataSet['image_medium']=$main_image[0]['image_medium'];
     $dataSet['image_large']=$main_image[0]['image_large'];
     $dataSet['thumbnail']=$main_image[0]['image_thumbnail'];
     DB::table('goods')->insert($dataSet);


     return redirect()->route('good_added');
    
    }

    public function role(Request $request){
        
        if ($request->ajax()) {
         $inp_array=$request->input();
//поменять роль
         DB::table('role_user')-> where('user_id', $inp_array['user'])

                ->update(['role_id' => $inp_array['role']]);


        }
        
    }
    public function delete_user(Request $request){

        if ($request->ajax()) {
            $inp_array=$request->input();
//поменять роль
     $del_role_user=DB::table('role_user')-> where('user_id', $inp_array['user'])
                ->delete();
     $del_user= DB::table('users')-> where('id', $inp_array['user'])
                ->delete();
    if($del_role_user && $del_user){
       echo json_encode('deleted'); 

    }
     else{ echo json_encode('not_deleted');}


        }

    }
}
