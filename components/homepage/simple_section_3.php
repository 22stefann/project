<style>
    .simple-section-3 {
        background-color: <?php echo $simple_section_3_bg_color; ?>;
        background-size: <?php echo $simple_section_3_bg_size; ?>;
        background-repeat: <?php echo $simple_section_3_bg_repeat; ?>;
        background-attachment: <?php echo $simple_section_3_bg_attachment; ?>;
        h2 {
            color: <?php echo $simple_section_3_title_color; ?>;
        }
        h3 {
            color: <?php echo $simple_section_3_subtitle_color; ?>;
        }
        p {
            color: <?php echo $simple_section_3_text_color; ?>;
        }
        .top-svg {
            fill: <?php echo $simple_section_3_top_svg_color; ?>;
        }
        .bottom-svg {
            fill: <?php echo $simple_section_3_bottom_svg_color; ?>;
        }
        <?php if ( !empty($simple_section_3_bg_url) ) : ?> 
            background-image: url("custom/<?php echo $simple_section_3_bg_url; ?>");
        <?php endif; ?>
    }
</style>
<div class="all-section-style text-center simple-section-3">
    <?php if ( $simple_section_3_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
    <?php echo !empty( $simple_section_3_html ) ? $simple_section_3_html : ""; ?>
    <?php if ( $simple_section_3_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>
</div>