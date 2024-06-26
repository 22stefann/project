<!DOCTYPE html>
<html lang="sr">
<?php require_once '../config.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?> - O Nama</title>
    <meta name="description" content="<?php echo $aboutMetaDescription; ?>">
    <meta name="keywords" content="<?php echo $aboutMetaKeywords; ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $companyName; ?> - O Nama">
    <meta property="og:description" content="<?php echo $aboutMetaDescription; ?>">
    <meta property="og:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:title" content="<?php echo $companyName; ?>">
    <meta name="twitter:description" content="<?php echo $aboutMetaDescription; ?>">
    <meta name="twitter:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:card" content="summary" />
    <link rel="canonical" href="<?php echo $domain_name; ?>o-nama">
    <?php require_once '../favicon.php'; ?>
    <?php require_once '../css/all_pages_css.php'; ?>
    <?php require_once '../scripts/scripts.php'; ?>
    <!--map script -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!--map Leaflet.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<?php require_once '../css/style.php'; ?>
<style>
.about-cover::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-attachment: fixed;
    background-position-y: 50%;
    filter: <?php echo $about_us_page_bg_filter ?>;
    background-image: url('<?php echo $about_us_page_bg_image ?>');
}
.about-cover {
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    height: 100vh;
    position: relative;
    background-color: <?php echo $about_us_page_bg_color ?>;
    h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        color: <?php echo $about_us_page_title_color; ?>;
    }
}
.row {
    margin: 0;
}
.about-page-content {
    background-color: <?php echo $about_us_page_items_bg_color; ?>;
}
#btn-back-to-top {
    bottom: 70px !important;
    left: 7px;
    right: unset !important;
}
@media (max-width: 767px) {

    <?php if (!empty($about_page_reverse)) { ?>
        <?php foreach($about_page_reverse as $item) { ?>
            .about-page-content .row:nth-of-type(<?php echo $item; ?>) {
                <?php echo "flex-direction: column-reverse;"; ?>
            }
        <?php } ?>
    <?php } ?>
}
</style>
<body>
    <?php $activeTab = "ABOUT"; ?>
    <?php require_once '../components/navigation/navigation_'.$type_of_navigation.'.php' ?>
    <?php 
        if ( $sideSocialIcons ) {
            require_once '../components/homepage/social_side.php';
        }
    ?>
    <main class="">
        <div class="about-cover">
            <h1 class="title-h1">
                O Nama
            </h1>
        </div>
        <?php if ($about_page_gallery_show) : ?>
            <?php require_once "../components/homepage/images_crop.php"; ?>
        <?php endif; ?>
        <div class="about-page-content">
            <?php echo $about_us_page_content; ?>
        </div>
        <?php if ($about_page_map == "map_v1" && $about_page_map_show) : ?>
            <?php require_once "../components/homepage/map_v1.php"; ?>
        <?php else : ?>
            <?php require_once "../components/homepage/map_v2.php"; ?>
        <?php endif; ?>
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
