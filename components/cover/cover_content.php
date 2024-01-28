<div class="cover-content <?php if ( $cover_content == "slideshow" ) { echo "slideshow-on-cover"; } ?>">
    <?php 
        require_once 'components/cover/'.$cover_content.'.php';
    ?>
</div>