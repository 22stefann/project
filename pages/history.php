<!DOCTYPE html>
<html lang="sr">
<?php require_once '../config.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?> - Istorija</title>
    <meta name="description" content="<?php echo $historyMetaDescription; ?>">
    <meta name="keywords" content="<?php echo $historyMetaKeywords; ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $companyName; ?>">
    <meta property="og:description" content="<?php echo $historyMetaDescription; ?>">
    <meta property="og:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:title" content="<?php echo $companyName; ?> - Istorija">
    <meta name="twitter:description" content="<?php echo $historyMetaDescription; ?>">
    <meta name="twitter:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:card" content="summary" />
    <?php require_once '../favicon.php'; ?>
    <?php require_once '../css/all_pages_css.php'; ?>
    <?php require_once '../scripts/scripts.php'; ?>
</head>
    <?php require_once '../css/style.php'; ?>
<style>
    <?php require_once '../css/history_page_style.css'; ?>
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter: <?php echo $history_bg_filter ?>;
        background-image: url('<?php echo $history_bg_image ?>');
    }
    body {
        background-color: <?php echo $history_bg_color ?>;
        background-repeat: no-repeat;
        background-size: cover;
        color: <?php echo $history_text_color ?>;
        .intro {
            background-color: <?php echo $history_page_intro_bg_color ?>;
        }
        .timeline ul li {
            background-color: <?php echo $history_line_color ?>;
        }
        .timeline ul li.in-view::after {
            background-color: <?php echo $history_line_color ?>;
        }
        .timeline ul li div {
            background-color: <?php echo $history_box_bg_color ?>;
            color: <?php echo $history_box_color ?>;;
        }
        .timeline ul li:nth-child(even) div::before {
            border-color: transparent transparent transparent <?php echo $history_box_bg_color ?>;;
        }
        .timeline ul li:nth-child(odd) div::before {
            border-color: transparent <?php echo $history_box_bg_color ?>; transparent transparent;
        }
    }
</style>
<body>
    <?php $activeTab = "HISTORY"; ?>
    <?php require_once '../components/navigation/navigation_'.$type_of_navigation.'.php' ?>
    <?php 
        if ( $sideSocialIcons ) {
            require_once '../components/homepage/social_side.php';
        }
    ?>
    <main class="all-page-padding-top">
    <section class="intro">
    <div class="container">
        <h1 class="title-h1">Istorija &darr;</h1>
    </div>
    </section>
    <section class="timeline">
        <ul>

            <?php foreach($history_array as $item) : ?>
                <li>
                    <div>
                        <p><time><?php echo $item['year'] ?></time><?php echo $item['text'] ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    </main>
    <?php if ( $show_back_to_top_button ) { require_once "../components/back_to_top.php"; } ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var animatedElements = document.querySelectorAll('.animated-element');
        function checkInView() {
        animatedElements.forEach(function(element) {
            var rect = element.getBoundingClientRect();
            var inView = (rect.top >= 0 && rect.bottom <= window.innerHeight);
            var originalPosition = parseFloat(element.getAttribute('data-original-position'));
            if (inView && !element.classList.contains('in')) {
            element.classList.add('in');
            } else if (!inView && element.classList.contains('in')) {
            element.classList.remove('in');
            element.style.transform = 'translateX(' + originalPosition + '%)';
            }
        });
        }
        window.addEventListener('scroll', checkInView);
        window.addEventListener('resize', checkInView);
        checkInView();
    });
</script>
<script>
    (function () {
    "use strict";

    // define variables
    var items = document.querySelectorAll(".timeline li");

    // check if an element is in viewport
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
            items[i].classList.add("in-view");
        }
        }
    }

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
    })();

</script>
