@extends('guest.layouts.app')
@section('my_css')
    <link rel="stylesheet" href="{{asset('guest/css/jquery-ui.css')}}">
    <!-- FONT AWESOME -->

    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{asset('guest/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/leaflet-gesture-handling.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/leaflet.markercluster.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/leaflet.markercluster.default.css')}}">
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

    <!-- STAR HEADER GOOGLE MAP -->
    <section class="header-map google-maps pull-top map-leaflet-wrapper">
        <div id="map-leaflet"></div>
        <div class="container">
            <div class="filter">
                <div class="filter-toggle hidden-md-up"><i class="fa fa-search"></i>
                    <h6>START SEARCHING</h6></div>
                <form method="get">
                    <div class="filter-item">
                        <label>Property Status</label>
                        <select name="property-status">
                            <option value="">Any Status</option>
                            <option value="for-sale">For Sale</option>
                            <option value="for-rent">For Rent</option>
                            <option value="sold">Sold</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <label>Property Type</label>
                        <select name="property-type">
                            <option value="">Any Type</option>
                            <option value="family-house">Family House</option>
                            <option value="apartment">Apartment</option>
                            <option value="condo">Condo</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <label>Location</label>
                        <select name="property-type">
                            <option value="">Any Location</option>
                            <option value="family-house">New York</option>
                            <option value="apartment">Los Angeles</option>
                            <option value="condo">Chicago</option>
                            <option value="condo">Philadelphia</option>
                            <option value="condo">San Francisco</option>
                        </select>
                    </div>
                    <div class="filter-item mb-5 mt-3">
                        <input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10 mb-3">
                        <div class="slider-range"></div>
                    </div>
                    <div class="filter-item filter-half">
                        <label>Beds</label>
                        <select name="beds" id="property-beds">
                            <option value="">Any</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="filter-item filter-half filter-half-last">
                        <label>Baths</label>
                        <select name="baths" id="property-baths">
                            <option value="">Any</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="clear"></div>
                    <div class="filter-item">
                        <label>Area</label>
                        <input type="number" name="areaMin" class="area-filter filter-1" placeholder="Min"/>
                        <input type="number" name="areaMax" class="area-filter" placeholder="Max"/>
                        <div class="clear"></div>
                    </div>
                    <div class="filter-item">
                        <label class="label-submit">Submit</label>
                        <br/>
                        <input type="submit" class="button alt" value="SEARCH PROPERTY"/>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- END HEADER GOOGLE MAP -->


    <!-- START SECTION RECENTLY PROPERTIES -->
    @include('guest.section.recentlyproperties')
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
    @include('guest.section.top-location')
    <!-- END SECTION TOP LOCATION -->

    <!-- START SECTION BLOG -->
    @include('guest.section.blog')
    <!-- END SECTION BLOG -->

    <!-- START SECTION TESTIMONIALS -->
    @include('guest.section.testimonials')
    <!-- END SECTION TESTIMONIALS -->

    <!-- STAR SECTION PARTNERS -->
    @include('guest.section.partner')
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
    <script src="{{asset('guest/js/leaflet.js')}}"></script>
    <script src="{{asset('guest/js/leaflet-gesture-handling.min.js')}}"></script>
    <script src="{{asset('guest/js/leaflet-providers.js')}}"></script>
    <script src="{{asset('guest/js/leaflet.markercluster.js')}}"></script>
    <script src="{{asset('guest/js/map4.js')}}"></script>


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
    <script src="{{asset('guest/js/script.js')}}"></script>
@endsection
