<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="ImmoSolutions find houses in Lome, Togo ">
    <meta name="author" content="">
    <title>{{config('app.name')}}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="{{asset('guest/fonts.googleapis.com/css.css')}}" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('guest/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('guest/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('guest/css/default.css')}}">
</head>

<body class="inner-pages">
<!-- START SECTION HEADINGS -->
@include('guest.common.header')

<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>@lang("Connection")</h1>
            <h2><a href="{{url('/home')}}">@lang("Acceuil")</a> &nbsp;/&nbsp; @lang("Se connecter")</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION LOGIN -->
<div id="login">
    <div class="login">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="access_social">
                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
            </div>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                       value="{{old('email')}}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" id="password" value=""
                       required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <i class="icon_lock_alt"></i>
            </div>

            <div class="clearfix add_bottom_30">
                <div class="checkboxes float-left">
                    <label class="container_check">@lang('Se souvenir de moi ')
                        <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                    </label>
                </div>
                @if(Route::has('password.request'))
                <div class="float-right mt-1"><a id="forgot" href="{{route('password.request')}}">
                        @lang("Mot de Passe oublié")</a>
                </div>
                @endif
            </div>
            <button type="submit" class="btn_1 rounded full-width">@lang("Se connecter")</button>
            <div class="text-center add_top_10">@lang(" Voulez vous  trouver des logements ?") <strong><a href="{{url('/guest-register')}}">
                        @lang("S'inscrire pour")
                        </a></strong></div>
        </form>
    </div>
</div>
<!-- END SECTION LOGIN -->

<!-- START SECTION NEWSLETTER -->
@include('guest.section.newsletter')
<!-- END SECTION NEWSLETTER -->

<!-- START FOOTER -->
@include('guest.common.footer')
<!-- END FOOTER -->
<!--Style Switcher===========================================-->
<div class="color-switcher" id="choose_color"><a href="login.html#." class="picker_close"><i
            class="fa fa-cog fa-spin fa-2x"></i></a>
    <div class="theme-colours">
        <p class="font-italic">Choose Colour style</p>
        <ul>
            <li>
                <a href="login.html#." class="blue" id="blue"></a>
            </li>
            <li>
                <a href="login.html#." class="pink" id="pink"></a>
            </li>
            <li>
                <a href="login.html#." class="orange" id="orange"></a>
            </li>
            <li>
                <a href="login.html#." class="purple" id="purple"></a>
            </li>
            <li>
                <a href="login.html#." class="green" id="green"></a>
            </li>
            <li>
                <a href="login.html#." class="red" id="red"></a>
            </li>
            <li>
                <a href="login.html#." class="cyan" id="cyan"></a>
            </li>
            <li>
                <a href="login.html#." class="sky-blue" id="sky-blue"></a>
            </li>
            <li>
                <a href="login.html#." class="gray" id="gray"></a>
            </li>
            <li>
                <a href="login.html#." class="brown" id="brown"></a>
            </li>
        </ul>
    </div>
</div>

<!-- ARCHIVES JS -->
<script src="{{asset('guest/js/jquery.min.js')}}"></script>
<script src="{{asset('guest/js/tether.min.js')}}"></script>
<script src="{{asset('guest/js/bootstrap.min.js')}}"></script>
<script src="{{asset('guest/js/smooth-scroll.min.js')}}"></script>
<script src="{{asset('guest/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('guest/js/newsletter.js')}}"></script>
<script src="{{asset('guest/js/color-switcher.js')}}"></script>
<script src="{{asset('guest/js/inner.js')}}"></script>
</body>

</html>
