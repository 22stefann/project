
<style>
.map-v2-section {
    z-index: 0;
}
</style>
<div id="map" class="map-v2-section" style="height: <?php echo $map_v2_height; ?>;"></div>

<script>
    var map = L.map('map').setView([<?php echo $coordinates; ?>], <?php echo $map_v2_zoom_level; ?>);

    map.dragging.disable();

    map.on('touchstart', function(e) {
        if (e.touches.length === 2) {
            map.dragging.enable();
        } else {
            map.dragging.disable();
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        function checkInView() { 
            var elementHeight = document.querySelector('body').clientWidth;
            if ( elementHeight <= 767 ) {
                map.dragging.disable();
            } else {
                map.dragging.enable();
            }
        }
        window.addEventListener('scroll', checkInView);
        window.addEventListener('resize', checkInView);
        checkInView();
    });
</script>
<?php if ( $map_v2_style == "light" ) : ?>
    <script>
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Tiles &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 19
        }).addTo(map);
    </script>
<?php elseif ( $map_v2_style == "dark" ) : ?>
    <script>
        L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Tiles &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 19
        }).addTo(map);
    </script>
<?php else : ?>
    <script>
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 19
        }).addTo(map);
    </script>
<?php endif; ?>


<script>
    L.marker([<?php echo $coordinates; ?>]).addTo(map)
        .bindPopup('<?php echo $address_map_v2; ?>')
        .openPopup();
</script>

<script>
    $( document ).ready(function() {
        $(".leaflet-popup-close-button").attr('href', '#');
        $(".leaflet-marker-icon").click(function(){
            window.open('<?php echo $map_v2_link; ?>', '_blank');
        });
    });
</script>