<?PHP

namespace App\Http\Libraries;

use Illuminate\Http\Request;

class Display_lib
{

    public static function index($data,$data_nav,$data_content)
    {
        $view=view('preheader_view',$data)->render();
        $view.=view('header_view')->render();
        $view.=view('main_navigation_view',$data_nav)->render();
        $view.=view('main_page.main_content_view',$data_content)->render();
        $view.=view('main_page.main_aside_view',$data)->render();
        $view.=view('footer_view',$data)->render();
        return $view;
    }
    
    
    public static function admin($path,$data,$data_nav)
    {
        $view=view($path.'.preheader_view',$data)->render();
        $view.=view($path.'.header_view')->render();
        $view.=view($path.'.main_navigation_view',$data_nav)->render();
        $view.=view($path.'.main_content_view',$data)->render();
        $view.=view($path.'.main_aside_view',$data)->render();
        $view.=view($path.'.footer_view',$data)->render();
        return $view;
    }
}