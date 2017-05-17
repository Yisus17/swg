<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Spirit Mkt - SWG</title>
    <meta name="keywords" content="Spirit Mkt - SWG" />
    <meta name="description" content="Sistema de Mercadeo">
    <meta name="author" content="Aldo A. Herrera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('theme/assets/skin/default_skin/css/theme.css') }}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('theme/assets/admin-tools/css/admin-forms.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
<link rel="stylesheet" type="text/css" href="{{url('swg.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

<!-- Start: Main -->
<div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- begin canvas animation bg -->
        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- Begin: Content -->
        <section id="content">
            @yield('content')
        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="{{ url('theme/vendor/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ url('theme/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>

<!-- CanvasBG Plugin(creates mousehover effect) -->
<script src="{{ url('theme/vendor/plugins/canvasbg/canvasbg.js') }}"></script>

<!-- Theme Javascript -->
<script src="{{ url('theme/assets/js/utility/utility.js') }}"></script>

<script src="{{ url('theme/assets/js/main.js') }}"></script>

<!-- Page Javascript -->
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        //Demo.init();

        // Init CanvasBG and pass target starting location
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2,
                y: window.innerHeight / 3.3
            },
        });

    });
</script>

<!-- END: PAGE SCRIPTS -->

</body>

</html>
