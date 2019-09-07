@extends('guest.layouts.app')
@section('my_css')
    <link rel="stylesheet" href="{{asset('guest/css/jquery-ui.css')}}">
    <!-- FONT AWESOME -->

    <!-- LEAFLET MAP -->
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{asset('guest/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('guest/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('guest/revolution/css/navigation.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('guest/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/owl.carousel.min.css')}}">
@endsection
@section('content')
    <style>
        /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
    @include('guest.section.slider');
    {{--    <!-- STAR HEADER GOOGLE MAP -->--}}

    {{--    <section class="">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <div id="map"></div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    {{--    <!-- END HEADER GOOGLE MAP -->--}}

    {{--    <section class="main-search-field">--}}
    {{--        <form action="" method="POST">--}}
    {{--            @csrf--}}
    {{--            <div class="container">--}}
    {{--                <h3>@lang("Trouvez votre Maison de rève")</h3>--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="at-col-default-mar">--}}
    {{--                            <div id="locationField">--}}
    {{--                                <input id="autocomplete"--}}
    {{--                                       placeholder="Enter your address"--}}
    {{--                                       onFocus="geolocate()"--}}
    {{--                                       type="text"/>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div id="address" hidden>--}}
    {{--                        <input class="" id="street_number" disabled="true" placeholder="Numero Rue" hidden/>--}}
    {{--                        <input class="" id="route" disabled="true" placeholder="rue" hidden/>--}}
    {{--                        <input class="field" id="locality" disabled="true" hidden=""/>--}}
    {{--                        <input class="field" id="administrative_area_level_1" disabled="true" hidden/>--}}
    {{--                        <input class="field" id="postal_code" disabled="true" hidden/>--}}
    {{--                        <input class="" id="country" disabled="true" hidden/>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="at-col-default-mar">--}}
    {{--                            <select id="trans" class="div-toggle" data-target=".my-info-1">--}}
    {{--                                <option value="0" data-show=".acitveon"--}}
    {{--                                        selected="">@lang("Status de la propriété")</option>--}}
    {{--                                @foreach($typetrans as $status)--}}
    {{--                                    <option value="{{$status->id}}" data-show=".sale">{{$status->name}}</option>--}}
    {{--                                @endforeach--}}
    {{--                            </select>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="at-col-default-mar">--}}
    {{--                            <div class="at-col-default-mar">--}}
    {{--                                <select id="categorie">--}}
    {{--                                    <option value="0" selected="">@lang('Catégorie du Bien')</option>--}}
    {{--                                    @foreach($typebiens as $categ)--}}
    {{--                                        <option value="{{$categ->id}}">{{$categ->name}}</option>--}}
    {{--                                    @endforeach--}}
    {{--                                </select>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="at-col-default-mar no-mb">--}}
    {{--                            <input type="number" id="rooms" min="0" max="" placeholder="@lang("Nombre de Chambre")">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="at-col-default-mar no-mb">--}}
    {{--                            <input id="bathromms" type="number" min="0" max=""--}}
    {{--                                   placeholder=" @lang("Nombre de Salle d'eau")">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 no-pds">--}}
    {{--                        <div class="at-col-default-mar no-mb">--}}
    {{--                            <input id="area" class="at-input" type="number" name="min-area"--}}
    {{--                                   placeholder="@lang("superficie m²")">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6 b-search__main-form label">--}}
    {{--                        <input type="text" disabled="" class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10">--}}
    {{--                        <div--}}
    {{--                            class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">--}}
    {{--                            <div class="ui-slider-range ui-corner-all ui-widget-header"--}}
    {{--                                 style="left: 28.2051%; width: 35.8974%;"></div>--}}
    {{--                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"--}}
    {{--                                  style="left: 28.2051%;"></span><span tabindex="0"--}}
    {{--                                                                       class="ui-slider-handle ui-corner-all ui-state-default"--}}
    {{--                                                                       style="left: 64.1026%;"></span></div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="at-col-default-mar no-mb">--}}
    {{--                            <button id="rechercher" class="btn btn-default hvr-bounce-to-right"--}}
    {{--                                    type="submit">@lang("Rechercher")</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </form>--}}
    {{--    </section>--}}
    <!-- START SECTION SEARCH AREA -->
    <section class="main-search-field">
        <form action="" method="POST">
            @csrf
            <div class="container">
                <h3>@lang("Trouvez votre Maison de rève")</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="at-col-default-mar">
                            <div id="locationField">
                                <input id="autocomplete"
                                       placeholder="Enter your address"
                                       onFocus="geolocate()"
                                       type="text"/>
                            </div>
                        </div>
                    </div>
                    <div id="address" hidden>
                        <input class="" id="street_number" disabled="true" placeholder="Numero Rue" hidden/>
                        <input class="" id="route" disabled="true" placeholder="rue" hidden/>
                        <input class="field" id="locality" disabled="true" hidden=""/>
                        <input class="field" id="administrative_area_level_1" disabled="true" hidden/>
                        <input class="field" id="postal_code" disabled="true" hidden/>
                        <input class="" id="country" disabled="true" hidden/>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="at-col-default-mar">
                            <select id="trans" class="div-toggle" data-target=".my-info-1">
                                <option value="0" data-show=".acitveon"
                                        selected="">@lang("Status de la propriété")</option>
                                @foreach($typetrans as $status)
                                    <option value="{{$status->id}}" data-show=".sale">{{$status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="at-col-default-mar">
                            <div class="at-col-default-mar">
                                <select id="categorie">
                                    <option value="0" selected="">@lang('Catégorie du Bien')</option>
                                    @foreach($typebiens as $categ)
                                        <option value="{{$categ->id}}">{{$categ->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="at-col-default-mar no-mb">
                            <input type="number" id="rooms" min="0" max="" placeholder="@lang("Nombre de Chambre")">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="at-col-default-mar no-mb">
                            <input id="bathromms" type="number" min="0" max=""
                                   placeholder=" @lang("Nombre de Salle d'eau")">
                        </div>
                    </div>
                    <div class="col-lg-3 no-pds">
                        <div class="at-col-default-mar no-mb">
                            <input id="area" class="at-input" type="number" name="min-area"
                                   placeholder="@lang("superficie m²")">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 b-search__main-form label">
                        <input type="text" disabled="" class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10">
                        <div
                            class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"
                                 style="left: 28.2051%; width: 35.8974%;"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                  style="left: 28.2051%;"></span><span tabindex="0"
                                                                       class="ui-slider-handle ui-corner-all ui-state-default"
                                                                       style="left: 64.1026%;"></span></div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="at-col-default-mar no-mb">
                            <button id="rechercher" class="btn btn-default hvr-bounce-to-right"
                                    type="submit">@lang("Rechercher")</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>
    <!-- END SECTION SEARCH AREA -->
    <!-- STAR HEADER GOOGLE MAP -->

    <section class="">
        <div class="container-fluid">
            <div id="map"></div>
        </div>
    </section>
    <!-- END HEADER GOOGLE MAP -->
    <!-- START SECTION RECENTLY PROPERTIES -->
    {{--    @include('guest.section.recentlyproperties')--}}
    <section class="recently portfolio">
        <div class="container-fluid">
            <!-- Block heading Start-->
            <div class="section-title">
                <h3>@lang("Biens")</h3>
                <h2>@lang("Récents ")</h2>
            </div>

            <div class="row  portfolio-items">
                @foreach($properties as $property)
                    @foreach($property->assignment as $assign)
                        <div class="item col-lg-3 col-md-6 col-xs-12 people landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="project-bottom">
                                        <h4><a href="{{route('reserver.create',
                                            ['property_id'=>$property->id,
                                             'property_name'=>$property->name
                                            ])}}">@lang("Voir Bien ")</a><span
                                                class="category">{{$property->propertytype['name']}}</span></h4>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{url('/user-properties-detail/'.$property->id)}}" class="btn"><i
                                                class="fa fa-link"></i></a>
                                        <a href="" class="btn popup-video popup-youtube"><i
                                                class="fas fa-video"></i></a>
                                        <a class="img-poppu btn"
                                           href="{{asset('storage/images/'.$property->images[0]->resizedfilename)}}"
                                           data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                                    </div>
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{url('/user-properties-detail/'.$property->id)}}" class="homes-img">
                                            <div class="homes-tag button alt featured">@lang("Tendances")</div>
                                            @foreach($property->typetransactions as $typetrans)
                                                <div class="homes-tag button alt sale">{{$typetrans->name}}</div>
                                            @endforeach
                                            <div class="homes-price">  @lang("Info") </div>
                                            <img
                                                src="{{asset('storage/images/'.$property->images[0]->resizedfilename)}}"
                                                alt="home-1" class="img-responsive"
                                                height="750" width="1000">
                                        </a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3>{{$property->name}}</h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{url('/user-properties-detail/'.$property->id)}}">
                                            <i class="fa fa-map-marker"></i><span>{{$property->adresse}}</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>{{$property->rooms}} @lang("Chambre")</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span> {{$property->bathRooms}} @lang("Douche")</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>{{$property->area}} m<sup>2</sup> </span>
                                        </li>
                                        <li>
                                            <i class="fas fa-warehouse" aria-hidden="true"></i>
                                            <span> {{$property->garages}} @lang("Garage") </span>
                                        </li>
                                    </ul>
                                    <!-- Price -->
                                    @foreach($property->typetransactions as $typetrans)
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="">{{$typetrans->pivot->ammount}} CFA</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="footer">
                                            <a href="">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <span>
                                   <i class="fa fa-calendar"></i> {{$typetrans->pivot->created_at}}
                                        </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    @endforeach

                @endforeach

            </div>

            <nav aria-label="..." class="pt-3">
                <ul class="pagination">
                    {{$properties->links()}}
                </ul>
            </nav>
        </div>
    </section>
    <!-- END SECTION RECENTLY PROPERTIES -->

    <!-- STAR SECTION WELCOME -->
    @include('guest.section.welcome')
    <!-- END SECTION WELCOME -->

    <!-- START SECTION SERVICES -->
    @include('guest.section.services')
    <!-- END SECTION SERVICES -->

    <!-- START SECTION FEATURED PROPERTIES -->
    @include('guest.section.featuredproperties')
    <!-- END SECTION FEATURED PROPERTIES -->

    <!-- START SECTION POPULAR PLACES -->
    @include('guest.section.popular-places')
    <!-- END SECTION POPULAR PLACES -->

    <!-- START SECTION AGENTS -->
    @include('guest.section.agents')
    <!-- END SECTION AGENTS -->

    <!-- START SECTION TOP LOCATION -->
{{--    @include('guest.section.top-location')--}}
    <!-- END SECTION TOP LOCATION -->

    <!-- START SECTION BLOG -->
{{--    @include('guest.section.blog')--}}
    <!-- END SECTION BLOG -->

    <!-- START SECTION TESTIMONIALS -->
{{--    @include('guest.section.testimonials')--}}
    <!-- END SECTION TESTIMONIALS -->

    <!-- STAR SECTION PARTNERS -->
{{--    @include('guest.section.partner')--}}
    <!-- END SECTION PARTNERS -->

    <!-- START SECTION COUNTER UP -->
    @include('guest.section.conter-up')
    <!-- END SECTION COUNTER UP -->

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
@endsection

@section('my_scripts')
    <!-- ARCHIVES JS -->

    <script src="{{asset('guest/js/jquery-ui.js')}}"></script>

    <script src="{{asset('guest/js/moment.js')}}"></script>
    <script src="{{asset('guest/js/transition.min.js')}}"></script>

    <script src="{{asset('guest/js/fitvids.js')}}"></script>
    <script src="{{asset('guest/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('guest/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('guest/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('guest/js/isotope.pkgd.min.js')}}"></script>

    <script src="{{asset('guest/js/lightcase.js')}}"></script>
    <script src="{{asset('guest/js/owl.carousel.js')}}"></script>
    <script src="{{asset('guest/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('guest/js/ajaxchimp.min.js')}}"></script>
    <script src="{{asset('guest/js/newsletter.js')}}"></script>
    <script src="{{asset('guest/js/jquery.form.js')}}"></script>
    <script src="{{asset('guest/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('guest/js/forms-2.js')}}"></script>


    <!-- Slider Revolution scripts -->
    <script src="{{asset('guest/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('guest/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <!-- MAIN JS -->
    <script>
        var tpj = jQuery;
        var revapi34;
        if (tpj("#rev_slider_home").revolution === undefined) {
            revslider_showDoubleJqueryError("#rev_slider_home");
        } else {
            revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType: "standard",
                jsFileLocation: "js/revolution-slider/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "metis",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: '<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [600, 550, 500, 450],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }

    </script>
    <script src="{{asset('guest/js/script.js')}}"></script>
    @include('guest.myscripts.locate')

@endsection
