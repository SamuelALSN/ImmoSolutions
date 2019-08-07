<style>
    #map {
        height: 350px;
        width: 680px;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 40px;
        padding: 20px;
    }
</style>

<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfBd0U878Rqo7dw5hywSOuk1MQRJ6oGv0&callback=initMap">
</script>
<script>
    var marker;
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: {lat:-0.250868, lng:-7.396322}
        });

        infoWindow = new google.maps.InfoWindow;
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                infoWindow.setPosition(pos);
                infoWindow.setContent('Localisation Trouvé.');
                infoWindow.open(map);
                map.setCenter(pos);
                marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: {lat: position.coords.latitude , lng:position.coords.longitude}
                });
                marker.addListener('dragend',function(){
                    alert(marker.getPosition().lat());
                    toggleBounce();
                })


            }, function() {
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
