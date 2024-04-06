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
        <?php echo $under_cover_section_html; ?>
    <?php if ( $under_cover_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>
</div>