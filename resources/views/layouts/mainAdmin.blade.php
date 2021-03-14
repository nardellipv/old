<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Old Barber Chair</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    @yield('css')


    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <!-- meanmenu icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- morrisjs CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- modernizr JS
  ============================================ -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    @toastr_css
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <div class="left-sidebar-pro">
        @include('admin.parts._menu')
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        @include('admin.parts._header')

        @yield('content')

    </div>

    <!-- jquery
  ============================================ -->
    <script src="{{ asset('assets/js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
  ============================================ -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


    @yield('js')

    <!-- wow JS
  ============================================ -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- price-slider JS
  ============================================ -->
    <script src="{{ asset('assets/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
  ============================================ -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
  ============================================ -->
    {{-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}
    <!-- sticky JS
  ============================================ -->
    {{-- <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script> --}}
    <!-- scrollUp JS
  ============================================ -->
    {{-- <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script> --}}
    <!-- mCustomScrollbar JS
  ============================================ -->
    {{-- <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js') }}"></script> --}}
    <!-- metisMenu JS
  ============================================ -->
    <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
  ============================================ -->
    {{-- <script src="{{ asset('assets/js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris-active.js') }}"></script> --}}
    <!-- morrisjs JS
  ============================================ -->
    {{-- <script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/sparkline/jquery.charts-sparkline.js') }}"></script> --}}
    <!-- calendar JS
  ============================================ -->
{{--     <script src="{{ asset('assets/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar-active.js') }}"></script> --}}
    <!-- plugins JS
  ============================================ -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main JS
  ============================================ -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @toastr_js
    @toastr_render
</body>

</html>
