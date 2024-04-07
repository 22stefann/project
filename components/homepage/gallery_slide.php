<style>
:root {
    --gallery-slide-width: min(90vw,800px);
    --gallery-slide-offset: 0 -0.75rem;
}

.gallery-slide-section * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.gallery-slide-section {
    height: <?php echo $gallery_slideshow_height; ?>;
    display: grid;
    place-items: center;
    position: relative;
    background-color: <?php echo $gallery_slideshow_bg_color; ?>;
    .top-svg {
        fill: <?php echo $gallery_slide_top_svg_color; ?>;
    }
    .bottom-svg {
        fill: <?php echo $gallery_slide_bottom_svg_color; ?>;
    }
}

.gallery-slide-section .list {
    width: var(--gallery-slide-width);
    list-style-type: none;
    display: flex;
    align-items: center;
    gap: 0.15rem;

    &:hover .item:not(:hover)::after { background-color: rgba(0,0,0,0.6); }

    & .item {
        position: relative;
        flex: 1;
        aspect-ratio: 1;
        border-radius: 0.25rem;
        transition: flex 0.5s, margin 0.6s;
        overflow: hidden;

        &::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        transition: background-color 0.9s;
        }

        &:hover {
            flex: 9;
            z-index: 10;
            box-shadow: 0 0 5px rgba(0,0,0,0.3);
        }

        &:hover + .item { flex: 4; margin: var(--gallery-slide-offset); z-index: 5; }
        &:has(+ :hover) { flex: 4; margin: var(--gallery-slide-offset); z-index: 5; }

        & img {
            position: absolute;
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
        }
    }
}
@media (max-width: 767px) {
    .gallery-slide-section {
        height: <?php echo $gallery_slideshow_height_mobile; ?>;
    }
}
</style>
<div id="gallery-slide" class="gallery-slide-section">
    <?php if ( $gallery_slide_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
    <ul class='list'>
        <?php foreach ($gallery_slideshow_array as $image) : ?>
            <li class='item'><img src='custom/gallery/<?php echo $image["img"]; ?>' alt=""></li>
        <?php endforeach; ?>
    </ul>
    <?php if ( $gallery_slide_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?> 
</div>
