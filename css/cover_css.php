<?php if ( $cover_content == "slideshow" ) : ?>

<style>
.cover-content .slide-texts-container {
    position: relative;
}

.cover-content .main-slideshow,
.cover-content .slide-container {
  height: max-content;
}

.cover-content .slide-texts-container {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: var(--slideshowAlpha);
}

.cover-content .slide:not(.current, .prev) {
  visibility: hidden;
}

.cover-content .title {
  color: var(--slideshow_text_color);
  text-align: center;
  padding: 20px;
  width: 85%;
}

.cover-content .slide-image,
.cover-content .title {
  position: absolute;
}

.cover-content .slideshow-h2 {
    padding-top: 24px;
    position: absolute;
    bottom: 35%;
    font-family: var(--h2FontFamily);
    color: #fff;
    font-size: 2em;
}

.cover-content .slide-image {
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100vh;
  width: 100%;
  z-index: -1;
  background-size: cover;
}

.cover-content .slide-container .current .slide-image {
  transform: translateY(100%);
  clip-path: circle(25% at 50% 50%);
  animation: slide-entry 0.5s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards, expand 1s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
}

@keyframes slide-entry {
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

.cover-content .slide-container .prev .slide-image {
    opacity: 1;
    clip-path: circle(100%);
    animation: contract 0.5s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards, slide-exit 1s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
  }
  
  @keyframes slide-exit {
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
  
  .sub-slide {
    display: none;
  }
  
  .sub-slide[data-id="0"] {
    display: block;
    opacity: 0;
    animation: current-title-entry 0.7s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
  }
  
  .cover-content .title.current,
  .cover-content .sub-slide.current {
    opacity: 0;
    animation: current-title-entry 0.7s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
  }
  
  @keyframes current-title-entry {
    0% {
      opacity: 0;
      transform: translateX(20%);
    }
    100% {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  .cover-content .title.prev,
  .cover-content .sub-slide.prev  {
    opacity: 1;
    animation: prev-title-exit 0.7s cubic-bezier(0.694, 0, 0.335, 1) 0s forwards;
  }
  
  @keyframes prev-title-exit {
    0% {
      opacity: 1;
      transform: translateY(0);
    }
  
    100% {
      opacity: 0;
      transform: translateX(-20%);
    }
  }
  
  .cover-content .slide-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: fit-content;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    color: white;
    transform: translateY(-50vh);
    padding: 0 20px;
  }
  
  .cover-content .slide-buttons li {
    padding: 15px 22px;
    color: var(--slideshow_arrow_color);
    background-color: var(--slideshow_bg_arrow_color);
    cursor: pointer;
    border-radius: 50%;
  }
  
  .cover-content .slide-buttons li:hover {
    color: var(--slideshow_hover_arrow_color);
    background-color: var(--slideshow_bg_hover_arrow_color);
  }

  

@media (max-width: 767px) {
    .cover-content .slide-buttons li {
        padding: 6px 13px;
    }
}

/*slideshow on cover end*/

<?php if ( $slideshowAnimation == 1 ) { ?>

    @keyframes expand {
        0% {
        clip-path: circle(25% at 50% 50%);
        }
        100% {
        clip-path: circle(100%);
        }
    }

    @keyframes contract {
        0% {
        clip-path: circle(100%);
        }

        100% {
        clip-path: circle(25% at 50% 50%);
        }
    }

<?php } elseif ( $slideshowAnimation == 2 ) { ?>

    @keyframes expand {
        0% {
        clip-path: circle(100%);
        }
        100% {
        clip-path: circle(100%);
        }
    }

    @keyframes contract {
        0% {
        clip-path: circle(100%);
        }

        100% {
        clip-path: circle(100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 3 ) { ?>

    @keyframes expand {
        0% {
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }
        100% {
        clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 0);
        }
    }

    @keyframes contract {
        0% {
        clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 0);
        }
        100% {
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }
    }

<?php } elseif ( $slideshowAnimation == 4 ) { ?>

    @keyframes expand {
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

    @keyframes contract {
        100% {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 5 ) { ?>

    @keyframes expand {
        50% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 25%, 0% 25%, 0% 50%, 100% 50%, 100% 75%, 0% 75%, 0% 100%, 100% 100%, 100% 0%, 75% 0%, 75% 100%, 50% 100%, 50% 0%, 25% 0%, 25% 100%, 0% 100%);
        }
        100% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

    @keyframes contract {
        100% {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 6 ) { ?>

    @keyframes expand {
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

    @keyframes contract {
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

    @keyframes expand {
        0% {
        clip-path: polygon(0% 0%, 0% 100%, 100% 100%, 100% 0%);
        }
        100% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

    @keyframes contract {
        100% {
        clip-path: polygon(0% 0%, 0% 100%, 100% 100%, 100% 0%);
        }
        0% {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }
    }

<?php } elseif ( $slideshowAnimation == 8 ) { ?>

    @keyframes expand {
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

    @keyframes contract {
        0% {
        clip-path: circle(100%);
        }

        100% {
        clip-path: circle(25% at 50% 50%);
        }
    }

<?php } elseif ( $slideshowAnimation == 9 ) { ?>

    @keyframes expand {
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

    @keyframes contract {
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

    @keyframes expand {
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

    @keyframes contract {
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

    @keyframes expand {
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

    @keyframes contract {
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

    @keyframes expand {
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

    @keyframes contract {
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

<?php elseif ( $cover_content == "video" ) : ?>

  <style>
    
  .video-on-cover {
      margin-top: var(--desktop_video_margin_top);
  }

  video#cover-video {
      position: relative;
  }
  .cover-content {
      width: 100%;
      overflow: hidden;
      height: 100vh;
      position: relative;
  }

.cover-content #audio-control {
    position: absolute;
    bottom: 30px;
    right: 16px;
    i {
        font-size: 2.5em;
        color: #fff;
        opacity: 0.7;
    }
    i:hover {
        opacity: 1;
    }
}

.cover-content #play-stop-control {
    position: absolute;
    bottom: 30px;
    left: 16px;
    i {
        font-size: 2.5em;
        color: #fff;
        opacity: 0.7;
    }
    i:hover {
        opacity: 1;
    }
}

  @media (max-width: 991px) {
    .video-on-cover {
          margin-top : var(--mobile_video_margin_top);
      }
  }

  </style>

<?php elseif ( $cover_content == "custom_cover" ) : ?>

  <style>
.cover-content {
    height: 100vh;
    .hero-contain::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        opacity: .5;
        background: url("https://img.freepik.com/free-photo/landscape-mountain-view_198169-126.jpg?w=1380&t=st=1706909588~exp=1706910188~hmac=608d7ec95ebdd46b05236c11bf7d0caa4dc382b42d1213fc4954da0df57fffa3") center/cover;
    }
    .hero-contain{
        height: 100%;
        width: 100%;
        position: relative;
        background: var(--custom_cover_bg_color);
        overflow: hidden;
        margin-top: var(--desktop_video_margin_top);
    }
    .circle{
        position: absolute;
        top: 50%;
        left: 50%;
        height: 100px;
        width: 100px;
        border-radius: 50%;
        background-color: var(--custom_cover_section_text_color);
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        text-transform: uppercase;
        z-index: 1;
    }
    .circle:before{
        content: '';
        height: 100px;
        width: 100px;
        background-color: var(--custom_cover_section_text_color);
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 50%;
        z-index: 0;
        opacity: 0;
        animation: ribble 2s infinite;
    }
    .circle-text{
        display: block;
        margin-top: 44px;
    }

    .hr-style{
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 800px;
        border: 0;
        height: 2px;
        z-index: 0;
        transform: translate(-50%, -50%) rotate(135deg);
        transition: all 0.2s;
        transform-origin: center center;
        background-color: var(--custom_cover_section_text_color);
    }
    .circle-icon {
        font-size: 2em;
        color: var(--custom_cover_section_play_btn_color);
    }
    .hr-rotate{
        transform: translate(-50%, -50%) rotate(45deg);
    }
    .text-1-tleft{
        width: 200px;
        position: absolute;
        top: 12%;
        left: 10%;
        opacity: 1;
        color: var(--custom_cover_section_text_color);
        text-transform: uppercase;
        transition: all .3s;
    }
    .t1thide{
        opacity: 0;
        left: -5%;
    }
    .text-1-bright{
        width: 200px;
        position: absolute;
        bottom: 10%;
        right: 10%;
        text-transform: uppercase;
        transition: all .3s;
        color: var(--custom_cover_section_text_color);
    }
    .t1bhide{
        opacity: 0;
        right: -5%;
    }
    .text-2-tright{
        font-weight: 600;
        width: 200px;
        position: absolute;
        top: 12%;
        right: -5%;
        opacity: 0;
        text-transform: uppercase;
        transition: all .3s;
        color: var(--custom_cover_section_text_color);
    }
    .t2tshow{
        opacity: 1;
        right: 10%;
    }
    .text-2-bleft{
        width: 200px;
        position: absolute;
        bottom: 10%;
        left: -5%;
        opacity: 0;
        text-transform: uppercase;
        transition: all .3s;
        color: var(--custom_cover_section_text_color);
    }
    .t2bshow{
        opacity: 1;
        left: 10%;
    }
    .syedshihab{
        text-decoration: none;
        display: block;
        float: right;
        margin: 8px;
        color: blueviolet;
        position: relative;
    }
}
@keyframes ribble{
    0%{
        transform: scale(1);
        opacity:1;
    }
    100%{
        transform: scale(1.5);
        opacity:0;
    }
} 
</style>

<?php else: ?>

    


<?php endif; ?>
