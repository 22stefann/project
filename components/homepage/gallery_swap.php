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

    &:nth-of-type(1) { background-image: url('https://source.unsplash.com/j7AMlh2MMHc'); }
    &:nth-of-type(2) { background-image: url('https://source.unsplash.com/Um9AkOiIDcU'); }
    &:nth-of-type(3) { background-image: url('https://source.unsplash.com/3InMDrsuYrk'); }
    &:nth-of-type(4) { background-image: url('https://source.unsplash.com/9XngoIpxcEo'); }
    &:nth-of-type(5) { background-image: url('https://source.unsplash.com/knVn7YXfvkE'); }
    &:nth-of-type(6) { background-image: url('https://source.unsplash.com/BzuUDHCi_vo'); }

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
<div class="gallery-swap">
  <h2 class="title-h1 text-center">Galerija</h2>
  <ul class='gallery'>
    <li class='item' data-pos='1'></li>
    <li class='item' data-pos='2'></li>
    <li class='item' data-pos='3'></li>
    <li class='item' data-pos='4'></li>
    <li class='item' data-pos='5'></li>
    <li class='item' data-pos='6'></li>
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

  function init(e) {
    if (!e.target.matches('.gallery-swap li')) return;
    insertViewTransitionName();
    !document.startViewTransition
      ? animateItem(e)
      : document.startViewTransition(() => animateItem(e));
  }

  window.addEventListener('click',init,false);
</script>