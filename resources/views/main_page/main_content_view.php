
<input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <section id="content-container">
            <header class="pageheader">
                <h3><i class="fa fa-home"></i> Dashboard </h3>
                <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> Dashboard </li>
                    </ol>
                </div>
            </header>

            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <h3 class="nm"> <span class="timer" data-from="0" data-to="450" data-speed="5000" data-refresh-interval="50"></span></h3>
                                        <p>Total Orders</p>
                                    </div>
                                    <div class="col-xs-3"> <i class="fa fa-shopping-cart fa-3x text-info"></i> </div>
                                </div>
                                <div class="progress progress-striped progress-xs">
                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <p class="nm"> 4% higher than last month </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <h3 class="nm"> <span class="timer" data-from="0" data-to="65" data-speed="5000" data-refresh-interval="50"></span></h3>
                                        <p>New Message</p>
                                    </div>
                                    <div class="col-xs-3"> <i class="fa fa-envelope fa-3x text-danger"></i> </div>
                                </div>
                                <div class="progress progress-striped progress-xs nm">
                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <p class="nm"> 4% higher than last month </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel widget">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <h3 class="nm"> <span class="timer" data-from="0" data-to="599" data-speed="5000" data-refresh-interval="50"></span></h3>
                                        <p>Registred users</p>
                                    </div>
                                    <div class="col-xs-3"> <i class="fa fa-users fa-3x text-success"></i> </div>
                                </div>
                                <div class="progress progress-striped progress-xs nm">
                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-success"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <p class="nm"> 4% higher than last month </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="panel widget">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <h3 class="nm"> <span class="timer" data-from="0" data-to="65" data-speed="5000" data-refresh-interval="50"></span>%</h3>
                                        <p>Search Traffic</p>
                                    </div>
                                    <div class="col-xs-3"> <i class="fa fa-search fa-3x text-info"></i> </div>
                                </div>
                                <div class="progress progress-striped progress-xs nm">
                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <p class="nm"> 4% higher than last month </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-body np">

                              <div class="col-md-12 col-sm-12 pad-no">-->
                                    <h3 class="mar-hor">Statistical</h3>
                                    <p class="mar-hor">Status : live</p>
                                    <!--================================-->
                                     <div class="nano-content">

                                         <ul id="mainnav-menu" class="list-group" style="background:#000">
                                             <li>
                                                 <a href="#">
                                                     <i class="fa fa-plus-square"></i>
                                                     <span class="menu-title">Menu Level</span>
                                                     <i class="arrow"></i>
                                                 </a>


                                                 <?
                                                 class Recursion
                                                 {
                                                 public $level;
                                                 public $lang = 'en';

                                                 public function get_cat($menu)
                                                 {

                                                     if (!$menu) {
                                                         return NULL;
                                                     }
                                                     $arr_cat = array();
                                                     if (count($menu) != 0) {

                                                         //В цикле формируем массив

                                                         foreach ($menu as $key => $row) {

                                                             //Формируем массив где ключами являются адишники на родительские категории
                                                             if (empty($arr_cat[$row->parent_id])) {
                                                                 $arr_cat[$row->parent_id] = array();
                                                             }
                                                             $arr_cat[$row->parent_id][] = $row;
                                                         }


                                                         //возвращаем массив
                                                         return $arr_cat;
                                                     }
                                                 }


                                                 //вывод каталогa с помощью рекурсии
                                                 public function view_cat($arr, $parent_id = 0, $level ) {

                                                     //Условия выхода из рекурсии
                                                     if (empty($arr[$parent_id])) {
                                                         return;
                                                     }

                                                     echo '<ul class="collapse par parent' . $parent_id . ' level'.$level.'" >';
                                                     //перебираем в цикле массив и выводим на экран
                                                     for ($i = 0; $i < count($arr[$parent_id]); $i++) {

                                                     echo '<label style="color:#fff;top:0px;left:15px" class="form-checkbox form-icon ">
                                                     <input class="check'.$level.'" type="checkbox" value="'.$arr[$parent_id][$i]->id.'"></label>
                                          <li>
                                            <a style="margin-top:-28px;">' . $arr[$parent_id][$i]->name . '</a>';
                                                         //рекурсия - проверяем нет ли дочерних категорий
                                                         $this->view_cat($arr, $arr[$parent_id][$i]->id, 1);
                                                         echo '</li> ';
                                                     }
                                                     echo '</ul>';

                                                 }
                                                 }
                                                 $rec= new Recursion;
                                                 $result = $rec->get_cat($special_filter);
                                                 //Выводи каталог на экран с помощью рекурсивной функции

                                                 $rec->view_cat($result,0,0);

                                                 ?>
<style>
    .parent0{
        margin-left:-10px;
        margin-top:15px;
    }
    .level1{
        margin-left:15px;

    }
    .par{
        margin-left:30px;
    }
</style>

                                                    <!--Submenu-->
                                                    <ul class="collapse">
                                                        <li><a href="#">
                                                                <i class="fa fa-caret-right"></i> Second Level Item</a>
                                                            <ul class="collapse">
                                                                <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                                <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                                <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                                <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                            </ul>

                                                        </li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Second Level Item</a></li>
                                                        <li><a href="#"><i class="fa fa-caret-right"></i> Second Level Item</a></li>
                                                        <li class="list-divider"></li>
                                                        <li>
                                                            <a href="#">Third Level<i class="arrow"></i></a>

                                                            <!--Submenu-->

                                                        </li>
                                                        <li>
                                                            <a href="#">Third Level<i class="arrow"></i></a>

                                                            <!--Submenu-->
                                                            <ul class="collapse">
                                                                <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                                <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                                <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                                <li class="list-divider"></li>
                                                                <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                                <li><a href="#"><i class="fa fa-caret-right"></i> Third Level Item</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    </li>
                                                </ul>
                                     </div>


                               </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <!--Default Tabs (Left Aligned)-->
                        <!--===================================================-->
                        <div class="tab-base">

                            <!--Nav Tabs-->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#demo-lft-tab-1"> <i class="fa fa-globe"></i> Все </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#demo-lft-tab-2"><i class="fa fa-user"></i> Разовые заказы</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#demo-lft-tab-3"><i class="fa fa-anchor"></i> Постоянная работа</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#demo-lft-tab-4"><i class="fa fa-users"></i> В Офис</a>
                                </li>
                            </ul>

                            <!--Tabs Content-->
                            <div class="tab-content">
                                <div id="demo-lft-tab-1" class="tab-pane fade active in">
                                    <h4 class="text-thin">First Tab Content</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                </div>
                                <div id="demo-lft-tab-2" class="tab-pane fade">
                                    <h4 class="text-thin">Second Tab Content</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                </div>
                                <div id="demo-lft-tab-3" class="tab-pane fade">
                                    <h4 class="text-thin">Third Tab Content</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                </div>
                                <div id="demo-lft-tab-4" class="tab-pane fade">
                                    <h4 class="text-thin">Fourth Tab Content</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Default Tabs (Left Aligned)-->

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">

                        <!--Network Line Chart-->
                        <!--===================================================-->
                        <div class="panel">

                            <!--Chart information-->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-9">
                                        <h3 class="nm"> <span class="timer" data-from="0" data-to="260" data-speed="5000" data-refresh-interval="50"></span> GB</h3>
                                        <p>Server Load</p>
                                    </div>
                                </div>
                                <div class="progress progress-striped progress-xs">
                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <p> 250GB of 1,024GB used </p>
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <h4 class="text-left"> HDD 1 <i class="fa fa-caret-up text-success"></i></h4>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                            </div>
                                            <p class="text-left">Health: <span class="text-success">Good</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="text-left"> HDD 2 <i class="fa fa-caret-down text-danger"></i></h4>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                            </div>
                                            <p class="text-left">Health: <span class="text-danger">Bad</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="text-left"> HDD 3 <i class="fa fa-caret-up text-success"></i></h4>
                                            <div class="progress progress-striped progress-xs">
                                                <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                            </div>
                                            <p class="text-left">Health: <span class="text-success">Good</span></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-footer np nb">
                                <div id="chart"> </div>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End network line chart-->

                    </div>
                    <div class="col-md-4">

                        <!--List Todo-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">To do list</h3>
                            </div>
                            <div class="pad-ver">
                                <ul class="list-group bg-trans list-todo mar-no">
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon">
                                            <input type="checkbox">
                                            <span>Find an idea.</span> </label>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon active">
                                            <input type="checkbox" checked>
                                            <span>Do some work</span> </label>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon active">
                                            <input type="checkbox" checked>
                                            <span>Redesign my logo</span> </label>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon">
                                            <input type="checkbox">
                                            <span>Read the book</span> </label>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon">
                                            <input type="checkbox">
                                            <span>Upgrade server</span> </label>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="form-checkbox form-icon active">
                                            <input type="checkbox" checked>
                                            <span>Redesign my logo</span> </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="input-group pad-all">
                                <input type="text" class="form-control" placeholder="New task" autocomplete="off">
                                    <span class="input-group-btn">
                                <button type="button" class="btn btn-success">
                                    <i class="fa fa-plus"></i>
                                </button>
                                </span> </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End todo list-->

                    </div>
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Mini Calendar</h3>
                            </div>
                            <div class="panel-body np">

                                <!--Bootstrap Datepicker : Inline-->
                                <!--===================================================-->
                                <div id="demo-dp-inline">
                                    <div></div>
                                </div>
                                <!--===================================================-->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-sm-6 col-md-6 col-xs-12">

                        <!-- Row selection and deletion (multiple rows) -->
                        <!--===================================================-->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Project Progress </h3>
                            </div>
                            <div id="demo-custom-toolbar" class="table-toolbar-left">
                                <button id="demo-dt-delete-btn" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</button>
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Project</th>
                                        <th class="min-tablet">Priority</th>
                                        <th>Status</th>
                                        <th class="min-desktop">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Graphic layout for client</td>
                                        <td><span class="text-danger">High Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 70%;" class="progress-bar"> <span class="sr-only">70% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2011/04/25</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Make website responsive</td>
                                        <td><span class="text-danger">High Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 60%;" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/07/25</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Clean html/css/js code</td>
                                        <td><span class="text-success">Low Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 30%;" class="progress-bar"> <span class="sr-only">30% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/01/12</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Database optimization</td>
                                        <td><span class="text-warning">Medium Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 55%;" class="progress-bar"> <span class="sr-only">55% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/03/29</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Database migration</td>
                                        <td><span class="text-success">Low Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 20%;" class="progress-bar"> <span class="sr-only">20% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/11/28</td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Email server backup</td>
                                        <td><span class="text-success">Low Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 35%;" class="progress-bar"> <span class="sr-only">35% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/12/02</td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>IT Help Desk</td>
                                        <td><span class="text-success">Low Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 30%;" class="progress-bar"> <span class="sr-only">30% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/08/06</td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Product Dev.</td>
                                        <td><span class="text-warning">Medium Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 60%;" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/10/14</td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Website Redesign</td>
                                        <td><span class="text-warning">Medium Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 65%;" class="progress-bar"> <span class="sr-only">65% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/09/15</td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Local Ad</td>
                                        <td><span class="text-success">Low Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 30%;" class="progress-bar"> <span class="sr-only">30% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/12/13</td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td>Design new theme</td>
                                        <td><span class="text-success">Low Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 45%;" class="progress-bar"> <span class="sr-only">45% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/12/19</td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>Mockup Testing</td>
                                        <td><span class="text-warning">Medium Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 55%;" class="progress-bar"> <span class="sr-only">55% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/03/03</td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                        <td>Testing Mockup</td>
                                        <td><span class="text-success">Low Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 28%;" class="progress-bar"> <span class="sr-only">28% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/10/16</td>
                                    </tr>
                                    <tr>
                                        <td>14.</td>
                                        <td>Design Marketing Campaign </td>
                                        <td><span class="text-warning">Medium Priority</span></td>
                                        <td>
                                            <div class="progress progress-sm">
                                                <div style="width: 62%;" class="progress-bar"> <span class="sr-only">62% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td>2016/12/18</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!-- End Row selection and deletion (multiple rows) -->


                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12">
                        <div class="userWidget-1">
                            <div class="avatar-bg"> <img src="img/av7.png" alt="avatar">
                                <div class="name osLight"> Jane Smith </div>
                            </div>
                            <div class="title"> Web Designer </div>
                            <div class="address"> Los Angeles, CA, USA </div>
                            <ul class="fullstats">
                                <li> <span>280</span>Followers </li>
                                <li> <span>345</span>Following </li>
                                <li> <span>36</span>Posts </li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>

                        <!--Extra small weather widget-->
                        <!--===================================================-->

                        <div class="panel media middle">
                            <div class="media-left bg-primary pad-all">
                                <canvas id="demo-weather-xs-icon-1" width="48" height="48"></canvas>
                            </div>
                            <div class="media-body pad-lft">
                                <p class="text-2x mar-no text-thin">32&#176;</p>
                                <p class="text-muted mar-no">Sunny</p>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Extra small weather widget-->

                        <!--Extra small weather widget-->
                        <!--===================================================-->
                        <div class="panel media middle">
                            <div class="media-left pad-all">
                                <canvas id="demo-weather-xs-icon-2" width="48" height="48"></canvas>
                            </div>
                            <div class="media-body pad-lft">
                                <p class="text-2x mar-no text-thin text-mint">25&#176;</p>
                                <p class="text-muted mar-no">Partly Cloudy Day</p>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Extra small weather widget-->

                    </div>
                </div>

            </div>
            <!--===================================================-->
            <!--End page content-->

        </section>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->

        <!--MAIN NAVIGATION-->
        <!--===================================================-->

        <!--===================================================-->
        <!--END MAIN NAVIGATION-->


 

    </div>


<script>
$('.check0').change(function(){

    var obj;
    var _obj;
    var id=$(this).val()
 if($(this).is(':checked')){
     $(this).parent('.form-checkbox').next('li').addClass('active')
     $(this).parent('.form-checkbox').next('li').find('ul').addClass('in')
     $(this).parent('.form-checkbox').next('li').find('ul').attr('aria-expanded','true')
     $(this).parent('.form-checkbox').next('li').find('ul').css('height','inherit')
     obj = $(this).parent('.form-checkbox').next('li').find('input[type=checkbox]')
      $.each( obj, function( key, value ) {
          if(!value.checked){
       value.click()
          }
      });
     $.ajax({
         type: "POST",
         url: "MainController/ajax_usersessions",
         data: { id: id }
     }).done(function( msg ) {
         alert( "Data Saved: " + msg );
     });
     }
    else{
     $(this).parent('.form-checkbox').next('li').find('ul').removeClass('in')
     $(this).parent('.form-checkbox').next('li').find('ul').attr('aria-expanded','false')
     $(this).parent('.form-checkbox').next('li').removeClass('active')
     _obj = $(this).parent('.form-checkbox').next('li').find('input[type=checkbox]')
     $.each( _obj, function( ker, val ) {
         if(val.checked){
         val.click()
         }
     });

 }

});

</script>