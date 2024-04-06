<style>
    .simple-section-1 {
        background-color: <?php echo $simple_section_1_bg_color; ?>;
        background-image: url("custom/<?php echo $simple_section_1_bg_url; ?>");
        background-size: <?php echo $simple_section_1_bg_size; ?>;
        background-repeat: <?php echo $simple_section_1_bg_repeat; ?>;
        background-attachment: <?php echo $simple_section_1_bg_attachment; ?>;
        h2 {
            color: <?php echo $simple_section_1_title_color; ?>;
        }
        h3 {
            color: <?php echo $simple_section_1_subtitle_color; ?>;
        }
        p {
            color: <?php echo $simple_section_1_text_color; ?>;
        }
        .top-svg {
            fill: <?php echo $simple_section_1_top_svg_color; ?>;
        }
        .bottom-svg {
            fill: <?php echo $simple_section_1_bottom_svg_color; ?>;
        }
    }
</style>
<div class="all-section-style text-center simple-section-1">
    <?php if ( $simple_section_1_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
    <?php echo !empty( $simple_section_1_html ) ? $simple_section_1_html : ""; ?>
    <?php if ( $simple_section_1_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>
</div>