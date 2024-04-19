<!DOCTYPE html>
<html lang="sr">
<?php require_once '../config.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?> - Kastom Strana</title>
    <meta name="description" content="<?php echo $customMetaDescription; ?>">
    <meta name="keywords" content="<?php echo $customMetaKeywords; ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $companyName; ?> - Kastom Strana">
    <meta property="og:description" content="<?php echo $customMetaDescription; ?>">
    <meta property="og:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:title" content="<?php echo $companyName; ?>">
    <meta name="twitter:description" content="<?php echo $customMetaDescription; ?>">
    <meta name="twitter:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:card" content="summary" />
    <?php require_once '../favicon.php'; ?>
    <?php require_once '../css/all_pages_css.php'; ?>
    <?php require_once '../scripts/scripts.php'; ?>
</head>
<?php require_once '../css/style.php'; ?>
<style>
    .custom-page::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter: <?php echo $custom_page_bg_filter ?>;
        background-image: url('<?php echo $custom_page_bg_image; ?>');
        background-position: center;
        z-index: -1;
    }
    .custom-page {
        width: 100%;
        background-color: <?php echo $custom_page_bg_color; ?>;
        background-size: cover;
        position: relative;
        background-attachment: <?php echo $custom_page_bg_attachment; ?>;
        h1, h2, p, a, span {
            color: <?php echo $custom_page_text_color; ?>
        }
    }
</style>
<body class="custom-page">
    <?php $activeTab = "CUSTOM"; ?>
    <?php require_once '../components/navigation/navigation_'.$type_of_navigation.'.php' ?>
    <?php 
        if ( $sideSocialIcons ) {
            require_once '../components/homepage/social_side.php';
        }
    ?>
    <main class="all-page-padding-top">
        <?php echo $customPageHtml; ?>
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
