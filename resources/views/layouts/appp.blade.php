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

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
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
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ Auth::logout() }}"
                                   onclick="e.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- CoreUI and necessary plugins-->
<script src="{{asset('js/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/pace-progress/pace.min.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
<!-- Plugins and scripts required by this view-->
@yield('script')

</body>
</html>
