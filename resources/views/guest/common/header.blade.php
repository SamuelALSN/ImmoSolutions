 @if(\Illuminate\Support\Facades\Auth::check())
    <div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-info hidden-sm-down">
                <div class="call-header">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> (228) 90 55 78 31</p>
                </div>
                <div class="address-header">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lomé Togo </p>
                </div>
                <div class="mail-header">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>immosolutions@gmail.com</p>
                </div>
            </div>
            <div class="top-social hidden-sm-down">
                    <div class="login-wrap">
                        <ul class="d-flex">
                            <li><a href="{{url('/guest-login')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
                            <li><a href="{{url('/deconnect')}}"><i class="fa fa-sign-out"></i> @lang('Se Déconnecter')</a></li>
{{--                            <li><a href="{{url('/guest-register')}}"><i class="fa fa-sign-in"></i>@lang('S\'enregistrer')</a></li>--}}

                            {{--                        <li><a href="{{Auth::logout()}}"><i class="fa fa-sign-in"></i>@lang('Se deconnecter')</a></li>--}}

                        </ul>
                    </div>
                    <div class="login-wrap">
                        <ul class="d-flex">

                        </ul>
                    </div>

                <div class="social-icons-header">
                    <div class="social-icons">
                        <a href=" "><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=" "><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=" "><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
                        <img src="{{asset('guest/images/en.png')}}" alt="lang" /> @lang('Anglais')
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                        <li><img src="{{asset('guest/images/fr.png')}}" alt="lang" />@lang('Francais')</li>
                        <li><img src="{{asset('guest/images/de.png')}}" alt="lang" /> @lang('Allemand')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom heading sticky-header" id="heading">
        <div class="container">
            <a href="" class="logo">
                <img src="{{asset('guest/images/logo.svg')}}" alt="realhome">
            </a>
            <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            <div class="get-quote hidden-lg-down">
                <a href="{{route('property.create')}}">
                    <p>@lang("Soumettre un bien ")</p>
                </a>
            </div>
            <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <form action="#" id="bloq-search" class="collapse">
                <div class="bloq-search">
                    <input type="text" placeholder="Rechercher...">
                    <input type="submit" value="Search">
                </div>
            </form>

            <nav id="main-menu" class="collapse">
                <ul>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="{{url('/welcome')}}" aria-expanded="false">@lang("Accueil")</a>
                        </div>
                        <div class="collapse" id="home">
                            <div class="card card-block">
                                {{--                                <a class="dropdown-item" href="">@lang("Accueil")</a>--}}
                                {{--                                <a class="dropdown-item" href="">@lang("Accueil")</a>--}}
                                {{--                                <a class="dropdown-item" href="">@lang("Accueil")</a>--}}

                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{url('/welcome')}}">@lang("Accueil")</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/welcome')}}">@lang("Accueil")</a>
                            {{--                            <a class="dropdown-item" href="">@lang("Accueil")</a>--}}
                            {{--                            <a class="dropdown-item" href="">@lang("Accueil")</a>--}}
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="#listing" aria-expanded="false">@lang("Biens /Réservations")</a>
                        </div>
                        <div class="collapse" id="listing">
                            <div class="card card-block">
                                <a class="dropdown-item" href="{{url('/reservation-uncomplete')}}">@lang("Demandes de Réservations") </a>
                                <a class="dropdown-item" href="{{url('/reserver')}}"> @lang(" Réservation Effecutés ")</a>
                                <a class="dropdown-item" href="">@lang("Details des Transactions ")</a>
                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=" ">@lang("Biens")</a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="{{url('/reservation-uncomplete')}}">@lang("Demandes de Réservations") </a>
                            <a class="dropdown-item" href="{{url('/reserver')}}"> @lang(" Réservation Effecutés ")</a>
                            <a class="dropdown-item" href="">@lang("Details des Transactions ")</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="" aria-expanded="false">@lang("Biens publiés")</a>
                        </div>
                        <div class="collapse" id="services">
                            <div class="card card-block">

                                <a class="dropdown-item" href="">@lang("Liste des Biens")</a>
                                <a class="dropdown-item" href="">@lang("Statistiques")</a>
                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=" ">@lang("Biens publiés")</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('/properties-all')}}">@lang("Liste des Biens")</a>
                            <a class="dropdown-item" href="{{url('/properties-charts')}}">@lang("Statistiques")</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href=" about" aria-expanded="false">@lang("Autres")</a>
                        </div>
                        <div class="collapse" id="about">
                            <div class="card card-block">
                                <a class="dropdown-item" href="">@lang('Paiements')</a>
                                <a class="dropdown-item" href="">@lang('Promotions')</a>
                                <a class="dropdown-item" href="">@lang('Nos Tarifs')</a>

                                {{--                                <a class="dropdown-item" href="{{url('/guest-login')}}">@lang('Se Connecter')</a>--}}
                                {{--                                <a class="dropdown-item" href="{{url('/guest-register')}}">@lang('S\'enregistrer ')</a>--}}
                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Autre</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">@lang('Paiements')</a>
                            <a class="dropdown-item" href="">@lang('Promotions')</a>
                            <a class="dropdown-item" href="">@lang('Nos Tarifs')</a>
                            {{--                            <a class="dropdown-item" href="">@lang('Se Connecter')</a>--}}
                            {{--                            <a class="dropdown-item" href="">@lang('S\'enregistrer ')</a>--}}
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="#blog" aria-expanded="false">Blog</a>
                        </div>
                        <div class="collapse" id="blog">
                            <div class="card card-block">
                                <a class="dropdown-item" href="">@lang("Blog")</a>

                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="index.html#">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">@lang("Blog")</a>
                        </div>
                    </li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@else
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="top-info hidden-sm-down">
                    <div class="call-header">
                        <p><i class="fa fa-phone" aria-hidden="true"></i> (228) 90 55 78 31</p>
                    </div>
                    <div class="address-header">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lomé Togo </p>
                    </div>
                    <div class="mail-header">
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>immosolutions@gmail.com</p>
                    </div>
                </div>
                <div class="top-social hidden-sm-down">
                    <div class="login-wrap">
                        <ul class="d-flex">
                            <li><a href="{{url('/guest-login')}}"><i class="fa fa-user"></i> @lang('Se connecter')</a>
                            </li>
                            <li><a href="{{url('/guest-register')}}"><i
                                        class="fa fa-sign-in"></i>@lang('S\'enregistrer')</a></li>
                        </ul>
                    </div>

                    <div class="social-icons-header">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang"
                                data-toggle="dropdown" aria-haspopup="true">
                            <img src="{{asset('guest/images/en.png')}}" alt="lang"/> @lang('Anglais')
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                            <li><img src="{{asset('guest/images/fr.png')}}" alt="lang"/>@lang('Francais')</li>
                            <li><img src="{{asset('guest/images/de.png')}}" alt="lang"/> @lang('Allemand')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom heading sticky-header" id="heading">
            <div class="container">
                <a href="" class="logo">
                    <img src="{{asset('guest/images/logo.svg')}}" alt="realhome">
                </a>
                <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search"
                        aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <div class="get-quote hidden-lg-down">
                    <a href="{{route('property.create')}}">
                        <p>@lang("Soumettre un bien ")</p>
                    </a>
                </div>
                <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu"
                        aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <form action="#" id="bloq-search" class="collapse">
                    <div class="bloq-search">
                        <input type="text" placeholder="Rechercher...">
                        <input type="submit" value="Search">
                    </div>
                </form>


                <nav id="main-menu" class="collapse">
                    <ul>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="{{url('/welcome')}}"
                                   aria-expanded="false">@lang("Accueil")</a>
                            </div>
                            <div class="collapse" id="home">
                                <div class="card card-block">
                                    {{--                                <a class="dropdown-item" href="">@lang("Accueil")</a>--}}
                                    {{--                                <a class="dropdown-item" href="">@lang("Accueil")</a>--}}
                                    {{--                                <a class="dropdown-item" href="">@lang("Accueil")</a>--}}

                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a class="active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false" href="{{url('/welcome')}}">@lang("Accueil")</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/welcome')}}">@lang("Accueil")</a>
                                {{--                            <a class="dropdown-item" href="">@lang("Accueil")</a>--}}
                                {{--                            <a class="dropdown-item" href="">@lang("Accueil")</a>--}}
                            </div>
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="#listing" aria-expanded="false">@lang("Biens")</a>
                            </div>
                            <div class="collapse" id="listing">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="">@lang("Liste des Biens") </a>
                                    <a class="dropdown-item" href=""> @lang("Biens sur la carte")</a>
                                    <a class="dropdown-item" href="">@lang("Details des Biens ")</a>
                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               href="#">@lang("Biens")</a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="">@lang("Liste des Biens") </a>
                                <a class="dropdown-item" href=""> </a>
                                <a class="dropdown-item" href="">@lang("Details des Biens")</a>
                            </div>
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="" aria-expanded="false">@lang("Agents")</a>
                            </div>
                            <div class="collapse" id="services">
                                <div class="card card-block">

                                    <a class="dropdown-item" href="">@lang("Liste des agents")</a>
                                    <a class="dropdown-item" href="">@lang("Details des agents")</a>
                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               href="#">Agents</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">@lang("Liste des agents")</a>
                                <a class="dropdown-item" href="">@lang("Details des agents")</a>
                            </div>
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="#about" aria-expanded="false">Pages</a>
                            </div>
                            <div class="collapse" id="about">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="">@lang('A props de nous')</a>
                                    <a class="dropdown-item" href="">Faq</a>
                                    <a class="dropdown-item" href="">@lang('Nos Tarifs')</a>

                                    {{--                                <a class="dropdown-item" href="{{url('/guest-login')}}">@lang('Se Connecter')</a>--}}
                                    {{--                                <a class="dropdown-item" href="{{url('/guest-register')}}">@lang('S\'enregistrer ')</a>--}}
                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               href="#">Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">@lang('A props de nous')</a>
                                <a class="dropdown-item" href="">Faq</a>
                                <a class="dropdown-item" href="">@lang('Nos Tarifs')</a>
                                {{--                            <a class="dropdown-item" href="">@lang('Se Connecter')</a>--}}
                                {{--                            <a class="dropdown-item" href="">@lang('S\'enregistrer ')</a>--}}
                            </div>
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="#blog" aria-expanded="false">Blog</a>
                            </div>
                            <div class="collapse" id="blog">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="">@lang("Blog")</a>

                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               href="#">Blog</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">@lang("Blog")</a>
                            </div>
                        </li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endif
