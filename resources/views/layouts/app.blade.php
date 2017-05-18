<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Spirit Mkt - SWG</title>
    <meta name="keywords" content="SWG Mkt" />
    <meta name="description" content="Sistema de Control de Marketing">
    <meta name="author" content="Aldo A. Herrera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

    <!-- page css -->
    @stack('csss')
    <!--end page css-->

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('theme/assets/skin/default_skin/css/theme.css') }}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('theme/assets/admin-tools/css/admin-forms.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('theme/assets/img/logo.ico') }}">
    <!-- custom css -->

    <link rel="stylesheet" type="text/css" href="{{url('swg.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>

<body class="@yield('pagename', 'dashboard-page')">

<!-------------------------------------------------------------+ 
  <body> Helper Classes: 
---------------------------------------------------------------+ 
  '.sb-l-o' - Sets Left Sidebar to "open"
  '.sb-l-m' - Sets Left Sidebar to "minified"
  '.sb-l-c' - Sets Left Sidebar to "closed"

  '.sb-r-o' - Sets Right Sidebar to "open"
  '.sb-r-c' - Sets Right Sidebar to "closed"
---------------------------------------------------------------+
 Example: <body class="example-page sb-l-o sb-r-c">
 Results: Sidebar left Open, Sidebar right Closed
--------------------------------------------------------------->


<!-- Start: Main -->
<div id="main">

    <!-----------------------------------------------------------------+ 
       ".navbar" Helper Classes: 
    -------------------------------------------------------------------+ 
       * Positioning Classes: 
        '.navbar-static-top' - Static top positioned navbar
        '.navbar-static-top' - Fixed top positioned navbar

       * Available Skin Classes:
         .bg-dark    .bg-primary   .bg-success   
         .bg-info    .bg-warning   .bg-danger
         .bg-alert   .bg-system 
    -------------------------------------------------------------------+
      Example: <header class="navbar navbar-fixed-top bg-primary">
      Results: Fixed top navbar with blue background 
    ------------------------------------------------------------------->

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top navbar-shadow bg-primary">
        <div class="navbar-branding">
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>Spirit</b> MKT
            </a>
            <span id="toggle_sidemenu_l" class="fa fa-align-justify"></span>
        </div>
        <ul class="nav navbar-nav navbar-left">

            <li>
                <form class="navbar-form navbar-left navbar-search alt" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Búsqueda...">
                    </div>
                </form>
            </li>
            <li class="dropdown menu-merge hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accesos Rápido
                    <span class="fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu white-drop left" role="menu">
                    <li><a href="#">Solicitar Informe</a></li>
                    <li><a href="#">Solicitar Conferencia</a></li>
                    <li><a href="#">Seguimietno a Tareas</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Estado General</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown menu-merge">
                <div class="navbar-btn btn-group">
                    <button aria-expanded="true" data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                        <span class="ad fa fa-bell-o va-m"></span>
                    </button>
                    <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="panel-menu">
                                <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                    <a href="#nav-tab1" data-toggle="tab" class="btn btn-default btn-md active">Notificaciones</a>
                                    <a href="#nav-tab2" data-toggle="tab" class="btn btn-default btn-md br-l-n br-r-n">Mensajes</a>
                                    <a href="#nav-tab3" data-toggle="tab" class="btn btn-default btn-md">Actividades</a>
                                </div>
                            </div>
                            <div class="panel-body panel-scroller scroller-navbar pn scroller scroller-active">
                                <div class="scroller-content">
                                    <div class="tab-content br-n pn">
                                        <div id="nav-tab1" class="tab-pane alerts-widget active" role="tabpanel">
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-user"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Registration
                                                        <small class="text-muted"></small>
                                                    </h5> Tyler Durden - 16 hours ago

                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Aprobar?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-check text-primary"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Order
                                                        <small class="text-muted"></small>
                                                    </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Confirmar?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-check text-primary"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-print"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-comment"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Comment
                                                        <small class="text-muted"></small>
                                                    </h5> Mike - I loved your article!
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderar?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-check text-primary"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-star"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Review
                                                        <small class="text-muted"></small>
                                                    </h5> Sammy Hilton - 4 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Aprobar?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-check text-primary"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="glyphicon glyphicon-user"></span> </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Registration
                                                        <small class="text-muted"></small>
                                                    </h5> Michael Sober - 7 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Aprobar?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-check text-primary"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-xs dark">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="{{ url('theme/assets/img/avatars/3.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-status online"></span>
                                                    <h5 class="media-heading">Courtney Faught
                                                        <small> - 12:30am</small>
                                                    </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="media-status offline"></span>
                                                    <h5 class="media-heading">Joe Gibbons
                                                        <small> - 12:30am</small>
                                                    </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="{{ url('theme/assets/img/avatars/1.jpg') }}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab3" class="tab-pane scroller-nm" role="tabpanel">
                                            <ul class="media-list" role="menu">
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="{{ url('theme/assets/img/avatars/5.jpg') }}" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="{{ url('theme/assets/img/avatars/2.jpg') }}" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mv5">Article
                                                            <small> - 08/16/22</small>
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="{{ url('theme/assets/img/avatars/3.jpg') }}" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="{{ url('theme/assets/img/avatars/4.jpg') }}" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mv5">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="{{ url('theme/assets/img/avatars/5.jpg') }}" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="{{ url('theme/assets/img/avatars/2.jpg') }}" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading mv5">Article
                                                            <small> - 08/16/22</small>
                                                        </h5>
                                                        Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="{{ url('theme/assets/img/avatars/3.jpg') }}" class="mw40" alt="avatar"> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Article
                                                            <small class="text-muted">- 08/16/22</small>
                                                        </h5> Last Updated 36 days ago by
                                                        <a class="text-system" href="#"> Max </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <table class="table table-striped hidden">
                                                <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Usuario</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <td>Sussy</td>
                                                    <td>Watcher</td>
                                                    <td>@thehawk</td>
                                                </tr>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>Sussy</td>
                                                    <td>Watcher</td>
                                                    <td>@thehawk</td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <td>Sussy</td>
                                                    <td>Watcher</td>
                                                    <td>@thehawk</td>
                                                </tr>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div></div>
                            <div class="panel-footer text-center p9">
                                <a href="#" class=""> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown menu-merge">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                        <span class="flag-xs flag-es"></span>
                        <!-- <span class="caret"></span> -->
                    </button>
                    <ul class="dropdown-menu pv5 animated animated-short white-drop flipInX" role="menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="flag-xs flag-in mr10"></span> Hindu </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="flag-xs flag-tr mr10"></span> Turkish </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="flag-xs flag-us mr10"></span> English </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-divider hidden-xs">
                <i class="fa fa-circle"></i>
            </li>
            <li class="dropdown menu-merge">
                <a href="#" class="dropdown-toggle fw700 p15" data-toggle="dropdown">
                    <img src="{{ url('theme/assets/img/avatars/4.jpg') }}" alt="avatar" class="mw30 br64">
                    <span class="hidden-xs pl15 pr5"> John Doe </span>
                    <span class="fa fa-angle-down hidden-xs"></span>
                </a>
                <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                    <li class="dropdown-header clearfix">
                        <div class="pull-left ml10">
                            <select id="user-status">
                                <optgroup label="Current Status:">
                                    <option value="1-1">Away</option>
                                    <option value="1-2">Offline</option>
                                    <option value="1-3" selected="selected">Online</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="pull-right mr10">
                            <select id="user-role">
                                <optgroup label="Logged in As:">
                                    <option value="1-1">Client</option>
                                    <option value="1-2">Editor</option>
                                    <option value="1-3" selected="selected">Admin</option>
                                </optgroup>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-envelope"></span> Mensjes
                            <span class="label label-primary">2</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-user"></span> Equipo
                            <span class="label label-primary">6</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-bell"></span> Notificaciones </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-gear"></span> Configuracion </a>
                    </li>
                    <li class="dropdown-footer">
                        <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <!-- End: Header -->
    <!-----------------------------------------------------------------+ 
       "#sidebar_left" Helper Classes: 
    -------------------------------------------------------------------+ 
       * Positioning Classes: 
        '.affix' - Sets Sidebar Left to the fixed position 

       * Available Skin Classes:
         .sidebar-dark (default no class needed)
         .sidebar-light  
         .sidebar-light.light   
    -------------------------------------------------------------------+
       Example: <aside id="sidebar_left" class="affix sidebar-light">
       Results: Fixed Left Sidebar with light/white background
    ------------------------------------------------------------------->
    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light sidebar-light affix">

        <!-- Start: Sidebar Left Content -->
        <div class="sidebar-left-content nano-content">
            @include('layouts.leftsidebar')
        </div>
        <!-- End: Sidebar Left Content -->

    </aside>
    <!-- End: Sidebar -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">


        <!-- Begin: Content -->
        <section id="content" class="table-layout animated fadeIn">
            @yield('content')
        </section>
        <!-- End: Content -->

        <!-- Begin: Page Footer -->
        <footer id="content-footer" class="affix">
            <div class="row">
                <div class="col-xs-6">
                    <span class="footer-legal">2017 AI - nteractive</span>
                </div>
                <div class="col-xs-6 text-right">
                    <a href="#content" class="footer-return-top">
                        <span class="fa fa-arrow-up"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End: Page Footer -->
    </section>
    <!-- End: Content-Wrapper -->

    <!-- Start: Right Sidebar -->
    <aside id="sidebar_right" class="nano affix">

        <!-- Start: Sidebar Right Content -->
        <div class="sidebar-right-content nano-content">

            <div class="tab-block sidebar-block br-n">
                <ul class="nav nav-tabs tabs-border nav-justified hidden">
                    <li class="active">
                        <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                    </li>
                    <li>
                        <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                    </li>
                    <li>
                        <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                    </li>
                </ul>
                <div class="tab-content br-n">
                    <div id="sidebar-right-tab1" class="tab-pane active">

                        <h5 class="title-divider text-muted mb20"> Server Statistics
                <span class="pull-right"> 2013
                  <i class="fa fa-caret-down ml5"></i>
                </span>
                        </h5>
                        <div class="progress mh5">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                <span class="fs11">DB Request</span>
                            </div>
                        </div>
                        <div class="progress mh5">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                <span class="fs11 text-left">Server Load</span>
                            </div>
                        </div>
                        <div class="progress mh5">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                <span class="fs11 text-left">Server Connections</span>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <h3 class="text-primary mn pl5">132</h3>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h3 class="text-success-dark mn">
                                    <i class="fa fa-caret-up"></i> 13.2% </h3>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <h3 class="text-primary mn pl5">212</h3>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h3 class="text-success-dark mn">
                                    <i class="fa fa-caret-up"></i> 25.6% </h3>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <h3 class="text-primary mn pl5">82.5</h3>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h3 class="text-danger mn">
                                    <i class="fa fa-caret-down"></i> 17.9% </h3>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
                            <span class="pull-right text-primary fw700">USA</span>
                        </h5>


                    </div>
                    <div id="sidebar-right-tab2" class="tab-pane"></div>
                    <div id="sidebar-right-tab3" class="tab-pane"></div>
                </div>
                <!-- end: .tab-content -->
            </div>
        </div>
    </aside>
    <!-- End: Right Sidebar -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="{{ url('theme/vendor/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ url('theme/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>

<!-- jQuery Validate Plugin-->
<script src="{{ url('theme/assets/admin-tools/admin-forms/js/jquery.validate.min.js') }}"></script>

<!-- jQuery Validate Addon -->
<script src="{{ url('theme/assets/admin-tools/admin-forms/js/additional-methods.min.js') }}"></script>

<!-- Theme Javascript -->
<script src="{{ url('theme/assets/js/utility/utility.js') }}"></script>

<script src="{{ url('theme/assets/js/main.js') }}"></script>
<!-- Widget Javascript -->
<script src="{{ url('theme/assets/js/demo/widgets.js')}}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery(document).ready(function() {
        "use strict";
        // Init Theme Core
        Core.init();
    });
</script>
@stack('scripts')
<!-- END: PAGE SCRIPTS -->

</body>

</html>
