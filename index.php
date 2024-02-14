<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bravarija RIS</title>
    <?php require_once 'css/all_pages_css.php'; ?>
    <?php require_once 'scripts/scripts.php'; ?>
    <!-- Lightbox2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
    <!-- Lightbox2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <?php require_once 'config.php'; ?>
    <?php require_once 'css/style.php'; ?>
<style>
    @import url(<?php echo $googleFont; ?>);
</style>
<?php if ( !empty($cover_content) ) { 
    require_once 'css/cover_css.php';
} ?>
<body>
    <?php require_once 'components/navigation/navigation_'.$type_of_navigation.'.php' ?>
    <?php 
        if ( $sideSocialIcons ) {
            require_once 'components/homepage/social_side.php';
        }
    ?>
    <main>

    </main>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
</body>
</html>
