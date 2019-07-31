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
                        <li><a href="{{url('/guest-login')}}"><i class="fa fa-user"></i> @lang('Se connecter')</a></li>
                        <li><a href="{{url('/guest-register')}}"><i class="fa fa-sign-in"></i>@lang('S\'enregistrer')</a></li>
                    </ul>
                </div>
                <div class="social-icons-header">
                    <div class="social-icons">
                        <a href="index.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="index.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="index.html#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
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
            <a href="index.html" class="logo">
                <img src="{{asset('guest/images/logo.svg')}}" alt="realhome">
            </a>
            <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            <div class="get-quote hidden-lg-down">
                <a href="{{url('/submit')}}">
                    <p>Submit Property</p>
                </a>
            </div>
            <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <form action="index.html#" id="bloq-search" class="collapse">
                <div class="bloq-search">
                    <input type="text" placeholder="search...">
                    <input type="submit" value="Search">
                </div>
            </form>

            <nav id="main-menu" class="collapse">
                <ul>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="index.html#home" aria-expanded="false">Home</a>
                        </div>
                        <div class="collapse" id="home">
                            <div class="card card-block">
                                <a class="dropdown-item" href="index.html">Home Map</a>
                                <a class="dropdown-item" href="index-2.html">Home Image</a>
                                <a class="dropdown-item" href="index-3.html">Home Video</a>

                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="index.html#">Home</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.html">Home Map</a>
                            <a class="dropdown-item" href="index-2.html">Home Image</a>
                            <a class="dropdown-item" href="index-3.html">Home Video</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="index.html#listing" aria-expanded="false">Properties</a>
                        </div>
                        <div class="collapse" id="listing">
                            <div class="card card-block">
                                <a class="dropdown-item" href="properties-list-right-sidebar.html">List Right Sidebar </a>
                                <a class="dropdown-item" href="properties-full-grid.html">Full Grid</a>
                                <a class="dropdown-item" href="properties-grid-right-sidebar.html">Grid Right Sidebar</a>
                                <a class="dropdown-item" href="properties-half-map.html">Half Map</a>
                                <a class="dropdown-item" href="properties-details.html">Property Details</a>
                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="index.html#">Properties</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="properties-list-right-sidebar.html">List Right Sidebar </a>
                            <a class="dropdown-item" href="properties-full-grid.html">Full Grid</a>
                            <a class="dropdown-item" href="properties-grid-right-sidebar.html">Grid Right Sidebar</a>
                            <a class="dropdown-item" href="properties-half-map.html">Half Map</a>

                            <a class="dropdown-item" href="properties-details.html">Property Details</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="index.html#services" aria-expanded="false">Agents</a>
                        </div>
                        <div class="collapse" id="services">
                            <div class="card card-block">
                                <a class="dropdown-item" href="agents-listing-grid.html">Agents Listing Grid</a>
                                <a class="dropdown-item" href="agents-listing-row.html">Agents Listing Row</a>
                                <a class="dropdown-item" href="agent-details.html">Agent Details</a>
                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="index.html#">Agents</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="agents-listing-grid.html">Agents Listing Grid</a>
                            <a class="dropdown-item" href="agents-listing-row.html">Agents Listing Row</a>
                            <a class="dropdown-item" href="agent-details.html">Agent Details</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="index.html#about" aria-expanded="false">Pages</a>
                        </div>
                        <div class="collapse" id="about">
                            <div class="card card-block">
                                <a class="dropdown-item" href="about.html">@lang('A props de nous')</a>
                                <a class="dropdown-item" href="faq.html">Faq</a>
                                <a class="dropdown-item" href="pricing-table.html">@lang('Nos Tarifs')</a>

                                <a class="dropdown-item" href="{{url('/guest-login')}}">@lang('Se Connecter')</a>
                                <a class="dropdown-item" href="{{url('/guest-register')}}">@lang('S\'enregistrer ')</a>
                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="index.html#">Pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about.html">@lang('A props de nous')</a>
                            <a class="dropdown-item" href="faq.html">Faq</a>
                            <a class="dropdown-item" href="pricing-table.html">@lang('Nos Tarifs')</a>
                            <a class="dropdown-item" href="login.html">@lang('Se Connecter')/a>
                            <a class="dropdown-item" href="register.html">@lang('S\'enregistrer ')</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="index.html#blog" aria-expanded="false">Blog</a>
                        </div>
                        <div class="collapse" id="blog">
                            <div class="card card-block">
                                <a class="dropdown-item" href="blog.html">Blog Default</a>
                                <a class="dropdown-item" href="blog-rightsidebar.html">Blog Right Sidebar</a>
                                <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="index.html#">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog.html">Blog Default</a>
                            <a class="dropdown-item" href="blog-rightsidebar.html">Blog Right Sidebar</a>
                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                        </div>
                    </li>
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
