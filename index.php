
<!DOCTYPE html>
<html>
<head>
<title>Periodic Table</title>
<link rel="stylesheet" href="style.css" />

</head>

<body>
<?php include 'header.php' ?>



<div class="action-section">
    <h3>Explore Applications</h3>

    <div class="action-buttons">
        <a href="industry.php" class="btn-action industry">Industry</a>
        <a href="degree.php" class="btn-action degree">Degree</a>
        <a href="market-research.php" class="btn-action research">Market Research</a>
    </div>
</div>



<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
// Create map
var map = L.map('map').setView([20,0], 2);

// OpenStreetMap tiles
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
    maxZoom:5, attribution:'&copy; OpenStreetMap'
}).addTo(map);

// Country info stored in JS
var countryInfo = {
    "IN": {name:"India", info:"Population ~1.4B", url:"#"},
    "US": {name:"United States", info:"Population ~331M", url:"#"},
    "CA": {name:"Canada", info:"Population ~38M", url:"#"},
    "AU": {name:"Australia", info:"Population ~26M", url:"#"}
};

// Minimal GeoJSON example (replace with full world map for all countries)
var countriesGeoJSON = {
"type":"FeatureCollection",
"features":[
    {"type":"Feature","properties":{"iso_a2":"IN","name":"India"},"geometry":{"type":"Polygon","coordinates":[[[77,28],[78,28],[78,29],[77,29],[77,28]]]}},
    {"type":"Feature","properties":{"iso_a2":"US","name":"United States"},"geometry":{"type":"Polygon","coordinates":[[[-100,40],[-99,40],[-99,41],[-100,41],[-100,40]]]}},
    {"type":"Feature","properties":{"iso_a2":"CA","name":"Canada"},"geometry":{"type":"Polygon","coordinates":[[[-110,50],[-109,50],[-109,51],[-110,51],[-110,50]]]}},
    {"type":"Feature","properties":{"iso_a2":"AU","name":"Australia"},"geometry":{"type":"Polygon","coordinates":[[[135,-25],[136,-25],[136,-24],[135,-24],[135,-25]]]}}
]
};

// Add GeoJSON layer
L.geoJSON(countriesGeoJSON, {
    style: {color:"#444", weight:1, fillColor:"#ccc", fillOpacity:0.7},
    onEachFeature: function(feature, layer){
        var code = feature.properties.iso_a2;
        layer.on('click', function(){
            var info = countryInfo[code] || {name:code, info:"No info", url:"#"};
            layer.bindPopup("<b>"+info.name+"</b><br>"+info.info+"<br><a href='"+info.url+"'>Go</a>").openPopup();
        });
        layer.on('mouseover', function(){ layer.setStyle({fillColor:"#88c0d0"}); });
        layer.on('mouseout', function(){ layer.setStyle({fillColor:"#ccc"}); });
    }
}).addTo(map);

</script>




</body>
</html>
