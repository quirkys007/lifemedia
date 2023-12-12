var map = L.map('map').setView([-7.82494, 110.36812], 17);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 50,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
            var marker = L.marker([-7.82501, 110.36792]).addTo(map);
            var marker = L.marker([-7.82520, 110.36793]).addTo(map);
            var marker = L.marker([-7.82550, 110.36793]).addTo(map);
            //popup marker
            marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
            
            var marker = L.marker([-7.82570, 110.36793]).addTo(map);
            var circle = L.circle([-7.82501, 110.36792], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 1000
            }).addTo(map);
            var popup = L.popup();
            circle.bindPopup("WARNING REDZONE");

            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent("KOORDINAT YANG KAU KLIK " + e.latlng.toString())
                    .openOn(map);
            }

            map.on('click', onMapClick);