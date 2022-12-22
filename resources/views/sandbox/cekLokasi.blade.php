<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="map" style="width: 600px;height:600px;"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&v=weekly" defer></script>
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

    function geocodeLatLng(geocoder, pos) {
        // const input = document.getElementById("latlng").value;
        // const latlngStr = input.split(",", 2);
        const latlng = {
            lat: parseFloat(pos['lat']),
            lng: parseFloat(pos['lng']),
        };
        lat_g = parseFloat(pos['lat']);
        lng_g = parseFloat(pos['lng']);
        geocoder.geocode({ location: latlng }, (results, status) => {
            if (status === "OK") {
                if (results[0]) {
                    // console.log(results[0].formatted_address);
                    document.querySelector("#lokasiAlamat").innerHTML = results[0].formatted_address;
                    alamat_gps = results[0].formatted_address;
                    localStorage.setItem("alamat_gps", alamat_gps);
                    // infowindow.setContent(results[0].formatted_address);
                } else {
                    window.alert("No results found");
                }
            } else {
                window.alert("Geocoder failed due to: " + status);
            }
        });
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
            browserHasGeolocation
                ? "Error: The Geolocation service failed."
                : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
    }

    function nextAtc()
    {
        let alamatManual = document.querySelector("#txtAlamatManual").value;
        let alamatGps = alamat_gps;
        
        if(alamatManual === ''){
            ziTo('warning', 'Kesalahan input', 'Pastikan alamat gps & alamat manual anda telah terisi !!!');
        }else{
            console.log(lat_g);
            console.log(lng_g);
            localStorage.setItem("alamat_manual", alamatManual);
            localStorage.setItem("lat_g", lat_g);
            localStorage.setItem("lng_g", lng_g);
            
            let jalur_id = localStorage.getItem("jalur_pendaftaran");
            if(jalur_id === '1'){
                $("#mainApp").load("step-preview-afirmasi.html");
            }else if(jalur_id === '2'){
                $("#mainApp").load("step-preview-mutasi.html");
            }else if(jalur_id === '3'){
                $("#mainApp").load("step-preview-prestasi-akademik.html");
            }else if(jalur_id === '4'){
                $("#mainApp").load("step-preview-prestasi-non-akademik.html");
            }else{
                $("#mainApp").load("step-preview-zonasi.html");
            }
            
        }
        
    }

       

    </script>
</body>

</html>