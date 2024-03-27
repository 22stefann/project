<style>
    .under-cover-section .top-svg {
        fill: <?php echo $under_cover_top_svg_color; ?>;
    }
    .under-cover-section .bottom-svg {
        fill: <?php echo $under_cover_bottom_svg_color; ?>;
    }
</style>
<div id="under-cover" <?php if ( !empty($underCoverBgImage) ) { echo 'style="background-image: url(\'' . $underCoverBgImage . '\');"'; } ?> class="under-cover-section all-section-style text-center">
    <?php if ( $under_cover_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
    <div class="">
        <h2 class="subtitle-h2 animated-element animate-left">Under cover section</h2>
        <h3 class="title-h3 animated-element animate-left">subtitle</h3>
        <div class="col-lg-6 mx-auto">
        <p class="animated-element animate-left">text</p>
        <a href="" class="btn btn-custom-style">Button</a>
        </div>
    </div>
    <?php if ( $under_cover_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>
</div>