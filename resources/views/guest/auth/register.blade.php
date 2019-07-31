<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="ImmoSolutions find houses in Lome, Togo">
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
    <link rel="stylesheet" href=" {{asset('guest/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('guest/css/default.css')}}">
</head>

<body class="inner-pages">
<!-- START SECTION HEADINGS -->
@include('guest.common.header')

<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>@lang("S'enregistrer")</h1>
            <h2><a href="{{url('/home')}}">@lang("Accueil") </a> &nbsp;/&nbsp; @lang("S'enregistrer")</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION 404 -->
<div id="login">
    <div class="login">
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-group">
                <label>@lang("Prenom")</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                       value="{{ old('name') }}"
                       required autocomplete="name" autofocus>
                <i class="ti-user"></i>
                @error('name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label>@lang("Nom")</label>
                <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror"
                       name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>@lang("Email")</label>
{{--                <input class="form-control" type="email">--}}
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email"
                       placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>@lang("Mot de Passe")</label>
{{--                <input class="form-control" type="password" id="password1">--}}
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror" name="password"
                       required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label>@lang("Mot de Passe ")</label>
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation" required autocomplete="new-password"
                       placeholder="@lang("Repeter le mot de passe")">
{{--                <input class="form-control" type="password" id="password2">--}}
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label>@lang("Pays")</label>
                <select name="country_id" class="form-control"
                        data-live-search="true" id="country_id">
                    @foreach  (\App\Helpers\Country\Country::getCountries()  as $ctry)
                        <option class="form-control" value="{{$ctry->id}}">{{$ctry->name}}</option>
                    @endforeach
                </select>
            </div>
<hr>
            <div id="pass-info" class="clearfix"></div>
            <button type="submit" class="btn_1 rounded full-width add_top_30">@lang("S'inscrire")</button>
            <div class="text-center add_top_10">@lang("Posseder vous deja un compte ?") <strong><a
                        href="{{url('/guest-login')}}">@lang("Se connecter ")</a></strong></div>
        </form>
    </div>
</div>
<!-- END SECTION 404 -->

<!-- START SECTION NEWSLETTER -->
@include('guest.section.newsletter')
<!-- END SECTION NEWSLETTER -->

<!-- START FOOTER -->
@include('guest.common.footer')
<!-- END FOOTER -->
<!--Style Switcher===========================================-->
<div class="color-switcher" id="choose_color"><a href="register.html#." class="picker_close"><i
            class="fa fa-cog fa-spin fa-2x"></i></a>
    <div class="theme-colours">
        <p class="font-italic">Choose Colour style</p>
        <ul>
            <li>
                <a href="register.html#." class="blue" id="blue"></a>
            </li>
            <li>
                <a href="register.html#." class="pink" id="pink"></a>
            </li>
            <li>
                <a href="register.html#." class="orange" id="orange"></a>
            </li>
            <li>
                <a href="register.html#." class="purple" id="purple"></a>
            </li>
            <li>
                <a href="register.html#." class="green" id="green"></a>
            </li>
            <li>
                <a href="register.html#." class="red" id="red"></a>
            </li>
            <li>
                <a href="register.html#." class="cyan" id="cyan"></a>
            </li>
            <li>
                <a href="register.html#." class="sky-blue" id="sky-blue"></a>
            </li>
            <li>
                <a href="register.html#." class="gray" id="gray"></a>
            </li>
            <li>
                <a href="register.html#." class="brown" id="brown"></a>
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
