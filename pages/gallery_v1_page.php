<!DOCTYPE html>
<html lang="en">
<?php require_once '../config.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?> - Galerija</title>
    <meta name="description" content="<?php echo $galleryMetaDescription; ?>">
    <meta name="keywords" content="<?php echo $galleryMetaKeywords; ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $companyName; ?>">
    <meta property="og:description" content="<?php echo $galleryMetaDescription; ?>">
    <meta property="og:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:title" content="<?php echo $companyName; ?> - Galerija">
    <meta name="twitter:description" content="<?php echo $galleryMetaDescription; ?>">
    <meta name="twitter:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:card" content="summary" />
    <?php require_once '../favicon.php'; ?>
    <?php require_once '../css/all_pages_css.php'; ?>
    <?php require_once '../scripts/scripts.php'; ?>
</head>
<?php require_once '../css/style.php'; ?>
<style>
    main {
        padding-top: 70px;
    }
    figure {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: auto;
        grid-auto-flow: dense;
        justify-items: stretch; 
        align-items: stretch; 
        gap: 2svmin;
        margin-bottom: 0;
    }

    figure img {
    width:100%;
    aspect-ratio: 16 / 9;
    object-fit: cover;
    }

    .fullscreen-image {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .fullscreen-image img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
    }

    .fullscreen-image-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .fullscreen-image-container img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
    }

    .prev-btn,
    .next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
        color: #333;
        font-size: 24px;
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .prev-btn:hover,
    .next-btn:hover {
        background-color: rgba(255, 255, 255, 0.8);
    }

    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }

    @media (min-width:500px) {
        figure {
        grid-template-columns: repeat(2, 1fr);
        }  
        img:nth-of-type(11) {
        grid-row: span 2 / auto;
        }
    }

    @media (min-width:1000px) {
        figure {
        grid-template-columns: repeat(4, 1fr);
        gap: 1svmin;
        }  
        
        img:where(:nth-of-type(3), :nth-of-type(12)) {
        grid-row: span 2 / auto;
        grid-column: span 2 / auto;
        }

        img:nth-of-type(5) {
        grid-column: span 2 / auto;
        }
        
        img:nth-of-type(15) {
        grid-column: span 2 / auto;
        }
    }

    @media (max-width:767px) {
        .prev-btn {
            left: 25px;
        }
        .next-btn {
            right: 25px;
        }
    }

</style>
<body>
    <?php $activeTab = "GALERIJA"; ?>
    <?php require_once '../components/navigation/navigation_'.$type_of_navigation.'.php' ?>
    <?php 
        if ( $sideSocialIcons ) {
            require_once '../components/homepage/social_side.php';
        }
    ?>
    <main>
        <h1 class="title-h1 no-view-text">Galerija</h1>
        <figure>
            <?php shuffle($gallery_page_array); ?>
            <?php foreach ($gallery_page_array as $image) { ?>
                <img src="custom/gallery/<?php echo $image["img"]; ?>" class="img-responsive" alt="">
            <?php } ?>
        </figure>
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
document.addEventListener('DOMContentLoaded', function() {
    var images = document.querySelectorAll('figure img');
    var currentIndex = 0;
    var fullscreenImage;

    images.forEach(function(image, index) {
        image.addEventListener('click', function() {
            currentIndex = index;
            openFullscreenImage(image.src);
        });
    });

    function openFullscreenImage(src) {
        fullscreenImage = document.createElement('div');
        fullscreenImage.classList.add('fullscreen-image');
        fullscreenImage.innerHTML = `
            <img src="${src}" alt="">
            <button class="prev-btn">Nazad</button>
            <button class="next-btn">Napred</button>
        `;
        document.body.appendChild(fullscreenImage);
        
        // Event listeneri za listanje prethodnih i sledećih slika
        fullscreenImage.querySelector('.prev-btn').addEventListener('click', showPrevImage);
        fullscreenImage.querySelector('.next-btn').addEventListener('click', showNextImage);
        
        // Zatvaranje slike u punoj veličini klikom na nju
        fullscreenImage.addEventListener('click', function(event) {
            if (event.target === fullscreenImage) {
                closeFullscreenImage();
            }
        });
    }

    function closeFullscreenImage() {
        fullscreenImage.remove();
    }

    function showPrevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        var prevSrc = images[currentIndex].src;
        fullscreenImage.querySelector('img').src = prevSrc;
    }

    function showNextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        var nextSrc = images[currentIndex].src;
        fullscreenImage.querySelector('img').src = nextSrc;
    }
});
</script>
