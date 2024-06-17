<style>
    #album_section {
        background-color: <?php echo $section_album_bg_color; ?>;
        background-image: url("custom/<?php echo $section_album_bg_url; ?>");
        background-size: <?php echo $section_album_bg_size; ?>;
        background-repeat: <?php echo $section_album_bg_repeat; ?>;
        background-attachment: <?php echo $section_album_bg_attachment; ?>;
        h2 {
            color: <?php echo $section_album_title_color; ?>;
        }
        p {
            color: <?php echo $section_album_text_color; ?>;
        }
        .card {
            background-color: <?php echo $section_card_bg_color; ?>;
            border: unset;
            p {
                color: <?php echo $section_card_text_color; ?>;
            }
        }
        .top-svg {
            fill: <?php echo $section_album_top_svg_color; ?>;
        }
        .bottom-svg {
            fill: <?php echo $section_album_bottom_svg_color; ?>;
        }
    }
</style>
<div class="album album-section all-section-style">
    
    <?php if ( $section_album_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
    <div class="container text-center">
        <?php if ( !empty($album_section_title) ) : ?>
            <?php echo $album_section_title; ?>
        <?php endif; ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-12 g-3">
            <?php foreach( $album_section_items as $one_item ) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><?php echo $one_item["text"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <?php if ( $section_album_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>
</div>