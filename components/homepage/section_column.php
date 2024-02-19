<style>
    #section_column {
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
    }
</style>
<div class="container all-section-style text-center section-column">
    <?php echo $section_column_html; ?>
</div>