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
    }
</style>
<div class="album album-section all-section-style">
    <div class="container text-center">
        <h2 class="subtitle-h2">Album Section</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach( $album_section_items as $one_item ) : ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <img class="d-block mx-lg-auto img-fluid" src="custom/<?php echo $one_item["src"]; ?>" alt="<?php echo $one_item["alt"]; ?>" />
                            <p class="card-text"><?php echo $one_item["text"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>