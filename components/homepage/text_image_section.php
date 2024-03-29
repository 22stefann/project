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
    }
</style>
<div class="container col-xxl-12">
    <?php echo !empty( $text_image_section_1_html ) ? $text_image_section_1_html : ""; ?>
</div>