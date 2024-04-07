<div class="cover-slideshow">
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
</div>

<script>
  const removeClasses = (allSlides) => {
    allSlides.forEach(el => {
        el.classList.remove("prev", "current");
    });
  };

  const addClasses = (slideArr, className) => {
    slideArr.forEach(el => {
        el.classList.add(className);
    });
  };

  const Carousel = (autoplay) => {
    const slides = document.querySelectorAll(".cover-slideshow .slide");
    const slidesLength = slides.length / 2;
    let timerId;
    let prev = slidesLength - 1;
    let curr = 0;

    const getSlides = (slideIndex) => {
        return [...slides].filter((item) => slideIndex == item.dataset.id);
    }

    const changeSlide = (direction) => {
        removeClasses(slides);

        prev = curr;

        if (direction === "right") {
            curr = (curr + 1) % (slidesLength);
        } else {
            curr = (slidesLength + curr - 1) % (slidesLength);
        }

        const prevSlides = getSlides(prev);
        const currentSlides = getSlides(curr);

        addClasses(prevSlides, "prev");
        addClasses(currentSlides, "current");

    };

    const nextSlide = () => {
        changeSlide('right');
        const currentSlides = getSlides(curr);
        const currentSlidesText = $(".cover-slideshow .sub-slide").toArray();
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
        const currentSlidesText = $(".cover-slideshow .sub-slide").toArray();
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

        const buttonLeft = document.querySelector(".cover-slideshow .btn-left");
        const buttonRight = document.querySelector(".cover-slideshow .btn-right");
        var showArrow = <?php echo $slideshowArrow; ?>;
        if ( showArrow ) {
            buttonLeft.addEventListener("click", previousSlide);
            buttonRight.addEventListener("click", nextSlide);
        }

        const slideContainer = document.querySelector(".cover-slideshow .slide-container");

        slideContainer.addEventListener("mouseenter", stopAutoplay);
        slideContainer.addEventListener("mouseleave", handleAutoplay);

        handleAutoplay();
    };

    return { init };
  };

  window.addEventListener("load", () => {
    const autoplay = '<?php echo $slideshowAutoplay; ?>';
    Carousel(autoplay).init();
  });
</script>

