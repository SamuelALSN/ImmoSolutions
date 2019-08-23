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
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 13px 12px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }
        #target {
            width: 345px;
        }
    </style>

    <!-- STAR HEADER GOOGLE MAP -->

    <section class="header-map google-maps pull-top map-leaflet-wrapper">
        <input id="pac-input" class="controls" type="text" placeholder="Rechercher">
        <div id="map"></div>

{{--        <div class="container">--}}
{{--            <div class="filter">--}}
{{--                <div class="filter-toggle hidden-md-up"><i class="fa fa-search"></i>--}}
{{--                    <h6>@lang("Rechercher Un Bien")</h6></div>--}}
{{--                <form method="get">--}}
{{--                    <div class="filter-item">--}}
{{--                        <label>--}}
{{--                            @lang("Status de la propriété")--}}
{{--                        </label>--}}
{{--                        <select name="property-status">--}}
{{--                            <option value=""></option>--}}
{{--                            <option value="for-sale"></option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="filter-item">--}}
{{--                        <label>@lang("Catégorie du Bien ")</label>--}}
{{--                        <select name="property-type">--}}
{{--                            <option value=""></option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="filter-item">--}}
{{--                        <label>@lang("Location")</label>--}}
{{--                        <select name="property-type">--}}
{{--                            <option value="">Any Location</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="filter-item mb-5 mt-3">--}}
{{--                        <input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10 mb-3">--}}
{{--                        <div class="slider-range"></div>--}}
{{--                    </div>--}}
{{--                    <div class="filter-item filter-half">--}}
{{--                        <label>@lang("Chambre")</label>--}}
{{--                        <select name="beds" id="property-beds">--}}
{{--                            <option value="">Any</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="filter-item filter-half filter-half-last">--}}
{{--                        <label>@lang("Salle de bain")</label>--}}
{{--                        <select name="baths" id="property-baths">--}}
{{--                            <option value="">Any</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="clear"></div>--}}
{{--                    <div class="filter-item">--}}
{{--                        <label>@lang("Surface") m<sup>2</sup></label>--}}
{{--                        <input type="number" name="areaMin" class="area-filter filter-1" placeholder="Min"/>--}}
{{--                        <input type="number" name="areaMax" class="area-filter" placeholder="Max"/>--}}
{{--                        <div class="clear"></div>--}}
{{--                    </div>--}}
{{--                    <div class="filter-item">--}}
{{--                        <label class="label-submit">@lang("Rechercher")</label>--}}
{{--                        <br/>--}}
{{--                        <input type="submit" class="button alt" value="SEARCH PROPERTY"/>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
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
                                            ])}}">@lang("Voir Bien ")</a><span class="category">{{$property->propertytype['name']}}</span></h4>
                                        </div>
                                        <div class="button-effect">
                                            <a href="{{url('/user-properties-detail/'.$property->id)}}" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a class="img-poppu btn" href="{{asset('storage/images/'.$property->images[0]->resizedfilename)}}" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{url('/user-properties-detail/'.$property->id)}}" class="homes-img">
                                                <div class="homes-tag button alt featured">@lang("Tendances")</div>
                                                @foreach($property->typetransactions as $typetrans)
                                                    <div class="homes-tag button alt sale">{{$typetrans->name}}</div>
                                                @endforeach
                                                <div class="homes-price">  @lang("Info") </div>
                                                <img src="{{asset('storage/images/'.$property->images[0]->resizedfilename)}}" alt="home-1" class="img-responsive"
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
    <!--GOOGLE MAPS-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfBd0U878Rqo7dw5hywSOuk1MQRJ6oGv0&libraries=places&callback=initAutocomplete"
            async defer></script>

  <script>

      function initAutocomplete() {
          var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -33.8688, lng: 151.2195},
              zoom: 13,
              mapTypeId: 'roadmap'
          });

          // Create the search box and link it to the UI element.
          var input = document.getElementById('pac-input');
          var searchBox = new google.maps.places.SearchBox(input);
          map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

          // Bias the SearchBox results towards current map's viewport.
          map.addListener('bounds_changed', function() {
              searchBox.setBounds(map.getBounds());
          });

          var markers = [];
          // Listen for the event fired when the user selects a prediction and retrieve
          // more details for that place.
          searchBox.addListener('places_changed', function() {
              var places = searchBox.getPlaces();

              if (places.length == 0) {
                  return;
              }

              // Clear out the old markers.
              markers.forEach(function(marker) {
                  marker.setMap(null);
              });
              markers = [];

              // For each place, get the icon, name and location.
              var bounds = new google.maps.LatLngBounds();
              places.forEach(function(place) {
                  if (!place.geometry) {
                      console.log("Returned place contains no geometry");
                      return;
                  }
                  var icon = {
                      url: place.icon,
                      size: new google.maps.Size(71, 71),
                      origin: new google.maps.Point(0, 0),
                      anchor: new google.maps.Point(17, 34),
                      scaledSize: new google.maps.Size(25, 25)
                  };

                  // Create a marker for each place.
                  markers.push(new google.maps.Marker({
                      map: map,
                      icon: icon,
                      title: place.name,
                      position: place.geometry.location
                  }));

                  if (place.geometry.viewport) {
                      // Only geocodes have viewport.
                      bounds.union(place.geometry.viewport);
                  } else {
                      bounds.extend(place.geometry.location);
                  }
              });
              map.fitBounds(bounds);
          });
      }
  </script>
@endsection
