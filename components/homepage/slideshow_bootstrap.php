<style>
#carouselSlideshow-v2 {
    .top-svg {
        fill: <?php echo $slideshow_bootstrap_top_svg_color; ?>;
        z-index: 1;
    }
    .bottom-svg {
        fill: <?php echo $slideshow_bootstrap_bottom_svg_color; ?>;
        z-index: 1;
    }
    overflow: hidden;
    background-color: var(--bootstrapSlideshowBg);
    .title-h1, .subtitle-h2, .title-h3, p {
        color: var(--slideshow_text_color);
    }
    .carousel-indicators [data-bs-target] {
        background-color: var(--slideshow_text_color);
    }
    .carousel-indicators [data-bs-target]:hover {
        opacity: 1;
    }
}

#carouselSlideshow-v2 .carousel-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center; 
    z-index: -1; 
    filter: var(--slideshowBootstrapAlpha);
}

#carouselSlideshow-v2 .carousel-item {
    position: relative; 
    transition: transform 0.6s ease-in-out;
    min-width: 100%;
}

#carouselSlideshow-v2 .carousel-inner {
    display: flex;
}

#carouselSlideshow-v2 .carousel-item {
    transition: transform 0.6s ease-in-out;
    min-width: 100%;
}

#carouselSlideshow-v2 .carousel-item {
    transform: translateX(0);
}

#carouselSlideshow-v2 .carousel-item-next,
#carouselSlideshow-v2 .carousel-item-prev,
#carouselSlideshow-v2 .carousel-item.active {
    display: flex;
}

#carouselSlideshow-v2 .carousel-item-next,
#carouselSlideshow-v2 .carousel-item-prev {
    position: absolute;
    top: 0;
    width: 100%;
}

#carouselSlideshow-v2 .carousel-item-next {
    transform: translateX(100%);
    z-index: 9;
}

#carouselSlideshow-v2 .carousel-item-prev {
    transform: translateX(-100%);
    z-index: 9;
}

#carouselSlideshow-v2 .carousel-item-end {
    transform: translateX(0) !important;
}

#carouselSlideshow-v2 .carousel-item-start {
    transform: translateX(0) !important;
}

#carouselSlideshow-v2 .bootstrap-slideshow-btn {
    border-radius: 50%;
    background: var(--slideshow_bg_arrow_color);
    color: var(--slideshow_arrow_color);
    width: 60px;
    height: 60px;
    top: 50%;
    transform: translateY(-50%);
    margin: 0 10px;
}

<?php if ( $slideshow_arrow_color == "#fff" ) : ?>

.carousel-dark .carousel-control-next-icon, 
.carousel-dark .carousel-control-prev-icon {
    filter: unset;
}

<?php endif; ?>

#carouselSlideshow-v2 {
    background-color: var(--bootstrapSlideshowBg);
    <?php if ( $slideshowBootstrapHorizontalAlign == "" && $slideshowBootstrapVerticalAlign == "" ) { ?>
        #wwww {
            
        }
    <?php } elseif ( $slideshowBootstrapHorizontalAlign == "bottom" && $slideshowBootstrapVerticalAlign == "bottom" ) { ?>
        
        .carousel-caption {
            text-align: var(--slideshowBootstrapTextAlign);
            top: 80%;
            transform: translateY(-80%);
            bottom: unset;
        }
    <?php } elseif ( $slideshowBootstrapHorizontalAlign == "top" && $slideshowBootstrapVerticalAlign == "top" ) { ?>
        .carousel-caption {
            text-align: var(--slideshowBootstrapTextAlign);
            top: 20%;
            transform: translateY(-20%);
            bottom: unset;
        }
    <?php } elseif ( $slideshowBootstrapHorizontalAlign == "center" && $slideshowBootstrapVerticalAlign == "center" ) { ?>
        .carousel-caption {
            text-align: var(--slideshowBootstrapTextAlign);
            top: 50%;
            transform: translateY(-50%);
            bottom: unset;
        }
    <?php } ?>
}
#carouselSlideshow-v2,
#carouselSlideshow-v2 .carousel-item {
    height: var(--slideshowSectionDesktopHeight);
}

.cover-content  #carouselSlideshow-v2,
.cover-content  #carouselSlideshow-v2 .carousel-item {
    height: 100vh;
}

@media (max-width: 767px) {
    #carouselSlideshow-v2,
    #carouselSlideshow-v2 .carousel-item {
        height: var(--slideshowSectionMobileHeight);
    }
    .cover-content #carouselSlideshow-v2 {
        margin-top: var(--mobile_video_margin_top);
    }
    .cover-content #carouselSlideshow-v2,
    .cover-content #carouselSlideshow-v2 .carousel-item {
        height: var(--slideshowSectionMobileHeight);
    }

    #carouselSlideshow-v2 .bootstrap-slideshow-btn {
        width: 40px;
        height: 40px;
    }
    <?php if ( !$slideshowMobileArrow ) {
        echo '.bootstrap-slideshow-btn {
            display: none;
        }';
    } ?>

}
</style>
<div id="carouselSlideshow-v2" class="carousel carousel-dark slide">
    <?php if ( $slideshow_bootstrap_top_svg ) : ?>
        <?php require "components/top_svg.php" ?>
    <?php endif; ?>
    <div class="carousel-indicators">
        <?php $slideBr=0; ?>
        <?php foreach ($slideshow_array as $slide) : ?>
            <button type="button" data-bs-target="#carouselSlideshow-v2" data-bs-slide-to="<?php echo $slideBr; ?>" aria-current="<?php echo ($slideBr == 0) ? 'true' : 'false'; ?>" class="dot-slideshow-v2 <?php echo ($slideBr == 0) ? 'active' : ''; ?>" aria-label="Slide <?php echo $slideBr; ?>"></button>
            <?php $slideBr++; ?>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
        <?php $slideBr=0; ?>
        <?php $slideBgBr=1; ?>
        <?php foreach ($slideshow_array as $slide) : ?>
            <div data-bs-interval="1000000000" class="carousel-item <?php echo ($slideBr == 0) ? 'active' : ''; ?>">
                <div class="carousel-caption d-md-block">
                    <?php if ($slide["data-id"] == "0") : ?>
                        <h1 class="title-h1"><?php echo $slide["h2"]; ?></h1>
                        <?php echo $slide["text"]; ?>
                    <?php else: ?>
                        <h2 class="subtitle-h2"><?php echo $slide["h2"]; ?></h2>
                        <?php echo $slide["text"]; ?>
                    <?php endif; ?>
                </div>
            </div>
            <style>
                #carouselSlideshow-v2 .carousel-item:nth-of-type(<?php echo $slideBgBr++; ?>)::before {
                    background-image: url('custom/<?php echo $slide["img"]; ?>');
                }
            </style>
            <?php $slideBr++; ?>
        <?php endforeach; ?>
    </div>
    <?php if ( $slideshowArrow ) : ?>
        <button class="carousel-control-prev bootstrap-slideshow-btn" type="button" data-bs-target="#carouselSlideshow-v2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bootstrap-slideshow-btn" type="button" data-bs-target="#carouselSlideshow-v2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    <?php endif; ?>
    
    <?php if ( $slideshow_bootstrap_bottom_svg ) : ?>
        <?php require "components/bottom_svg.php" ?>
    <?php endif; ?>
</div>

<script>
    
    <?php if ( $slideshowBootstrapAutoplay ) : ?>
        $(document).ready(function() {
            var intervalId;

            function startCarouselInterval() {
                intervalId = setInterval(function() {
                $('#carouselSlideshow-v2').carousel('next');
                }, <?php echo $slideshowDelay; ?>);
            }

            $('#carouselSlideshow-v2').carousel();
            startCarouselInterval();


            $('.carousel-control-prev, .carousel-control-next, .dot-slideshow-v2').on('click', function() {
                clearInterval(intervalId); 
                startCarouselInterval(); 
            });
        });
    <?php else: ?>
        $(document).ready(function() {
            $('#carouselSlideshow-v2').carousel();
        });
    <?php endif; ?>
</script>