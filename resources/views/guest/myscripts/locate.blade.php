@include("guest.myscripts.googlemapskey")
<script>
    function initialize() {
        initAutocomplete();
        initMap();
    }

    var placeSearch, autocomplete;
    var map;

    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('autocomplete'), {types: ['geocode']});
        // Avoid paying for data that you don't need by restricting the set of
        // place fields that are returned to just the address components.
        autocomplete.setFields(['address_component']);

        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    // function geolocate() {
    //     if (navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(function(position) {
    //             var geolocation = {
    //                 lat: position.coords.latitude,
    //                 lng: position.coords.longitude
    //             };
    //             var circle = new google.maps.Circle(
    //                 {center: geolocation, radius: position.coords.accuracy});
    //             autocomplete.setBounds(circle.getBounds());
    //         });
    //     }
    // }
    // locate latitude
    var marker;

    function initMap() {
        // geolocalisation a l'initialisation
        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle(
                        {center: geolocation, radius: position.coords.accuracy});
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: {lat: -0.250868, lng: -7.396322}
        });

        infoWindow = new google.maps.InfoWindow;
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                infoWindow.setPosition(pos);
                infoWindow.setContent('Nous vous avons localisé ici .');
                infoWindow.open(map);
                map.setCenter(pos);
                marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: {lat: position.coords.latitude, lng: position.coords.longitude}
                });
                marker.addListener('dragend', function (event) {
                    toggleBounce();
                });
                // PLACES ADRESS
                var locations = <?php print_r(json_encode($properties)) ?>;
                // console.log(locations.data);
                for (var i = 0; i < locations.data.length; i++) {
                    var contentString = '<div class="row  portfolio-items">' +
                        '<div class="item col-lg-3 col-md-6 col-xs-12 people landscapes">' +
                        '<div class="project-single">' +
                        '                                <div class="project-inner project-head">' +
                        '                                    <div class="project-bottom">' +
                        '                                        <h4><a href="{{route('reserver.create',
                                            ['property_id'=>$property->id,
                                             'property_name'=>$property->name
                                            ])}}">@lang("Voir Bien ")</a><span' +
                        '                                                class="category">' + locations.data[i].propertytype['name'] + '</span></h4>' +
                        '                                    </div>' +
                        '                                 '+
                        '                                </div>' ;

                    // console.log(locations.data[i]);
                    var coords1 = locations.data[i].longitudeposition;
                    var coords2 = locations.data[i].latitudeposition;
                    var latLng = new google.maps.LatLng(coords2, coords1);
                    let marker = new google.maps.Marker({
                        position: latLng,
                        map: map,
                        icon: {
                            url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                        },
                        //label:locations.data[i].locality.charAt(0),
                    });


                    //
                    let infowindow = new google.maps.InfoWindow({
                        content:
                        contentString,
                    });
                    marker.addListener('click', function () {
                        infowindow.open(map, marker);

                    });
                }
                //END PLACES

            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }


</script>
