<?php
include("header1.php");
?>
<main>
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-50 text-center">
                            <h2>Area Coverage</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <P></P>
    <div class="container " style="width:100%; height: 100%">
        <div id="map" style="width: 900px; height: 580px"></div>
        <script>
            // Creating map options
            var mapOptions = {
                center: [-7.82494, 110.36812],
                zoom: 17,
                maxZoom: 50
            }
            // Creating a map object
            var map = new L.map('map', mapOptions);
            // Creating a Layer object
            var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
            //marker
            var marker = L.marker([-7.82501, 110.36792]).addTo(map);
            //popup marker
            marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
            var marker = L.marker([-7.82530, 110.36792]).addTo(map);
            var marker = L.marker([-7.82560, 110.36792]).addTo(map);
            //popup click
            var popup = L.popup();
            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent("You clicked the map at " + e.latlng.toString())
                    .openOn(map);
            }

            map.on('click', onMapClick);

            // Adding layer to the map
            map.addLayer(layer);
        </script>
    </div>
</main>
<p></p>

<?php
include("footer1.php");
?>