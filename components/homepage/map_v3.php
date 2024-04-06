
<div id="map" class="map" style="height: <?php echo $map_v2_height; ?>;"></div>

<script>

$( document ).ready(function() {
    
// Definirajte kartografski prikaz (View)
var view = new ol.View({
    center: ol.proj.fromLonLat([16.3725, 48.208889]), // Postavite centar mape (longitude, latitude)
    zoom: 10 // Postavite početni nivo zumiranja
});

// Definirajte kartografski sloj (Layer)
var layer = new ol.layer.Tile({
    source: new ol.source.OSM() // Postavite izvor podataka za sloj, OSM je OpenStreetMap
});

// Inicijalizirajte mapu
var map = new ol.Map({
    target: 'map', // ID elementa u kojem želite prikazati mapu
    layers: [layer], // Dodajte slojeve mapi
    view: view // Postavite kartografski prikaz
});
});

</script>