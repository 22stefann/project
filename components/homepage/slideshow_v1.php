<style>
#slideshow_v1 {
    .top-svg {
        fill: <?php echo $slideshow_v1_top_svg_color; ?>;
    }
    .bottom-svg {
        fill: <?php echo $slideshow_v1_bottom_svg_color; ?>;
    }
}
.slideshow_v1_section,
.slideshow_v1_section .main-slideshow {
    height: var(--slideshowSectionDesktopHeight);
    position: relative;
    overflow: hidden;
}

.slideshow_v1_section .slide-texts-container {
    height: var(--slideshowSectionDesktopHeight);
    display: flex;
    justify-content: center;
    align-items: center;
    background: var(--slideshowAlpha);
    flex-direction: column;
}

.slideshow_v1_section .slide {
    position: relative;
}

.slideshow_v1_section .slide:not(.current, .prev) {
    visibility: hidden;
}

.slideshow_v1_section .title {
    color: var(--slideshow_text_color);
    text-align: center;
    padding: 20px;
}

.slideshow_v1_section span.title-h3 {
    color: var(--slideshow_text_color);
}

.slideshow_v1_section .title:not(.current) {
    display: none;
}

.slideshow_v1_section .slide-image {
    position: absolute;
}
.slideshow_v1_section .slideshow-h2 {
    padding-top: 24px;
    position: absolute;
    bottom: 35%;
    font-family: var(--h2FontFamily);
    color: #fff;
    font-size: 2em;
}

.slideshow_v1_section .slide-image {
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    z-index: -1;
    background-size: cover;
    height: var(--slideshowSectionDesktopHeight);
}

.slideshow_v1_section .slide-container .current .slide-image {
    transform: translateY(100%);
    clip-path: circle(25% at 50% 50%);
    animation: slide-entry-section 0.5s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards, expand-section 1s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
}

@keyframes slide-entry-section {
    0% {
    opacity: 0;
    transform: translate(100%, 100%);
    }
    25% {
    opacity: 0.2;
    }
    75% {
    opacity: 0.8;
    }
    100% {
    opacity: 1;
    transform: translate(0, 0);
    }
}

.slideshow_v1_section .slide-container .prev .slide-image {
    opacity: 1;
    clip-path: circle(100%);
    animation: contract-section 0.5s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards, slide-exit-section 1s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
}

@keyframes slide-exit-section {
    0% {
        opacity: 1;
        transform: translate(0, 0);
    }
    25% {
        opacity: 0.8;
    }
    75% {
        opacity: 0.2;
    }
    100% {
        opacity: 0;
        transform: translate(-100%, 100%);
    }
}

.slideshow_v1_section .sub-slide {
    display: none;
}

.slideshow_v1_section .sub-slide[data-id="0"] {
    display: block;
    opacity: 0;
    animation: current-title-entry-section 0.7s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
}

.slideshow_v1_section .title.current,
.slideshow_v1_section .sub-slide.current {
    opacity: 0;
    animation: current-title-entry-section 0.7s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
    text-align: center;
}

@keyframes current-title-entry-section {
    0% {
    opacity: 0;
    transform: translateX(20%);
    }
    100% {
    opacity: 1;
    transform: translateX(0);
    }
}

.slideshow_v1_section .title.prev,
.slideshow_v1_section .sub-slide.prev  {
    opacity: 1;
    animation: prev-title-exit-section 0.7s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
}

@keyframes prev-title-exit-section {
    0% {
    opacity: 1;
    transform: translateY(0);
    }

    100% {
    opacity: 0;
    transform: translateX(-20%);
    }
}

.slideshow_v1_section .slide-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: fit-content;
    width: 100%;
    position: absolute;
    left: 0;
    right: 0;
    color: white;
    transform: translateY(-50%);
    top: 50%;
    padding: 0 20px;
}

.slideshow_v1_section .slide-buttons li {
    padding: 15px 22px;
    color: var(--slideshow_arrow_color);
    background-color: var(--slideshow_bg_arrow_color);
    cursor: pointer;
    border-radius: 50%;
}

.slideshow_v1_section .slide-buttons li:hover {
    color: var(--slideshow_hover_arrow_color);
    background-color: var(--slideshow_bg_hover_arrow_color);
}

@media (max-width: 767px) {
    .slideshow_v1_section,
    .slideshow_v1_section .main-slideshow,
    .slideshow_v1_section .slide-texts-container,
    .slideshow_v1_section .slide-image {
        height: var(--slideshowSectionMobileHeight);
    }

    .slideshow_v1_section .slide-buttons li {
        padding: 6px 13px;
    }

    .slideshow_v1_section .slide-buttons {
        padding: 0 5px;
    }
}

<?php if ( $slideshowAnimation == 1 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: circle(25% at 50% 50%);
        }
        100% {
        clip-path: circle(100%);
        }
    }

    @keyframes contract-section {
        0% {
        clip-path: circle(100%);
        }

        100% {
        clip-path: circle(25% at 50% 50%);
        }
    }

<?php } elseif ( $slideshowAnimation == 2 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: circle(100%);
        }
        100% {
        clip-path: circle(100%);
        }
    }

    @keyframes contract-section {
        0% {
        clip-path: circle(100%);
        }

        100% {
        clip-path: circle(100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 3 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }
        100% {
        clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 0);
        }
    }

    @keyframes contract-section {
        0% {
        clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 0);
        }
        100% {
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }
    }

<?php } elseif ( $slideshowAnimation == 4 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
        }
        50% {
        clip-path: polygon(0 0, 74% 0, 100% 100%, 25% 100%);
        }
        100% {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
    }

    @keyframes contract-section {
        100% {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 5 ) { ?>

    @keyframes expand-section {
        50% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 25%, 0% 25%, 0% 50%, 100% 50%, 100% 75%, 0% 75%, 0% 100%, 100% 100%, 100% 0%, 75% 0%, 75% 100%, 50% 100%, 50% 0%, 25% 0%, 25% 100%, 0% 100%);
        }
        100% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

    @keyframes contract-section {
        100% {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 6 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: polygon(0% 0%, 50% 50%, 100% 100%, 50% 50%);
        }
        20% {
        clip-path: polygon(0% 0%, 53.91% 46.71%, 100% 100%, 43.38% 56.63%);
        }
        40% {
        clip-path: polygon(0% 0%, 60.9% 37.14%, 100% 100%, 37.14% 60.9%);
        }
        60% {
        clip-path: polygon(0% 0%, 69.63% 30.37%, 100% 100%, 30.37% 69.63%);
        }
        80% {
        clip-path: polygon(0% 0%, 82.38% 17.62%, 100% 100%, 17.62% 82.38%);
        }
        100% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

    @keyframes contract-section {
        100% {
        clip-path: polygon(0% 0%, 50% 50%, 100% 100%, 50% 50%);
        }
        80% {
        clip-path: polygon(0% 0%, 53.91% 46.71%, 100% 100%, 43.38% 56.63%);
        }
        60% {
        clip-path: polygon(0% 0%, 60.9% 37.14%, 100% 100%, 37.14% 60.9%);
        }
        40% {
        clip-path: polygon(0% 0%, 69.63% 30.37%, 100% 100%, 30.37% 69.63%);
        }
        20% {
        clip-path: polygon(0% 0%, 82.38% 17.62%, 100% 100%, 17.62% 82.38%);
        }
        0% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 7 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: polygon(0% 0%, 0% 100%, 100% 100%, 100% 0%);
        }
        100% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

    @keyframes contract-section {
        100% {
        clip-path: polygon(0% 0%, 0% 100%, 100% 100%, 100% 0%);
        }
        0% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 8 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: circle(11.7% at 100% 100%);
        }
        10%{
        clip-path: circle(24.6% at 100% 100%);
        }
        30% {
        clip-path: circle(47.9% at 100% 100%);
        }
        50%{
        clip-path: circle(76.9% at 100% 100%);
        }
        70% {
        clip-path: circle(100.6% at 100% 100%);
        }
        100% {
        clip-path: circle(141.4% at 100% 100%);
        }
    }

    @keyframes contract-section {
        0% {
        clip-path: circle(100%);
        }

        100% {
        clip-path: circle(25% at 50% 50%);
        }
    }

<?php } elseif ( $slideshowAnimation == 9 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: polygon(0% 0%, 50% 50%, 100% 100%, 50% 50%);
        }
        50% {
        clip-path: polygon(0% 0%, 71.75% 28.25%, 100% 100%, 28.25% 71.75%);
        }
        100% {
        clip-path: polygon(0% 0%, 0% 100%, 100% 100%, 100% 0%);
        }
    }

    @keyframes contract-section {
        100% {
        clip-path: polygon(0% 0%, 50% 50%, 100% 100%, 50% 50%);
        }
        50% {
        clip-path: polygon(0% 0%, 71.75% 28.25%, 100% 100%, 28.25% 71.75%);
        }
        0% {
        clip-path: polygon(0% 0%, 0% 100%, 100% 100%, 100% 0%);
        }
    }

<?php } elseif ( $slideshowAnimation == 10 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: polygon(0% 0%, 0% 0%, 0% 100%, 0% 100%);
        }
        25% {
        clip-path: polygon(0% 0%, 17% 0%, 17% 100%, 0% 100%);
        }
        50% {
        clip-path: polygon(0% 0%, 17% 0%, 17% 100%, 0% 100%);
        }
        75% {
        clip-path: polygon(0% 0%, 61.5% 0%, 61.5% 100%, 0% 100%);
        }
        100% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

    @keyframes contract-section {
        100% {
        clip-path: polygon(0% 0%, 17% 0%, 17% 100%, 0% 100%);
        }
        75% {
        clip-path: polygon(0% 0%, 35.25% 0%, 35.25% 100%, 0% 100%);
        }
        50% {
        clip-path: polygon(0% 0%, 61.5% 0%, 61.5% 100%, 0% 100%);
        }
        25% {
        clip-path: polygon(0% 0%, 83.25% 0%, 83.25% 100%, 0% 100%);
        }
        0% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 11 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: polygon(31.25% 52.75%, 31.25% 30.75%, 70.13% 30.75%, 70.13% 69.63%, 31.25% 69.63%);
        }
        25% {
        clip-path: polygon(31.25% 52.75%, 31.25% 30.75%, 70.13% 30.75%, 70.13% 69.63%, 31.25% 69.63%);
        }
        50% {
        clip-path: polygon(31.25% 52.75%, 31.25% 30.75%, 70.13% 30.75%, 70.13% 69.63%, 31.25% 69.63%);
        }
        80% {
        clip-path: polygon(14.37% 53.59%, 14.37% 14.75%, 86.85% 14.77%, 86.83% 87.26%, 14.35% 87.22%);
        }
        100% {
        clip-path: polygon(0% 50%, 0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

    @keyframes contract-section {
        100% {
        clip-path: polygon(31.25% 52.75%, 31.25% 30.75%, 70.13% 30.75%, 70.13% 69.63%, 31.25% 69.63%);
        }
        50% {
        clip-path: polygon(14.37% 53.59%, 14.37% 14.75%, 86.85% 14.77%, 86.83% 87.26%, 14.35% 87.22%);
        }
        0% {
        clip-path: polygon(0% 50%, 0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 12 ) { ?>

    @keyframes expand-section {
        0% {
        clip-path: polygon(0% 0%, 10% 0%, 10% 100%, 20% 100%, 20% 0%, 30% 0%, 30% 100%, 40% 100%, 40% 0%, 50% 0%, 50% 100%, 60% 100%, 60% 0%, 70% 0%, 70% 100%, 80% 100%, 80% 0%, 90% 0%, 90% 100%, 100% 100%, 100% 0%, 100% 10%, 0% 10%, 0% 20%, 100% 20%, 100% 30%, 0% 30%, 0% 40%, 100% 40%, 100% 50%, 0% 50%, 0% 60%, 100% 60%, 100% 70%, 0% 70%, 0% 80%, 100% 80%, 100% 90%, 0% 90%, 0% 100%);
        }
        50% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 10%, 0% 10%, 0% 0%, 100% 0%, 100% 100%, 90% 100%, 90% 0%, 80% 0%, 80% 100%, 70% 100%, 70% 0%, 60% 0%, 60% 100%, 50% 100%, 50% 0%, 40% 0%, 40% 100%, 30% 100%, 30% 0%, 20% 0%, 20% 100%, 10% 100%, 10% 0%, 0% 0%, 0% 100%, 100% 100%, 100% 90%, 0% 90%, 0% 80%, 100% 80%, 100% 70%, 0% 70%, 0% 60%, 100% 60%, 100% 50%, 0% 50%, 0% 40%, 100% 40%, 100% 30%, 0% 30%, 0% 20%, 100% 20%, 100% 10%, 0% 10%);
        }
        100% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

    @keyframes contract-section {
        100% {
        clip-path: polygon(0% 0%, 10% 0%, 10% 100%, 20% 100%, 20% 0%, 30% 0%, 30% 100%, 40% 100%, 40% 0%, 50% 0%, 50% 100%, 60% 100%, 60% 0%, 70% 0%, 70% 100%, 80% 100%, 80% 0%, 90% 0%, 90% 100%, 100% 100%, 100% 0%, 100% 10%, 0% 10%, 0% 20%, 100% 20%, 100% 30%, 0% 30%, 0% 40%, 100% 40%, 100% 50%, 0% 50%, 0% 60%, 100% 60%, 100% 70%, 0% 70%, 0% 80%, 100% 80%, 100% 90%, 0% 90%, 0% 100%);
        }
        50% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 10%, 0% 10%, 0% 0%, 100% 0%, 100% 100%, 90% 100%, 90% 0%, 80% 0%, 80% 100%, 70% 100%, 70% 0%, 60% 0%, 60% 100%, 50% 100%, 50% 0%, 40% 0%, 40% 100%, 30% 100%, 30% 0%, 20% 0%, 20% 100%, 10% 100%, 10% 0%, 0% 0%, 0% 100%, 100% 100%, 100% 90%, 0% 90%, 0% 80%, 100% 80%, 100% 70%, 0% 70%, 0% 60%, 100% 60%, 100% 50%, 0% 50%, 0% 40%, 100% 40%, 100% 30%, 0% 30%, 0% 20%, 100% 20%, 100% 10%, 0% 10%);
        }
        0% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

<?php } ?>
</style>
<div id="slideshow_v1" class="slideshow_v1_section">
    <?php if ( $slideshow_v1_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
    <div class="main-slideshow">
      <div class="slide-container">
        <?php foreach ($slideshow_array as $slide) { ?>
          <div class="slide" data-id="<?php echo $slide["data-id"]; ?>">
            <div class="slide-image" style="background-image: url(custom/<?php echo $slide["img"]; ?>);"></div>
          </div>
        <?php } ?>
      </div>
      <div class="slide-texts-container">
        <?php foreach ($slideshow_array as $slide) { if ( $slide["data-id"] == "0" ) {?>
          <h1 class="title slide title-h1" data-id="<?php echo $slide["data-id"]; ?>">
            <?php echo $slide["h2"]; ?>
          </h1>
           <div class="sub-slide" data-id="<?php  echo $slide["data-id"]; ?>"><?php  echo $slide["text"]; ?></div>
          <?php } else { ?>
            <h2 class="title slide title-h1" data-id="<?php echo $slide["data-id"]; ?>">
              <?php echo $slide["h2"]; ?>
            </h2>
            <div class="sub-slide" data-id="<?php  echo $slide["data-id"]; ?>"><?php  echo $slide["text"]; ?></div>
          <?php } ?>
        <?php } ?>
      </div>
      <?php if ( !empty($slideshowArrow) && $slideshowArrow == "true" ) { ?>
        <ul class="slide-buttons">
          <li class="btn-left">
              <i class="fa-solid fa-chevron-left"></i>
          </li>
          <li class="btn-right">
              <i class="fa-solid fa-chevron-right"></i>
          </li>
        </ul>
      <?php } ?>
  </div>
    <?php if ( $slideshow_v1_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>
</div>

<script>
const removeClassesSection = (allSlides) => {
allSlides.forEach(el => {
    el.classList.remove("prev", "current");
});
};

const addClassesSection = (slideArr, className) => {
slideArr.forEach(el => {
    el.classList.add(className);
});
};

const CarouselSection = (autoplay) => {
const slides = document.querySelectorAll(".slideshow_v1_section .slide");
const slidesLength = slides.length / 2;
let timerId;
let prev = slidesLength - 1;
let curr = 0;

const getSlides = (slideIndex) => {
    return [...slides].filter((item) => slideIndex == item.dataset.id);
}

const changeSlide = (direction) => {
    removeClassesSection(slides);

    prev = curr;

    if (direction === "right") {
        curr = (curr + 1) % (slidesLength);
    } else {
        curr = (slidesLength + curr - 1) % (slidesLength);
    }

    const prevSlides = getSlides(prev);
    const currentSlides = getSlides(curr);

    addClassesSection(prevSlides, "prev");
    addClassesSection(currentSlides, "current");

};

const nextSlide = () => {
    changeSlide('right');
    const currentSlides = getSlides(curr);
    const currentSlidesText = $(".slideshow_v1_section .sub-slide").toArray();
    currentSlidesText.forEach((h3Element) => {
        const dataId = h3Element.getAttribute("data-id");
        if (dataId === currentSlides[0].getAttribute("data-id")) {
            h3Element.style.display = "block";
            h3Element.classList.add("current");
        } else {
            h3Element.classList.remove("current");
            h3Element.style.display = "none";
        }
    });
};

const previousSlide = () => {
    changeSlide('left');
    const currentSlides = getSlides(curr);
    const currentSlidesText = $(".slideshow_v1_section .sub-slide").toArray();
    currentSlidesText.forEach((h3Element) => {
        const dataId = h3Element.getAttribute("data-id");
        if (dataId === currentSlides[0].getAttribute("data-id")) {
            h3Element.style.display = "block";
            h3Element.classList.add("current");
        } else {
            h3Element.classList.remove("current");
            h3Element.style.display = "none";
        }
    });
};

const handleAutoplay = () => {
    if (autoplay) {
        timerId = setInterval(() => {
            nextSlide();
        }, <?php echo $slideshowDelay; ?>);
    }
};

const stopAutoplay = () => {
    clearInterval(timerId);
};

const init = () => {
    slides[0].classList.add("current");
    slides[slidesLength].classList.add("current");

    const buttonLeft = document.querySelector(".slideshow_v1_section .btn-left");
    const buttonRight = document.querySelector(".slideshow_v1_section .btn-right");
    var showArrow = '<?php echo $slideshowArrow; ?>';
    if ( showArrow ) {
        buttonLeft.addEventListener("click", previousSlide);
        buttonRight.addEventListener("click", nextSlide);
    }

    const slideContainer = document.querySelector(".slideshow_v1_section .slide-container");

    slideContainer.addEventListener("mouseenter", stopAutoplay);
    slideContainer.addEventListener("mouseleave", handleAutoplay);

    handleAutoplay();
};

return { init };
};

window.addEventListener("load", () => {
    const autoplay = '<?php echo $slideshowAutoplay; ?>';
    CarouselSection(autoplay).init();
});
</script>

