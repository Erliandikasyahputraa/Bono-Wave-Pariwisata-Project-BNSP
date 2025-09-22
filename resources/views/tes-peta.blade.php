<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tes Peta Leaflet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <style>
        /* Hapus semua margin dan padding */
        body, html { margin: 0; padding: 0; } 
        /* Buat div peta mengisi seluruh layar */
        #map-container { width: 100vw; height: 100vh; }
    </style>
</head>
<body>

    <div id="map-container"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Kode JS minimal untuk inisialisasi peta
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map-container').setView([0.4283, 102.5833], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([0.4283, 102.5833]).addTo(map);
        });
    </script>
</body>
</html>