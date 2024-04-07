<style>
.blocks {
    display: flex;
    height: <?php echo $image_crop_height; ?>;
    overflow: clip;
}
.blocks img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    will-change: filter;
}
.blocks .block {
    container: block/inline-size;
    flex: 1;
    margin-right: -20%;
    clip-path: polygon(20% 0, 100% 0%, 80% 100%, 0% 100%);
    transition: 0.25s flex 0.125s linear;
    will-change: flex;
    position: relative;
}
.blocks .block  div {
    position: absolute;
    bottom: 1rem;
    left: 2rem;
    color: #fff;
    font-size: clamp(12px, 5cqw, 32px);
    z-index: 2;
}
.blocks .block:first-child img {
    filter: grayscale(0);
}
.blocks .block img {
    filter: grayscale(1);
}
.blocks .block:hover {
    flex: 1.45;
}
.blocks .block:hover img {
    filter: grayscale(0);
}
.blocks .block:first-child {
    clip-path: polygon(0 0, 100% 0%, 80% 100%, 0% 100%);
}
.blocks .block:last-child {
    margin-right: -15%;
    clip-path: polygon(20% 0, 100% 0%, 100% 100%, 0% 100%);
}
.blocks:has(.block:not(:first-child):hover) .block:first-child img {
    filter: grayscale(1);
}

</style>

<div id="images-crop-section" class="blocks">
<?php foreach ($images_crop_array as $image) : ?>
  <div class="block">
      <div><?php echo $image["text"]; ?></div>
      <img src="custom/gallery/<?php echo $image["img"]; ?>" alt="">
  </div>
<?php endforeach; ?>
</div>