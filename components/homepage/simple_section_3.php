<style>
    .simple-section-3 {
        background-color: <?php echo $simple_section_3_bg_color; ?>;
        background-image: url("custom/<?php echo $simple_section_3_bg_url; ?>");
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
    }
</style>
<div class="all-section-style text-center simple-section-3">
    <?php echo !empty( $simple_section_3_html ) ? $simple_section_3_html : ""; ?>
</div>