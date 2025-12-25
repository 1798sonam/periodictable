<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Full Screen World Map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden; /* Prevent scrollbars */
            background: #bcdff1;
        }

        /* 🌍 FULL SCREEN MAP */
        #map {
            width: 100vw;
            height: 100vh; /* Changed from fixed ratio to full viewport height */
            background: #bcdff1;
        }
    </style>
</head>

<body>

<div id="map"></div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
// 🌍 WORLD BOUNDS
const worldBounds = [
    [-90, -180],
    [90, 180]
];

// 🗺️ MAP INIT
const map = L.map('map', {
    minZoom: 2, // Increased slightly so world isn't too tiny on huge screens
    maxZoom: 6,
    worldCopyJump: false,
    maxBounds: worldBounds,
    maxBoundsViscosity: 1.0,
    zoomControl: true
});

// 🧱 TILE LAYER
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    noWrap: true,
    attribution: '&copy; OpenStreetMap'
}).addTo(map);

// 🔥 FIT WORLD TO VIEWPORT
// padding: [0, 0] ensures it stretches as much as possible
map.fitBounds(worldBounds, { padding: [0, 0] });

// 🌐 COUNTRY BORDERS
fetch('https://raw.githubusercontent.com/johan/world.geo.json/master/countries.geo.json')
.then(res => res.json())
.then(data => {
    const countries = L.geoJSON(data, {
        style: {
            color: '#222',
            weight: 1,
            fillOpacity: 0
        },
        onEachFeature: (feature, layer) => {
            const name = feature.properties.name || 'Country';
            layer.bindTooltip(name, { sticky: true });

            layer.on('mouseover', () => {
                layer.setStyle({
                    color: '#0d6efd',
                    weight: 2,
                    fillOpacity: 0.08
                });
            });

            layer.on('mouseout', () => {
                countries.resetStyle(layer);
            });
        }
    }).addTo(map);
});

// 🔄 HANDLE RESIZE
window.addEventListener('resize', () => {
    map.invalidateSize();
    map.fitBounds(worldBounds);
});

// Final check to fix any gray tiles on load
setTimeout(() => {
    map.invalidateSize();
}, 500);

</script>

</body>
</html>