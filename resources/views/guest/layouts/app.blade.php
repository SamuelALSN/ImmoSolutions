<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{config('app.name','ImmoSolutions')}}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="{{asset('guest/fonts.googleapis.com/css.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('guest/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('guest/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('guest/css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/alertify/alertify.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/alertify/default.min.css')}}">
    @yield('my_css')
</head>
<body class="">
<!-- START SECTION HEADINGS -->
@include('guest.common.header')

<!-- CONTENT -->
@yield('content')
<!-- ENDCONTENT-->


<!-- START SECTION NEWSLETTER -->
@include('guest.section.newsletter')
<!-- END SECTION NEWSLETTER -->

<!-- START FOOTER -->
@include('guest.common.footer')
<!-- END FOOTER -->


<!--Style Switcher-->
<div class="color-switcher" id="choose_color"><a href="index.html#." class="picker_close"><i
            class="fa fa-cog fa-spin fa-2x"></i></a>
    <div class="theme-colours">
        <p class="font-italic">@lang("Personnaliser les couleurs")</p>
        <ul>
            <li>
                <a href="index.html#." class="blue" id="blue"></a>
            </li>
            <li>
                <a href="index.html#." class="pink" id="pink"></a>
            </li>
            <li>
                <a href="index.html#." class="orange" id="orange"></a>
            </li>
            <li>
                <a href="index.html#." class="purple" id="purple"></a>
            </li>
            <li>
                <a href="index.html#." class="green" id="green"></a>
            </li>
            <li>
                <a href="index.html#." class="red" id="red"></a>
            </li>
            <li>
                <a href="index.html#." class="cyan" id="cyan"></a>
            </li>
            <li>
                <a href="index.html#." class="sky-blue" id="sky-blue"></a>
            </li>
            <li>
                <a href="index.html#." class="gray" id="gray"></a>
            </li>
            <li>
                <a href="index.html#." class="brown" id="brown"></a>
            </li>
        </ul>
    </div>
</div>

<!-- ARCHIVES JS -->
<script src="{{asset('guest/js/jquery.min.js')}}"></script>
<script src="{{asset('guest/js/tether.min.js')}}"></script>
<script src="{{asset('guest/js/bootstrap.min.js')}}"></script>
<script src="{{asset('guest/js/smooth-scroll.min.js')}}"></script>
<script src="{{asset('guest/js/color-switcher.js')}}"></script>
<script src="{{asset('guest/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('guest/js/newsletter.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

@yield('my_scripts')
</body>
