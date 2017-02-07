<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HomePage | Jasmine - Responsive admin template.</title>

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/jasmine/css/bootstrap.min.css" rel="stylesheet">

    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="/jasmine/css/style.css" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="/jasmine/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--Switchery [ OPTIONAL ]-->
    <link href="/jasmine/plugins/jvectormap/jquery-jvectormap.css" rel="stylesheet">

    <!--Switchery [ OPTIONAL ]-->
    <link href="/jasmine/plugins/switchery/switchery.min.css" rel="stylesheet">

    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="/jasmine/plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">

    <!--Morris.js [ OPTIONAL ]-->
    <link href="/jasmine/plugins/jquery-ricksaw-chart/jasmine/css/rickshaw.css" rel="stylesheet">

    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="/jasmine/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

    <!--Bootstrap Table [ OPTIONAL ]-->
    <link href="/jasmine/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/jasmine/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!--Jquery Tag It [ OPTIONAL ]-->
    <link href="/jasmine/plugins/tag-it/jquery.tagit.css" rel="stylesheet">

    <!--Summernote [ OPTIONAL ]-->
    <link href="/jasmine/plugins/summernote/summernote.min.css" rel="stylesheet">

    <!--Demo [ DEMONSTRATION ]-->
    <link href="/jasmine/css/demo/jasmine.css" rel="stylesheet">

    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="/jasmine/plugins/pace/pace.min.css" rel="stylesheet">

    <script src="/jasmine/plugins/pace/pace.min.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.1.1.js"
            integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
            crossorigin="anonymous"></script>
</head>

<body>

<!--NAVBAR-->
<!--===================================================-->
<header id="navbar" style="position:relative">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand"> <i class="fa fa-cube brand-icon"></i>
                <div class="brand-title"> <span class="brand-text">Jasmine</span> </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->

        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="logo">
                <img style="width:200px;height:50px" src="/img/logo_magelan_black.png">
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Navigation toogle button-->




            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>
<!--===================================================-->
<!--END NAVBAR-->
@yield('content')
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
