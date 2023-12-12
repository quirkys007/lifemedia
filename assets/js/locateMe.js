var map = L.map('map').setView([-7.82494, 110.36812], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// Tambahkan marker untuk lokasi pengguna
function addMarker(lat, lng) {
    var marker = L.marker([lat, lng]).addTo(map);
    map.setView([lat, lng], 15); // Setel tampilan peta ke lokasi pengguna
}

// Fungsi untuk menangani tombol "Locate Me"
document.getElementById('locateMe').addEventListener('click', function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var userLat = position.coords.latitude;
            var userLng = position.coords.longitude;

            // Tambahkan marker pada peta
            addMarker(userLat, userLng);

        }, function (error) {
            console.error("Error getting user location:", error.message);
            alert("Error getting your location. Please try again.");
        });
    } else {
        alert("Geolocation is not supported by this browser.");
    }
});
