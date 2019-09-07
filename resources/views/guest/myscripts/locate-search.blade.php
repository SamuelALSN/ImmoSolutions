
<!--GOOGLE MAPS-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfBd0U878Rqo7dw5hywSOuk1MQRJ6oGv0&libraries=places&callback=initialize"
        async defer>

</script>
<script>
    function initialize(){
        initMap();
        initAutocomplete();
    }
    var map;
    function initMap() {
        var bounds = new google.maps.LatLngBounds();
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: new google.maps.LatLng(5.873684289358154, 1.519401631250048),
            mapTypeId: 'roadmap'
        });

        //var infoWindow = new google.maps.InfoWindow;

        var locations = <?php print_r(json_encode($properties)) ?>;
        console.log(locations.data);
        for (var i = 0; i < locations.data.length; i++) {

            var contentString = '<div class="row  portfolio-items"> ' +
                '<div class="item col-lg-3 col-md-6 col-xs-12 people landscapes">' +
                '<div class="project-single">' +
                '                                <div class="project-inner project-head">' +
                '                                    <div class="project-bottom">' +
                '                                        <h4><a href="">@lang("Voir Bien ")</a><span' +
                '                                                class="category">'+locations.data[i].propertytype['name']+'</span></h4>' +
                '                                    </div>' +
                '                                    <div class="button-effect">' +
                '                                        <a href="" class="btn"><i' +
                '                                                class="fa fa-link"></i></a>' +
                '                                        <a href="/storage/images/"'+locations.data[i].images[0].resizedfilename+'" class="btn popup-video popup-youtube"><i' +
                '                                                class="fas fa-video"></i></a>' +
                '                                        <a class="img-poppu btn"' +
                '                                           href="/storage/images/"'+locations.data[i].images[0].resizedfilename+ '"                                           data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>' +
                '                                    </div>' +
                '                                    <div class="homes">' +
                 '                                        <!-- homes img -->' +
                '                                        <a href="" class="homes-img">' +
                '                                            <div class="homes-tag button alt featured">@lang("Tendances")</div>' +
                '                                           ' +
                '                                                <div class="homes-tag button alt sale"></div>' +
                '                                           ' +
                '                                            <div class="homes-price">  @lang("Info") </div>' +
                '                                            <img src="/storage/images/'+locations.data[i].images[0].resizedfilename+'"alt="home-1" class="img-responsive">'+'</a>' +
                '                                    </div>' +
                '                                </div>' +
                '                                <!-- homes content -->' +
               '                                <div class="homes-content">' +
                '                                    <!-- homes address -->' +
                '                                    <h3>'+locations.data[i].name+'</h3>' +
                '                                    <p class="homes-address mb-3">' +
                '                                        <a href="">' +
                '                                            <i class="fa fa-map-marker"></i><span></span>' +
                '                                        </a>' +
                '                                    </p>' +
                '                                    <!-- homes List -->' +
                '                                    <ul class="homes-list clearfix">' +
                '                                        <li>' +
                '                                            <i class="fa fa-bed" aria-hidden="true"></i>' +
                '                                            <span>'+locations.data[i].rooms+'@lang("Chambre")</span>' +
                '                                        </li>' +
                '                                        <li>' +
                '                                            <i class="fa fa-bath" aria-hidden="true"></i>' +
                '                                            <span>'+locations.data[i].bathRooms+' @lang("Douche")</span>' +
                '                                        </li>' +
                '                                        <li>' +
                '                                            <i class="fa fa-object-group" aria-hidden="true"></i>' +
                '                                            <span>'+locations.data[i].area+' m<sup>2</sup> </span>' +
                '                                        </li>' +
                '                                        <li>' +
                '                                            <i class="fas fa-warehouse" aria-hidden="true"></i>' +
                '                                            <span>'+locations.data[i].garages+' @lang("Garage") </span>' +
                '                                        </li>' +
                '                                    </ul>' +
                '                                    <!-- Price -->' +
                '                                  ' +
                '                                        <div class="price-properties">' +
                '                                            <h3 class="title mt-3">' +
                '                                                <a href=""> CFA</a>' +
                '                                            </h3>' +
                '                                            <div class="compare">' +
                '                                                <a href="" title="Compare">' +
                '                                                    <i class="fas fa-exchange-alt"></i>' +
                '                                                </a>' +
                '                                                <a href="" title="Share">' +
                '                                                    <i class="fas fa-share-alt"></i>' +
                '                                                </a>' +
                '                                                <a href="" title="Favorites">' +
                '                                                    <i class="fa fa-heart-o"></i>' +
                '                                                </a>' +
                '                                            </div>' +
                '                                        </div>' + '' +
                '                                        <div class="footer">' +
                '                                            <a href="">' +
                '                                                <i class="fa fa-user"></i>' +
                '                                            </a>' +
                '                                            <span>' +
                '                                   <i class="fa fa-calendar"></i>' +
                '                                        </span>' +
                '                                        </div>' +
                '                                  ' +
                '                                </div>' +
                '                            </div>' +
                '                        </div>' +
                '</div>';

            console.log(locations.data[i]);
            var coords1 = locations.data[i].longitudeposition;
            var coords2 = locations.data[i].latitudeposition;
            // console.log(coords1);
            var latLng = new google.maps.LatLng(coords1,coords2);
            bounds.extend(latLng);
            let marker = new google.maps.Marker({
                position:latLng,
                map: map,
                label:locations.data[i].locality.charAt(0),
            });


            //
            let infowindow = new google.maps.InfoWindow({content:
                contentString,
                maxWidth: 500});
            marker.addListener('click', function () {
                infowindow.open(map, marker);

            });
        }
    }
    /*
    AutoComplete places
     */

    var placeSearch, autocomplete;

    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search predictions to
        // geographical location types.
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
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
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
</script>
<script>
    /*
    rechercher un logement
     */
    window.addEventListener('DOMContentLoaded', (e) => {
        $('#categorie').on('change', function (e) {
            $('#rooms').hide();
            $('#bathromms').hide();
            if ($('#categorie option:selected').text() !== 'Terrain') {
                $('#rooms').fadeIn("slow");
                $('#bathromms').fadeIn("slow");
            }
        });

        $('#rechercher').on('click', function (e) {
            event.preventDefault();
            var token = $("input[name='_token']").val();
            var prix = $('.slider_amount').val().replace("cfa", "");
            fetch('{{url('/Search')}}', {
                headers: {
                    "Content-type": "application/json;charset=utf-8",
                    "Accept": "application/json,text-plain",
                    "X-Requested-Width": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                },
                method: 'POST',
                credentials: "same-origin",
                body: JSON.stringify({
                    adresse: $('#autocomplete').val(),
                    locality: $('#locality').val(),
                    region: $('#administrative_area_level_1').val(),
                    country: $('#country').val(),
                    route: $('#route').val(),
                    street_number: $('#street_number').val(),
                    postal_code: $('#postal_code').val(),
                    status: $('#trans').val(),
                    categorie: $('#categorie').val(),
                    rooms: $('#rooms').val(),
                    bathrooms: $('#bathromms').val(),
                    area: $('#area').val(),
                    price: prix.replace("Prix:", "").split('-'),
                })
            }).then((data) => {
                if (data.ok) {
                    data.json().then(results => {
                        console.log(results)
                    })
                }
            })
        });

    });
</script>
