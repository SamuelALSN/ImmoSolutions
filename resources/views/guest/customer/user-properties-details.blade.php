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
    <link rel="stylesheet" href="{{asset('guest/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="{{asset('guest/fonts.googleapis.com/css.css')}}" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('guest/css/font-awesome.min.css')}}">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{asset('guest/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/leaflet-gesture-handling.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/leaflet.markercluster.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/leaflet.markercluster.default.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('guest/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/owl.carousel.min.css')}}">
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
            <h1>Property Details</h1>
            <h2><a href="">   @lang("Accueil") </a> &nbsp;/&nbsp; @lang("Détails du Bien ")</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION PROPERTIES LISTING -->
<section class="blog details">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">
                <!-- Block heading Start-->
                <div class="block-heading details">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-2">
                            <h4>
                            <span class="heading-icon">
                                <i class="fa fa-map-marker"></i>
                                </span>
                                <span class="hidden-sm-down">{{$property->adresse}}</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-10 cod-pad">
                            @foreach ($property->typetransactions as $prop)
                            <div class="sorting-options">
                                <h5><span>@lang("Prix"):</span>{{$prop->pivot->ammount}}</h5>

                                @endforeach
                                <h6 class="type"><span> @lang("Type de Baille"):</span> {{$property->typetransactions[0]->name}}</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Block heading end -->
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="{{asset('storage/images/'.$property->images['0']->resizedfilename)}}" alt="First slide">
                                </div>
                                @foreach($property->images as $img)
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="{{asset('storage/images/'.$img->resizedfilename)}}" alt="Second slide">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="blog-info details">
                            <!-- cars content -->
                            <div class="homes-content details-2 mb-5">
                                <!-- cars List -->
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span>{{$property->rooms}} @lang("Chambre")</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span>{{$property->bathRooms}} @lang("Douche")</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span>{{$property->area}} m<sup>2</sup></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                        <span>{{$property->garages}} @lang("Garages")</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-columns" aria-hidden="true"></i>
                                        <span>@lang("Cusine")</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                        <span>@lang("Balcon")</span>
                                    </li>
                                </ul>
                            </div>
                            <h5 class="mb-4">@lang("Description")</h5>
                            <p class="mb-3">
                               {{$property->description}}   </p>

                        </div>
                    </div>
                </div>
                <!-- cars content -->
                <div class="homes-content details mb-5">
                    <!-- title -->
                    <h5 class="mb-4">@lang("Caracteristiques")</h5>
                    <!-- cars List -->
                    <ul class="homes-list clearfix">
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>{{$property->rooms}} Chambre</span>
                        </li>
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>{{$property->bathRooms}} Douche</span>
                        </li>

                    </ul>
                </div>
                <div class="property-location mb-5">
                    <h5>@lang("Localisation")</h5>
{{--                    <div class="divider-fade"></div>--}}
                    <div id="map" style=" height: 350px; width: 750px;"></div>
{{--                    <div id="map" class="contact-map"></div>--}}
                </div>
                <!-- START SECTION ASSIGNED AGENTS -->
                <section class="team assigned">
                    <div class="container">
                        <h5>@lang("Agent Assigné")</h5>
                        <div class="row team-all">
                            <div class="col-lg-4 col-md-6 team-pro hover-effect">
                                <div class="team-wrap">
                                    <div class="team-img">
                                        <img src="{{asset('guest/images/team/t-5.jpg')}}" alt="" />
                                    </div>
                                    <div class="team-content">
{{--                                        @foreach($property->Assignment as $assign)--}}
                                        <div class="team-info">
                                            @foreach($property->Assignment as $assign)
                                            <h3>
                                                {{$assign->name}}
                                                </h3>
                                            @endforeach
                                            <p>@lang("Contacter")</p>
                                            <div class="team-socials">
                                                <ul>
                                                    <li>
                                                        <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                        <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span><a href="#">@lang("Voir Profile")</a></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END SECTION ASSIGNED AGENTS -->
            </div>
            <aside class="col-lg-3 col-md-12 car">
                <div class="widget">
                    <div class="section-heading">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-home"></i>
                            </div>
{{--                            <div class="media-body">--}}
{{--                                <h5>Search Properties</h5>--}}
{{--                                <div class="border"></div>--}}
{{--                                <p>Search your Properties</p>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <!-- Search Fields -->
{{--                    <div class="main-search-field">--}}
{{--                        <h5 class="title">Filter</h5>--}}
{{--                        <form method="GET">--}}
{{--                            <div class="at-col-default-mar">--}}
{{--                                <select>--}}
{{--                                    <option value="0" selected>Location</option>--}}
{{--                                    <option value="1">New York</option>--}}
{{--                                    <option value="2">Los Angeles</option>--}}
{{--                                    <option value="3">Chicago</option>--}}
{{--                                    <option value="4">Philadelphia</option>--}}
{{--                                    <option value="5">San Francisco</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="at-col-default-mar">--}}
{{--                                <select class="div-toggle" data-target=".my-info-1">--}}
{{--                                    <option value="0" data-show=".acitveon" selected>Property Status</option>--}}
{{--                                    <option value="1" data-show=".sale">For Sale</option>--}}
{{--                                    <option value="2" data-show=".rent">For Rent</option>--}}
{{--                                    <option value="3" data-show=".rent">Sold</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="at-col-default-mar">--}}
{{--                                <div class="at-col-default-mar">--}}
{{--                                    <select>--}}
{{--                                        <option value="0" selected>Property Type</option>--}}
{{--                                        <option value="1">Family House</option>--}}
{{--                                        <option value="2">Apartment</option>--}}
{{--                                        <option value="3">Condo</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="at-col-default-mar">--}}
{{--                                <select>--}}
{{--                                    <option value="0" selected>Beds</option>--}}
{{--                                    <option value="1">1</option>--}}
{{--                                    <option value="2">2</option>--}}
{{--                                    <option value="3">3</option>--}}
{{--                                    <option value="4">4</option>--}}
{{--                                    <option value="5">5</option>--}}
{{--                                    <option value="6">6</option>--}}
{{--                                    <option value="7">7</option>--}}
{{--                                    <option value="8">8</option>--}}
{{--                                    <option value="9">9</option>--}}
{{--                                    <option value="10">10</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="at-col-default-mar">--}}
{{--                                <select>--}}
{{--                                    <option value="0" selected>Baths</option>--}}
{{--                                    <option value="1">1</option>--}}
{{--                                    <option value="2">2</option>--}}
{{--                                    <option value="3">3</option>--}}
{{--                                    <option value="4">4</option>--}}
{{--                                    <option value="5">5</option>--}}
{{--                                    <option value="6">6</option>--}}
{{--                                    <option value="7">7</option>--}}
{{--                                    <option value="8">8</option>--}}
{{--                                    <option value="9">9</option>--}}
{{--                                    <option value="10">10</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 no-pds">--}}
{{--                                <div class="at-col-default-mar">--}}
{{--                                    <input class="at-input" type="text" name="min-area" placeholder="Squre Fit Min">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12 no-pds my-4">--}}
{{--                                <div class="at-col-default-mar">--}}
{{--                                    <input class="at-input" type="text" name="max-area" placeholder="Squre Fit Max">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                    <!-- Price Fields -->
{{--                    <div class="main-search-field-2">--}}
{{--                        <div class="range-slider">--}}
{{--                            <input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10">--}}
{{--                            <div class="slider-range"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-lg-12 no-pds">
                        <div class="at-col-default-mar">
                            <button class="btn btn-default hvr-bounce-to-right" type="submit">@lang("Modifier les Informations")</button>
                        </div>
                    </div>
                    <div class="recent-post py-5">
                        <h5 class="font-weight-bold mb-4">@lang("Biens Similaire")</h5>
                        <div class="recent-main">
                            <div class="recent-img">
                                <a href=""><img src="{{asset('guest/images/feature-properties/fp-1.jpg')}}" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href=""><h6>Maison 1</h6></a>
                                <p>CFA 230,000</p>
                            </div>
                        </div>
                        <div class="recent-main my-4">
                            <div class="recent-img">
                                <a href=""><img src="{{asset('guest/images/feature-properties/fp-2.jpg')}}" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href=""><h6>Maison 2</h6></a>
                                <p>CFA 230,000</p>
                            </div>
                        </div>
                        <div class="recent-main">
                            <div class="recent-img">
                                <a href=""><img src="{{asset('guest/images/feature-properties/fp-3.jpg')}}" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href=""><h6>Maison 3</h6></a>
                                <p>CFA 230,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <h5 class="font-weight-bold mb-4">@lang("Caractéristiques les Plus Demandés")</h5>
                        <div class="tags">
                            <span><a href="#" class="btn btn-outline-primary">@lang("")</a></span>
                            <span><a href="#" class="btn btn-outline-primary">@lang("")</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="properties-details.html#" class="btn btn-outline-primary">@lang("")</a></span>
                            <span><a href="properties-details.html#" class="btn btn-outline-primary">@lang("")</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="properties-details.html#" class="btn btn-outline-primary">@lang("")</a></span>
                            <span><a href="properties-details.html#" class="btn btn-outline-primary">@lang("")</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="properties-details.html#" class="btn btn-outline-primary">@lang("")</a></span>
                            <span><a href="properties-details.html#" class="btn btn-outline-primary">@lang("")</a></span>
                        </div>
                        <div class="tags no-mb">
                            <span><a href="properties-details.html#" class="btn btn-outline-primary">@lang("")</a></span>
                            <span><a href="properties-details.html#" class="btn btn-outline-primary">@lang("")</a></span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->

<!-- START SECTION NEWSLETTER -->
@include('guest.section.newsletter')
<!-- END SECTION NEWSLETTER -->

<!-- START FOOTER -->
@include('guest.common.footer')
<!-- END FOOTER -->
<!--Style Switcher-->
<div class="color-switcher" id="choose_color"> <a href="properties-details.html#." class="picker_close"><i class="fa fa-cog fa-spin fa-2x" ></i></a>
    <div class="theme-colours">
        <p class="font-italic">@lang("Personnaliser les couleurs")</p>
        <ul>
            <li>
                <a href="properties-details.html#." class="blue" id="blue"></a>
            </li>
            <li>
                <a href="properties-details.html#." class="pink" id="pink"></a>
            </li>
            <li>
                <a href="properties-details.html#." class="orange" id="orange"></a>
            </li>
            <li>
                <a href="properties-details.html#." class="purple" id="purple"></a>
            </li>
            <li>
                <a href="properties-details.html#." class="green" id="green"></a>
            </li>
            <li>
                <a href="properties-details.html#." class="red" id="red"></a>
            </li>
            <li>
                <a href="properties-details.html#." class="cyan" id="cyan"></a>
            </li>
            <li>
                <a href="properties-details.html#." class="sky-blue" id="sky-blue"></a>
            </li>
            <li>
                <a href="properties-details.html#." class="gray" id="gray"></a>
            </li>
            <li>
                <a href="properties-details.html#." class="brown" id="brown"></a>
            </li>
        </ul>
    </div>
</div>


<!-- ARCHIVES JS -->
<script src="{{asset('guest/js/jquery.min.js')}}"></script>
<script src="{{asset('guest/js/jquery-ui.js')}}"></script>
<script src="{{asset('guest/js/range-slider.js')}}"></script>
<script src="{{asset('guest/js/tether.min.js')}}"></script>
<script src="{{asset('guest/js/bootstrap.min.js')}}"></script>
<script src="{{asset('guest/js/smooth-scroll.min.j')}}s"></script>
<script src="{{asset('guest/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('guest/js/popup.js')}}"></script>
<script src="{{asset('guest/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('guest/js/color-switcher.js')}}"></script>
<script src="{{asset('guest/js/inner.js')}}"></script>
@include("guest.myscripts.locate")
</body>

</html>
