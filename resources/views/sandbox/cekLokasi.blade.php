<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&libraries=&v=weekly" async></script>    
<script>
    var map, infoWindow;

var alamat_gps = "";

var lat_g, lng_g;
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 3.587176, lng: 98.711230 },
            zoom: 13,
        });
        infoWindow = new google.maps.InfoWindow();
        const locationButton = document.createElement("button");
        locationButton.textContent = "Temukan lokasi saya";
        locationButton.classList.add("custom-map-control-button");
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(
            locationButton
        );
        locationButton.addEventListener("click", () => {
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };
                        const geocoder = new google.maps.Geocoder();
                        geocodeLatLng(geocoder, pos);
                        // console.log(pos);
                        infoWindow.setPosition(pos);
                        infoWindow.setContent("Lokasi perangkat ...");
                        infoWindow.open(map);
                        map.setCenter(pos);
                        map.setZoom(15);
                    },
                    () => {
                        handleLocationError(true, infoWindow, map.getCenter());
                    }
                );
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        });
    }

</script>
</body>
</html>