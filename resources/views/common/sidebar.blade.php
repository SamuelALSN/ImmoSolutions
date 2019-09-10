<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/home')}}">
                <i class="nav-icon icon-speedometer"></i> @lang("Tableau de Bord")

            </a>
        </li>
        <li class="nav-title">@lang("Biens ")</li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/property')}}">
                <i class="nav-icon icon-drop"></i> @lang("Récents")
                <span class="badge badge-primary">NEW</span>
            </a>


        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/property-valid')}}">
                <i class="nav-icon icon-pencil"></i>@lang("Biens attribués")
                <span class="badge badge-warning">NEW</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/property-published')}}">
                <i class="nav-icon icon-pencil"></i>@lang("Publiés")
                <span class="badge badge-success">NEW</span>
            </a>
        </li>

        <li class="nav-title">@lang("Réservations")</li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="">
                <i class="nav-icon icon-puzzle"></i> @lang("Toutes les réservations")</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/reserver')}}">
                        <i class="nav-icon icon-puzzle"></i>@lang("En cours")</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="nav-icon icon-puzzle"></i> @lang("Conclues")</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Carousel</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Collapse</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Forms</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Jumbotron</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> List group</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Navs</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Pagination</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Popovers</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Progress</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Scrollspy</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Switches</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Tables</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Tabs</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-puzzle"></i> Tooltips</a>--}}
{{--                </li>--}}
            </ul>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-cursor"></i> @lang("Promotions")</a>
            <ul class="nav-dropdown-items">
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-cursor"></i> Buttons</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-cursor"></i> Buttons Group</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-cursor"></i> Dropdowns</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-cursor"></i> Brand Buttons</a>--}}
{{--                </li>--}}
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/charts')}}">
                <i class="nav-icon icon-pie-chart"></i> @lang("Statistiques")</a>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-star"></i> @lang("Statistques Géographiques")</a>
{{--            <ul class="nav-dropdown-items">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-star"></i> CoreUI Icons--}}
{{--                        <span class="badge badge-success">NEW</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-star"></i> Flags</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-star"></i> Font Awesome--}}
{{--                        <span class="badge badge-secondary">4.7</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="nav-icon icon-star"></i> Simple Line Icons</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-bell"></i> Notifications  <span class="badge badge-primary">NEW</span></a>

            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="nav-icon icon-bell"></i> @lang("Alerte")</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="nav-icon icon-bell"></i>@lang("Messages")</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="nav-icon icon-bell"></i> Modals</a>
                </li>
            </ul>
        </li>
        <li class="divider"></li>
        <li class="nav-title">Extras</li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-star"></i> Pages</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="" target="_top">
                        <i class="nav-icon icon-star"></i> Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" target="_top">
                        <i class="nav-icon icon-star"></i> Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" target="_top">
                        <i class="nav-icon icon-star"></i> Error 404</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" target="_top">
                        <i class="nav-icon icon-star"></i> Error 500</a>
                </li>
            </ul>
        </li>
        <li class="nav-item mt-auto">
            <a class="nav-link nav-link-success" href="{{url('/user')}}" target="_top">
                <i class="nav-icon icon-cloud-download"></i> @lang("Gestion des Utilisateurs ")</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link-danger" href="" target="_top">
                <i class="nav-icon icon-layers"></i> @lang("Gestion des Sessions")
                <strong></strong>
            </a>
        </li>
    </ul>
</nav>
