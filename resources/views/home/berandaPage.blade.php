<div>
    <div style="text-align: center;margin-top:20px;">
        <p class="light">
            Berikut ini adalah peta persebaran UMKM di kota sibolga
        </p>
    </div>
<div id="map" style="height:600px;"></div>
<div style="text-align: center;margin-top:20px;">
    <a href="javascript:void(0)" class="btn" onclick="getLocation()">Cek lokasi UMKM terdekat</a><br/>
    <small>Harap aktifkan fitur lokasi(GPS) di smartphone anda untuk mendapatkan lokasi sekarang</small>
</div>
</div>


<script>
    var map, infoWindow;

    function initMap(lat, lng) {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: lat, lng: lng },
            zoom: 16,
        });
        @foreach($dataUmkm as $umkm)
            new google.maps.Marker({
                position : {lat:{{ $umkm -> lat }}, lng:{{ $umkm -> lng }}},
                label : {
                    text : "{{ $umkm -> nama_usaha }}",
                    color : "#2c3e50",
                    fontSize : "18px",
                    fontWeight : "bold"
                },
                map : map
            });
        @endforeach
    }

    function getLocation()
    {
        let urlGetLocation = "https://www.googleapis.com/geolocation/v1/geolocate?key={{ env('GOOGLE_MAPS_API_KEY') }}";
        $.post(urlGetLocation, function(data){
            let location = data.location;
            // console.log(location.lat);
            let lat = location.lat;
            let lng = location.lng;
            // console.log(data);
            initMap(lat, lng);
        });
    }

    getLocation();
</script>