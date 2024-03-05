<?php if ( !empty( $address_map ) ) {
    $address_map_new = urlencode($address_map);
} else {
    $address_map_new = "";
}
?>
<div class="container-fluid p-0 m-0">
    <div class="row no-gutters mx-0" >
        <div class="col-12">
            <div class="embed-responsive embed-responsive-16by9 " style="height:560px !important;">
                <div style="width: 100%">
                <iframe style="<?php if ($dark_map) { echo 'filter: invert(1);';} ?> " id="googleMap" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $latituda; ?>, <?php echo $longituda; ?>+<?php echo $address_map_new; ?>&amp;ll=<?php echo $latituda; ?>, <?php echo $longituda; ?>&amp;z=<?php echo $map_zoom_level; ?>&amp;t=<?php echo $map_style; ?>&amp;ie=UTF8&amp;iwloc=B&amp;mode=d&amp;output=embed">
                <a href="https://www.gps.ie/">gps trackers</a></iframe></div>
            </div>
        </div>
    </div>
</div>


