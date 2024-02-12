<div class="cover-content <?php if ( $cover_content == "slideshow" ) { echo "slideshow-on-cover"; } ?>">

    <?php if ( $cover_content == "slideshow_bootstrap" ) : ?>
        <?php 
            require_once 'components/homepage/slideshow_bootstrap.php';
        ?>
    <?php else : ?>
        <?php 
            require_once 'components/cover/'.$cover_content.'.php';
        ?>
    <?php endif; ?>

</div>