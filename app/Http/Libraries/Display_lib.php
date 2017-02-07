<?PHP

namespace App\Http\Libraries;

use Illuminate\Http\Request;

class Display_lib
{

    public static function index($data)
    {
        $view=view('preheader_view',$data)->render();
        $view.=view('header_view')->render();
        $view.=view('main_page.main_navigation_view',$data)->render();
        $view.=view('main_page.main_content_view',$data)->render();
        $view.=view('main_page.main_aside_view',$data)->render();
        $view.=view('footer_view',$data)->render();
        return $view;
    }
}