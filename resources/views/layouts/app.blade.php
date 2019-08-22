<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title> {{config('app.name','ImmoSolutions')}}</title>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/default.min.css"/>
    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="{{asset('favicon.ico')}}" sizes="any"/>
    <link href="{{asset('js/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>

    @yield('style')
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

@yield('content')
@include('flashy::message')
@include('common.footer')
<!--FOR FLASHY-->
<script src="//code.jquery.com/jquery.js"></script>
<!-- CoreUI and necessary plugins-->
<script src="{{asset('js/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/pace-progress/pace.min.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>
@yield('script')
<!-- Plugins and scripts required by specific  view-->
</body>
</html>
