<style>
    #cool_section {
        position: relative;
        .top-svg {
            fill: <?php echo $cool_top_svg_color; ?>;
        }
        .bottom-svg {
            fill: <?php echo $cool_bottom_svg_color; ?>;
        }
    }
    .cool-section {
        background-color: <?php echo $cool_section_bg_color; ?>;
        *, *:before, *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        }
        .cont {
        position: relative;
        overflow: hidden;
        height: <?php echo $cool_section_height; ?>;
        padding: 0 10px;
        }
        .cont__inner {
        position: relative;
        height: 100%;
        }
        .cont__inner:hover .el__bg:after {
        opacity: 1;
        }
        .el {
        position: absolute;
        left: 0;
        top: 0;
        width: 19.2%;
        height: 100%;
        background: #252525;
        transition: transform 0.6s 0.7s, width 0.7s, opacity 0.6s 0.7s, z-index 0s 1.3s;
        will-change: transform, width, opacity;
        }
        .el:not(.s--active) {
        cursor: pointer;
        }
        .el__overflow {
        overflow: hidden;
        position: relative;
        height: 100%;
        }
        .el__inner {
        overflow: hidden;
        position: relative;
        height: 100%;
        transition: transform 1s;
        }
        .cont.s--inactive .el__inner {
        transform: translate3d(0, 100%, 0);
        }
        .el__bg {
        position: relative;
        width: calc(100vw - 140px);
        height: 100%;
        transition: transform 0.6s 0.7s;
        will-change: transform;
        }
        .el__bg:before {
        content: "";
        position: absolute;
        left: 0;
        top: -5%;
        width: 100%;
        height: 110%;
        background-size: cover;
        background-position: center center;
        transition: transform 1s;
        transform: translate3d(0, 0, 0) scale(1);
        }
        .cont.s--inactive .el__bg:before {
        transform: translate3d(0, -100%, 0) scale(1.2);
        }
        .el.s--active .el__bg:before {
        transition: transform 0.8s;
        }
        .el__bg:after {
        content: "";
        z-index: 1;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        opacity: 0;
        transition: opacity 0.5s;
        }
        .cont.s--el-active .el__bg:after {
        transition: opacity 0.5s 1.4s;
        opacity: 1 !important;
        }
        .el__preview-cont {
        z-index: 2;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transition: all 0.3s 1.2s;
        }
        .cont.s--inactive .el__preview-cont {
        opacity: 0;
        transform: translateY(10px);
        }
        .cont.s--el-active .el__preview-cont {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.5s;
        }
        .el__heading {
        color: #fff;
        text-transform: uppercase;
        font-size: 18px;
        }
        .el__content {
        z-index: -1;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        padding: 30px;
        opacity: 0;
        pointer-events: none;
        transition: all 0.1s;
        }
        .el.s--active .el__content {
        z-index: 2;
        opacity: 1;
        pointer-events: auto;
        transition: all 0.5s 1.4s;
        }
        .el__text {
        text-transform: uppercase;
        font-size: 40px;
        color: <?php echo $cool_section_text_color; ?>;
        }
        .el__close-btn {
        z-index: -1;
        position: absolute;
        right: 10px;
        top: 10px;
        width: 60px;
        height: 60px;
        opacity: 0;
        pointer-events: none;
        transition: all 0s 0.45s;
        cursor: pointer;
        }
        .el.s--active .el__close-btn {
        z-index: 5;
        opacity: 1;
        pointer-events: auto;
        transition: all 0s 1.4s;
        }
        .el__close-btn:before, .el__close-btn:after {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 8px;
        margin-top: -4px;
        background: #fff;
        opacity: 0;
        transition: opacity 0s;
        }
        .el.s--active .el__close-btn:before, .el.s--active .el__close-btn:after {
        opacity: 1;
        background-color: <?php echo $cool_section_text_color; ?>;;
        }
        .el__close-btn:before {
        transform: rotate(45deg) translateX(100%);
        }
        .el.s--active .el__close-btn:before {
        transition: all 0.3s 1.4s cubic-bezier(0.72, 0.09, 0.32, 1.57);
        transform: rotate(45deg) translateX(0);
        }
        .el__close-btn:after {
        transform: rotate(-45deg) translateX(100%);
        }
        .el.s--active .el__close-btn:after {
        transition: all 0.3s 1.55s cubic-bezier(0.72, 0.09, 0.32, 1.57);
        transform: rotate(-45deg) translateX(0);
        }
        .el__index {
        overflow: hidden;
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        min-height: 250px;
        text-align: center;
        font-size: 20vw;
        line-height: 0.85;
        font-weight: bold;
        transition: transform 0.5s, opacity 0.3s 1.4s;
        transform: translate3d(0, 1vw, 0);
        }
        .el:hover .el__index {
        transform: translate3d(0, 0, 0);
        }
        .cont.s--el-active .el__index {
        transition: transform 0.5s, opacity 0.3s;
        opacity: 0;
        }
        .el__index-back, .el__index-front {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        }
        .el__index-back {
        color: #2f3840;
        opacity: 0;
        transition: opacity 0.25s 0.25s;
        }
        .el:hover .el__index-back {
        transition: opacity 0.25s;
        opacity: 1;
        }
        .el__index-overlay {
        overflow: hidden;
        position: relative;
        transform: translate3d(0, 100%, 0);
        transition: transform 0.5s 0.1s;
        color: transparent;
        }
        .el__index-overlay:before {
        content: attr(data-index);
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        color: #fff;
        transform: translate3d(0, -100%, 0);
        transition: transform 0.5s 0.1s;
        }
        .el:hover .el__index-overlay {
        transform: translate3d(0, 0, 0);
        }
        .el:hover .el__index-overlay:before {
        transform: translate3d(0, 0, 0);
        }
        .el:nth-child(1) {
        transform: translate3d(0%, 0, 0);
        transform-origin: 50% 50%;
        }
        .cont.s--el-active .el:nth-child(1):not(.s--active) {
        transform: scale(0.5) translate3d(0%, 0, 0);
        opacity: 0;
        transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(1) .el__inner {
        transition-delay: 0s;
        }
        .el:nth-child(1) .el__bg {
        transform: translate3d(0%, 0, 0);
        }
        .el:nth-child(1) .el__bg:before {
        transition-delay: 0s;
        }
        .el:nth-child(2) {
        transform: translate3d(105.2083333333%, 0, 0);
        transform-origin: 155.2083333333% 50%;
        }
        .cont.s--el-active .el:nth-child(2):not(.s--active) {
        transform: scale(0.5) translate3d(105.2083333333%, 0, 0);
        opacity: 0;
        transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(2) .el__inner {
        transition-delay: 0.1s;
        }
        .el:nth-child(2) .el__bg {
        transform: translate3d(-19.2%, 0, 0);
        }
        .el:nth-child(2) .el__bg:before {
        transition-delay: 0.1s;
        }
        .el:nth-child(3) {
        transform: translate3d(210.4166666667%, 0, 0);
        transform-origin: 260.4166666667% 50%;
        }
        .cont.s--el-active .el:nth-child(3):not(.s--active) {
        transform: scale(0.5) translate3d(210.4166666667%, 0, 0);
        opacity: 0;
        transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(3) .el__inner {
        transition-delay: 0.2s;
        }
        .el:nth-child(3) .el__bg {
        transform: translate3d(-38.4%, 0, 0);
        }
        .el:nth-child(3) .el__bg:before {
        transition-delay: 0.2s;
        }
        .el:nth-child(4) {
        transform: translate3d(315.625%, 0, 0);
        transform-origin: 365.625% 50%;
        }
        .cont.s--el-active .el:nth-child(4):not(.s--active) {
        transform: scale(0.5) translate3d(315.625%, 0, 0);
        opacity: 0;
        transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(4) .el__inner {
        transition-delay: 0.3s;
        }
        .el:nth-child(4) .el__bg {
        transform: translate3d(-57.6%, 0, 0);
        }
        .el:nth-child(4) .el__bg:before {
        transition-delay: 0.3s;
        }
        .el:nth-child(5) {
        transform: translate3d(420.8333333333%, 0, 0);
        transform-origin: 470.8333333333% 50%;
        }
        .cont.s--el-active .el:nth-child(5):not(.s--active) {
        transform: scale(0.5) translate3d(420.8333333333%, 0, 0);
        opacity: 0;
        transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(5) .el__inner {
        transition-delay: 0.4s;
        }
        .el:nth-child(5) .el__bg {
        transform: translate3d(-76.8%, 0, 0);
        }
        .el:nth-child(5) .el__bg:before {
        transition-delay: 0.4s;
        }
        .el:hover .el__bg:after {
        opacity: 0;
        }
        .el.s--active {
        z-index: 1;
        width: 100%;
        transform: translate3d(0, 0, 0);
        transition: transform 0.6s, width 0.7s 0.7s, z-index 0s;
        }
        .el.s--active .el__bg {
        transform: translate3d(0, 0, 0);
        transition: transform 0.6s;
        }
        .el.s--active .el__bg:before {
        transition-delay: 0.6s;
        transform: scale(1.1);
        }
        .icon-link {
        position: absolute;
        left: 5px;
        bottom: 5px;
        width: 32px;
        }
        .icon-link img {
        width: 100%;
        vertical-align: top;
        }
        .icon-link--twitter {
        left: auto;
        right: 5px;
        }

        <?php $br=1; foreach ($cool_array as $image) : ?>
            <?php echo "
                            .el:nth-child(".$br++.") .el__bg:before {
                                background-image: url('".$image['img']."');
                            }
            "; ?>
        <?php endforeach; ?>

    }
    .cool-section .el.s--active .el__bg {
        width: 100%;
    }

    @media (max-width: 767px) {
        .cool-section .cont {
            height: 30vh;
        }
    }
    
</style>
<?php if ( $cool_top_svg ) : ?>
    <?php require "components/top_svg.php" ?>
<?php endif; ?>
<div class="cool-section all-section-style">
    <div class="cont s--inactive">
    <!-- cont inner start -->
    <div class="cont__inner">
        <?php $br=1; foreach ($cool_array as $image) { ?>
        <!-- el start -->
            <div class="el">
                <div class="el__overflow">
                    <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                    </div>
                    <div class="el__content">
                        <div class="el__text"><?php echo $image['text']; ?></div>
                        <div class="el__close-btn"></div>
                    </div>
                    </div>
                </div>
                <div class="el__index">
                    <div class="el__index-back"><?php echo $br; ?></div>
                    <div class="el__index-front">
                    <div class="el__index-overlay" data-index="<?php echo $br; ?>"><?php echo $br++; ?></div>
                    </div>
                </div>
            </div>
        <!-- el end -->
        <?php } ?>

    </div>
    <!-- cont inner end -->
    </div>
</div>

<?php if ( $cool_bottom_svg ) : ?>
    <?php require "components/bottom_svg.php" ?>
<?php endif; ?> 

<script>

var $cont = document.querySelector('.cool-section .cont');
var $elsArr = [].slice.call(document.querySelectorAll('.cool-section .el'));
var $closeBtnsArr = [].slice.call(document.querySelectorAll('.cool-section .el__close-btn'));

setTimeout(function() {
  $cont.classList.remove('s--inactive');
}, 200);

$elsArr.forEach(function($el) {
  $el.addEventListener('click', function() {
    if (this.classList.contains('s--active')) return;
    $cont.classList.add('s--el-active');
    this.classList.add('s--active');
  });
});

$closeBtnsArr.forEach(function($btn) {
  $btn.addEventListener('click', function(e) {
    e.stopPropagation();
    $cont.classList.remove('s--el-active');
    document.querySelector('.cool-section .el.s--active').classList.remove('s--active');
  });
});
</script>