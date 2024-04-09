<style>
.gallery-swap * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.gallery-swap {
  background-color: <?php echo $gallery_swap_bg_color; ?>;
  h2 {
    color: <?php echo $gallery_swap_title_color; ?>;
    padding-bottom: 70px;
  }
}

.gallery-swap .gallery {
  width: <?php echo $gallery_swap_width; ?>;
  margin: 0 auto;
  list-style-type: none;
  display: grid;
  grid-template-columns: repeat(5,1fr);
  grid-auto-rows: 13vmin;
  gap: 0.25rem;

  & .item {
    background-size: cover;
    background-position: center;

    &:hover:not(li[data-pos="1"]) { cursor: pointer; }
  }
}

.gallery-swap li[data-pos='1'] {
  grid-column: 1/6;
  grid-row: 1/6;
}

.gallery-swap ::view-transition-group(*) { 
  animation-duration: 0.5s; 
  animation-timing-function: ease-in-out; 
}

@media (max-width: 767px) {
  .gallery-swap .gallery {
    width: 100%;
  }
}
</style>
<div class="gallery-swap all-section-style">
  <h2 class="title-h1 text-center">Galerija</h2>
  <ul id="gallery-swap" class='gallery'>
    <?php $br=1; foreach ($gallery_swap_array as $image) : ?>
        <li class='item' style="background-image: url('custom/gallery/<?php echo $image["img"] ?>')" data-pos='<?php echo $br++; ?>'></li>
    <?php endforeach; ?>
  </ul>
</div>

<script>
  const items = document.querySelectorAll('.gallery-swap .item');

  function insertViewTransitionName() {
    items.forEach((item,i) => {
      item.style.viewTransitionName = `item-${i++}`;
    });
  }

  function animateItem(e) {
    const hero = document.querySelector('.gallery-swap li[data-pos="1"]');
    const target = e.target;
    [hero.dataset.pos,target.dataset.pos] = [target.dataset.pos,hero.dataset.pos];
  }

  function initSwap(e) {
    if (!e.target.matches('.gallery-swap li')) return;
    insertViewTransitionName();
    !document.startViewTransition
      ? animateItem(e)
      : document.startViewTransition(() => animateItem(e));
  }

  window.addEventListener('click',initSwap,false);
</script>