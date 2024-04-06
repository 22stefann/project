<style>
    .simple-section-2 {
        background-color: <?php echo $simple_section_2_bg_color; ?>;
        background-image: url("custom/<?php echo $simple_section_2_bg_url; ?>");
        background-size: <?php echo $simple_section_2_bg_size; ?>;
        background-repeat: <?php echo $simple_section_2_bg_repeat; ?>;
        background-attachment: <?php echo $simple_section_2_bg_attachment; ?>;
        h2 {
            color: <?php echo $simple_section_2_title_color; ?>;
        }
        h3 {
            color: <?php echo $simple_section_2_subtitle_color; ?>;
        }
        p {
            color: <?php echo $simple_section_2_text_color; ?>;
        }
        .top-svg {
            fill: <?php echo $simple_section_2_top_svg_color; ?>;
        }
        .bottom-svg {
            fill: <?php echo $simple_section_2_bottom_svg_color; ?>;
        }
    }
</style>
<div class="all-section-style text-center simple-section-2">
    <?php if ( $simple_section_2_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
    <?php echo !empty( $simple_section_2_html ) ? $simple_section_2_html : ""; ?>
    <?php if ( $simple_section_2_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>
</div>