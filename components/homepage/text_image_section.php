<style>
    #text_image_section {
        background-color: <?php echo $text_image_section_1_bg_color; ?>;
        background-image: url("custom/<?php echo $text_image_section_1_bg_url; ?>");
        background-size: <?php echo $text_image_section_1_bg_size; ?>;
        background-attachment: <?php echo $text_image_section_1_bg_attachment; ?>;
        background-repeat: <?php echo $text_image_section_1_bg_repeat; ?>;
        h2 {
            color: <?php echo $text_image_section_1_title_color; ?>;
        }
        h3 {
            color: <?php echo $text_image_section_1_subtitle_color; ?>;
        }
        p {
            color: <?php echo $text_image_section_1_text_color; ?>;
        }
        .container {
            max-width: <?php echo $text_image_section_1_width; ?>;
            padding: 0;
        }
        .row {
            margin: 0;
            div { 
                padding: 0;
            }
        }
        .top-svg {
            fill: <?php echo $text_image_section_1_top_svg_color; ?>;
        }
        .bottom-svg {
            fill: <?php echo $text_image_section_1_bottom_svg_color; ?>;
        }
    }
</style>
<div class="container col-xxl-12 text_image_section_1 all-section-style">
    <?php if ( $text_image_section_1_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
    <?php echo !empty( $text_image_section_1_html ) ? $text_image_section_1_html : ""; ?>
    <?php if ( $text_image_section_1_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>
</div>