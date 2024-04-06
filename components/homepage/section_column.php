<style>
    #section_column {
        position: relative;
        background-color: <?php echo $section_column_bg_color; ?>;
        background-image: url("custom/<?php echo $section_column_bg_url; ?>");
        background-size: <?php echo $section_column_bg_size; ?>;
        background-repeat: <?php echo $section_column_bg_repeat; ?>;
        background-attachment: <?php echo $section_column_bg_attachment; ?>;
        h2 {
            color: <?php echo $section_column_title_color; ?>;
        }
        h3 {
            color: <?php echo $section_column_subtitle_color; ?>;
        }
        p {
            color: <?php echo $section_column_text_color; ?>;
        }
        .top-svg {
            fill: <?php echo $section_column_top_svg_color; ?>;
        }
        .bottom-svg {
            fill: <?php echo $section_column_bottom_svg_color; ?>;
        }
    }
</style>
    <?php if ( $section_column_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
<div class="container all-section-style text-center section-column">
    <?php echo $section_column_html; ?>
</div>
    <?php if ( $section_column_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>