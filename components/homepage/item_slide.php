
<style>
    #item_slide {
        position: relative;
            background-repeat: no-repeat;
            background-size: cover;
        .top-svg {
            fill: <?php echo $item_slide_top_svg_color; ?>;
        }
        .bottom-svg {
            fill: <?php echo $item_slide_bottom_svg_color; ?>;
        }
        background-color: <?php echo $item_slide_section_bg_color; ?>;
        <?php if ( !empty($item_slide_section_bg_image) ) {   ?>
            background-image: url('<?php echo $item_slide_section_bg_image; ?>');
        <?php } ?>
    }
    .item-slide-section {
        .clear {
            clear: both;
        }
        img {
            max-width: 100%;
            border: 0px;
        }
        ul,
        ol {
            list-style: none;
        }
        a {
            text-decoration: none;
            color: inherit;
            outline: none;
            transition: all 0.4s ease-in-out;
            -webkit-transition: all 0.4s ease-in-out;
        }
        a:focus,
        a:active,
        a:visited,
        a:hover {
            text-decoration: none;
            outline: none;
        }
        a:hover {
            color: #e73700;
        }
        h2 {
            position: relative;
        }
        button {
            outline: none !important;
        }
        /******* Common Element CSS End *********/

        /* -------- title style ------- */
        .line-title {
            position: relative;
            width: 400px;
        }
        .line-title::before,
        .line-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            height: 4px;
            border-radius: 2px;
        }
        .line-title::before {
            width: 100%;
            background: #f2f2f2;
        }
        .line-title::after {
            width: 32px;
            background: #e73700;
        }

        /******* Middle section CSS Start ******/
        /* -------- Landing page ------- */
        .game-section .owl-stage {
            margin: 15px 0;
            display: flex;
            display: -webkit-flex;
        }
        .game-section .item {
            margin: 0 15px 60px;
            width: 320px;
            height: 400px;
            display: flex;
            display: -webkit-flex;
            align-items: flex-end;
            -webkit-align-items: flex-end;
            background: #343434 no-repeat center center / cover;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            transition: all 0.4s ease-in-out;
            -webkit-transition: all 0.4s ease-in-out;
            cursor: pointer;
        }
        .game-section .item.active {
            width: 500px;
            box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
        }
        .game-section .item:after {
            content: "";
            display: block;
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
        }
        .game-section .item-desc {
            padding: 0 24px 12px;
            color: <?php echo $item_slide_section_text_color; ?>;
            position: relative;
            z-index: 1;
            overflow: hidden;
            transform: translateY(calc(100% - 54px));
            -webkit-transform: translateY(calc(100% - 54px));
            transition: all 0.4s ease-in-out;
            -webkit-transition: all 0.4s ease-in-out;
        }
        .game-section .item.active .item-desc {
            transform: none;
            -webkit-transform: none;
        }
        .game-section .item-desc p {
            opacity: 0;
            -webkit-transform: translateY(32px);
            transform: translateY(32px);
            transition: all 0.4s ease-in-out 0.2s;
            -webkit-transition: all 0.4s ease-in-out 0.2s;
        }
        .game-section .item.active .item-desc p {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        .game-section .owl-theme.custom-carousel .owl-dots {
            margin-top: -20px;
            position: relative;
            z-index: 5;
        }
        /******** Middle section CSS End *******/

        /***** responsive css Start ******/

        @media (min-width: 992px) and (max-width: 1199px) {
        h2 {
            margin-bottom: 32px;
        }
        h3 {
            margin: 0 0 8px;
            font-size: 24px;
            line-height: 32px;
        }

        /* -------- Landing page ------- */
        .game-section {
            padding: 50px 30px 0 30px;
        }
        .game-section .item {
            margin: 0 12px 60px;
            width: 260px;
            height: 360px;
        }
        .game-section .item.active {
            width: 400px;
        }
        .game-section .item-desc {
            transform: translateY(calc(100% - 46px));
            -webkit-transform: translateY(calc(100% - 46px));
        }
        }

        @media (min-width: 768px) and (max-width: 991px) {
        h2 {
            margin-bottom: 32px;
        }
        h3 {
            margin: 0 0 8px;
            font-size: 24px;
            line-height: 32px;
        }
        .line-title {
            width: 330px;
        }

        /* -------- Landing page ------- */
        .game-section {
            padding: 50px 30px 40px;
        }
        .game-section .item {
            margin: 0 12px 60px;
            width: 240px;
            height: 330px;
        }
        .game-section .item.active {
            width: 360px;
        }
        .game-section .item-desc {
            transform: translateY(calc(100% - 42px));
            -webkit-transform: translateY(calc(100% - 42px));
        }
        }

        @media (max-width: 767px) {
        body {
            font-size: 14px;
        }
        h2 {
            margin-bottom: 20px;
        }
        h3 {
            margin: 0 0 8px;
            font-size: 19px;
            line-height: 24px;
        }
        .line-title {
            width: 250px;
        }

        /* -------- Landing page ------- */
        .game-section {
            padding: 30px 15px 20px;
        }
        .game-section .item {
            margin: 0 10px 40px;
            width: 280px;
            height: 280px;
        }
        .game-section .item .item-desc {
            width: 100%;
            text-align: center;
        }
        .game-section .item.active {
            width: 300px;
            box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
        }
        .game-section .item-desc {
            padding: 0 14px 5px;
            transform: translateY(calc(100% - 42px));
            -webkit-transform: translateY(calc(100% - 42px));
        }
        }
    }
</style>

<?php if ( $item_slide_top_svg ) : ?>
    <?php require "components/top_svg.php" ?>
<?php endif; ?>
<div class="item-slide-section all-section-style">
    <section class="game-section">
    <div class="owl-carousel custom-carousel owl-theme">
        <?php $br=0; foreach ($item_slide_array as $image) { ?>
            <div class="item <?php if ( $br == 0 ) { echo "active"; } $br++; ?>" style="background-image: url('<?php echo $image["img"]; ?>');">
                <div class="item-desc">
                    <h3><?php echo $image["title"]; ?></h3>
                    <p><?php echo $image["text"]; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    </section>
    </div>
<?php if ( $item_slide_bottom_svg ) : ?>
    <?php require "components/bottom_svg.php" ?>
<?php endif; ?> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<?php

$javaScripts[] = <<<JS

    $(".item-slide-section .custom-carousel").owlCarousel({
        autoWidth: true,
        loop: false,
        dots: false,
        nav: false
    });
    $(document).ready(function () {
    $(".item-slide-section .custom-carousel .item").click(function () {
        $(".item-slide-section .custom-carousel .item").not($(this)).removeClass("active");
        $(this).toggleClass("active");
    });
    });

JS;

?>
