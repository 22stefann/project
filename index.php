<!DOCTYPE html>
<html lang="sr">
<?php require_once 'config.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?></title>
    <meta name="description" content="<?php echo $indexMetaDescription; ?>">
    <meta name="keywords" content="<?php echo $indexMetaKeywords; ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $companyName; ?>">
    <meta property="og:description" content="<?php echo $indexMetaDescription; ?>">
    <meta property="og:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:title" content="<?php echo $companyName; ?>">
    <meta name="twitter:description" content="<?php echo $indexMetaDescription; ?>">
    <meta name="twitter:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:card" content="summary" />
    <link rel="canonical" href="<?php echo $domain_name; ?>">

    <?php require_once 'favicon.php'; ?>
    <?php require_once 'css/all_pages_css.php'; ?>
    <?php require_once 'scripts/scripts.php'; ?>
    <!-- Lightbox2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
    <!-- Lightbox2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
    <!-- Script for item slide section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!--map script -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!--map Leaflet.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
    <?php require_once 'css/style.php'; ?>
    <?php if ( !empty($cover_content) ) { 
        require_once 'css/cover_css.php';
    } ?>
<body>
    <?php $activeTab = "HOME"; ?>
    <?php require_once 'components/navigation/navigation_'.$type_of_navigation.'.php' ?>
    <?php 
        if ( $sideSocialIcons ) {
            require_once 'components/homepage/social_side.php';
        }
    ?>
    <main>
        <section>
            <?php if (!empty($cover_content)) {
                require_once 'components/cover/cover_content.php';
            } ?>
        </section>
        <?php foreach( $homepageSection as $one_section ) : ?>
            <section id="<?php echo $one_section; ?>">
                <?php require_once 'components/homepage/'.$one_section.'.php'; ?>
            </section>
        <?php endforeach; ?>
    </main>
    <?php if (!empty($cover_content)) { require_once 'popup/popup.php';} ?>
    <?php if ( $show_back_to_top_button ) { require_once "components/back_to_top.php"; } ?>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    var all_section_animation = <?php echo $all_section_animation; ?>;
    all_section_animation.forEach(function(sectionClass) {
        var elements = document.querySelectorAll('.' + sectionClass + ' *');
        elements.forEach(function(element) {
            element.classList.add('animated-element');
            element.classList.add('animate-left');
        });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    if ($('h1').length === 0) {
        var firstH = $('h2, h3, h4, h5, h6').first();
        if (firstH.length !== 0) {
        var newH1 = $('<h1>').addClass(firstH.attr('class')).text(firstH.text());
        firstH.replaceWith(newH1);
        } else {
        }
    } else {
    }
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var animatedElements = document.querySelectorAll('.animated-element');
        function checkInView() {
        animatedElements.forEach(function(element) {
            console.log(element);
            var rect = element.getBoundingClientRect();
            var inView = (rect.top >= 0 && rect.bottom <= window.innerHeight);
            var originalPosition = parseFloat(element.getAttribute('data-original-position'));
            if (inView && !element.classList.contains('in')) {
            element.classList.add('in');
            } else if (!inView && element.classList.contains('in')) {
            //element.classList.remove('in');
            element.style.transform = 'translateX(' + originalPosition + '%)';
            }
        });
        }
        window.addEventListener('scroll', checkInView);
        window.addEventListener('resize', checkInView);
        checkInView();
    });
</script>
<?php
    foreach ($javaScripts as $oneScript) {
        echo "<script>{$oneScript}</script>";
    }
?>