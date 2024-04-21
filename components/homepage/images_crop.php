<style>
#images_crop {
    position: relative;
    .top-svg {
        fill: <?php echo $images_crop_top_svg_color; ?>;
    }
    .bottom-svg {
        fill: <?php echo $images_crop_bottom_svg_color; ?>;
    }
}
.images-crop {
    display: flex;
    height: <?php echo $image_crop_height; ?>;
    overflow: clip;
    position: relative;
}
.images-crop img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    will-change: filter;
}
.images-crop .block {
    container: block/inline-size;
    flex: 1;
    margin-right: -20%;
    clip-path: polygon(20% 0, 100% 0%, 80% 100%, 0% 100%);
    transition: 0.25s flex 0.125s linear;
    will-change: flex;
    position: relative;
}
.images-crop .block  div {
    position: absolute;
    bottom: <?php echo $images_crop_bottom; ?>;
    left: 2rem;
    color: #fff;
    font-size: clamp(12px, 5cqw, 32px);
    z-index: 2;
}
.images-crop .block:first-child img {
    filter: grayscale(0);
}
.images-crop .block img {
    filter: grayscale(1);
}
.images-crop .block:hover {
    flex: 1.45;
}
.images-crop .block:hover img {
    filter: grayscale(0);
}
.images-crop .block:first-child {
    clip-path: polygon(0 0, 100% 0%, 80% 100%, 0% 100%);
}
.images-crop .block:last-child {
    margin-right: -15%;
    clip-path: polygon(20% 0, 100% 0%, 100% 100%, 0% 100%);
}
.images-crop:has(.block:not(:first-child):hover) .block:first-child img {
    filter: grayscale(1);
}

</style>

<?php if ( $images_crop_top_svg ) : ?>
    <?php require "components/top_svg.php" ?>
<?php endif; ?>
<div id="images-crop-section" class="blocks images-crop">
<?php foreach ($images_crop_array as $image) : ?>
  <div class="block">
      <div><?php echo $image["text"]; ?></div>
      <img src="custom/gallery/<?php echo $image["img"]; ?>" alt="<?php echo $image["text"]; ?> image ">
  </div>
<?php endforeach; ?>
</div>
<?php if ( $images_crop_bottom_svg ) : ?>
    <?php require "components/bottom_svg.php" ?>
<?php endif; ?>