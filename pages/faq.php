<!DOCTYPE html>
<html lang="sr">
<?php require_once '../config.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?> - Pitanja I Odgovori</title>
    <meta name="description" content="<?php echo $faqMetaDescription; ?>">
    <meta name="keywords" content="<?php echo $faqMetaKeywords; ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $companyName; ?> - Pitanja I Odgovori">
    <meta property="og:description" content="<?php echo $faqMetaDescription; ?>">
    <meta property="og:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:title" content="<?php echo $companyName; ?>">
    <meta name="twitter:description" content="<?php echo $faqMetaDescription; ?>">
    <meta name="twitter:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:card" content="summary" />

    <?php require_once '../favicon.php'; ?>
    <?php require_once '../css/all_pages_css.php'; ?>
    <?php require_once '../scripts/scripts.php'; ?>
</head>
<?php require_once '../css/style.php'; ?>
<style>
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter: <?php echo $faq_page_bg_filter ?>;
        background-image: url('<?php echo $faq_page_bg_image ?>');
    }
    body {
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        background-color: <?php echo $faq_page_bg_color ?>;
    }
    .faq-page {
        .faq_section.container h1,
        .faq_section.container p,
        .faq_section.container h2,
        .faq_section .accordion button[aria-expanded='true'],
        .faq_section .accordion .accordion-item button[aria-expanded='true'],
        .faq_section .accordion .accordion-content p,
        .faq_section .accordion button:hover, 
        .accordion button:focus {
            color: <?php echo $faq_page_text_color; ?>;
        }
        #faq-section {
            padding-top: 0;
        }
        .faq_section .accordion .accordion-item button[aria-expanded='true'] {
            border-bottom-color: <?php echo $faq_page_text_color; ?>;
        }
    }
</style>
<body>
    <?php $activeTab = "FAQ"; ?>
    <?php require_once '../components/navigation/navigation_'.$type_of_navigation.'.php' ?>
    <?php 
        if ( $sideSocialIcons ) {
            require_once '../components/homepage/social_side.php';
        }
    ?>
    <main class="all-page-padding-top faq-page">
        <?php require_once '../components/homepage/faq.php' ?>
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

    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>

<script>
// Selektiraj prvi <h> element
var firstTitle = document.querySelector('h1, h2, h3, h4, h5, h6');

// Provjeri je li selektirani element <h1> ili većeg ranga
if (firstTitle.tagName !== 'H1') {
    // Kreiraj novi <h1> element
    var newTitle = document.createElement('h1');
    // Kopiraj sadržaj selektiranog elementa u novi <h1>
    newTitle.innerHTML = firstTitle.innerHTML;
    // Kopiraj klase selektiranog elementa u novi <h1>
    newTitle.className = firstTitle.className;
    // Zamijeni selektirani element novim <h1> elementom
    firstTitle.parentNode.replaceChild(newTitle, firstTitle);
}
</script>
