<!DOCTYPE html>
<html lang="en">
<?php require_once '../config.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?> - Kontakt</title>
    <meta name="description" content="<?php echo $contactMetaDescription; ?>">
    <meta name="keywords" content="<?php echo $contactMetaKeywords; ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $companyName; ?>">
    <meta property="og:description" content="<?php echo $contactMetaDescription; ?>">
    <meta property="og:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:title" content="<?php echo $companyName; ?> - Kontakt">
    <meta name="twitter:description" content="<?php echo $contactMetaDescription; ?>">
    <meta name="twitter:image" content="<?php echo $socialShareImage; ?>">
    <meta name="twitter:card" content="summary" />

    <?php require_once '../favicon.php'; ?>
    <?php require_once '../css/all_pages_css.php'; ?>
    <?php require_once '../scripts/scripts.php'; ?>
    <!--map Leaflet.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
    <?php require_once '../css/style.php'; ?>
<style>

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter: <?php echo $contact_page_bg_filter ?>;
        background-image: url('<?php echo $contact_page_bg_image; ?>');
    }
    body {
        min-height: 100vh;
        width: 100%;
        background-color: <?php echo $contact_page_bg_color; ?>;
        background-size: cover;
        background-position: center;
        position: relative;
        background-attachment: fixed;
    }

    section {
        position: relative;
        z-index: 3;
        padding-bottom: 50px;
        h1 {
            color: <?php echo $contact_page_text_color; ?>;
        }
    }

    <?php if ($contact_page_show_map == "map_v1" ) : ?>
        #btn-back-to-top {
            left: 7px !important;
            bottom: 55px !important;
            right: unset !important;
        }
    <?php endif; ?>

    .container {
        max-width: 1080px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 20px;
        padding-right: 20px;
    }

    .section-header {
        margin-bottom: 50px;
        text-align: center;
    }

    .section-header h2 {
        color: <?php echo $contact_page_subtitle_color; ?>;
        font-weight: bold;
        font-size: 3em;
        margin-bottom: 20px;
    }

    .section-header p {
        color: <?php echo $contact_page_text_color; ?>;
    }

    .row  {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
    }

    .contact-info {
        width: 50%;
        a {
            color: <?php echo $contact_page_text_color; ?>;
        }
    }

    .contact-info-item {
        display: flex;
        margin-bottom: 30px;
    }

    .contact-info-icon {
        height: 70px;
        width: 70px;
        background-color: #fff;
        text-align: center;
        border-radius: 50%;
    }

    .contact-info-icon i {
        font-size: 30px;
        line-height: 70px;
    }

    .contact-info-content {
        margin-left: 20px;
    }

    .contact-info-content h2 {
        color: <?php echo $contact_page_subtitle_color; ?>;
        margin-bottom: 5px;
    }

    .contact-info-content p {
        color: <?php echo $contact_page_text_color; ?>;
    }

    .contact-form {
        background-color: <?php echo $contact_page_form_bg_color; ?>;
        padding: 40px;
        width: 45%;
        padding-bottom: 20px;
        padding-top: 20px;
    }

    .contact-form h2 {
        margin-bottom: 10px;
        color: <?php echo $contact_page_form_text_color; ?>;
    }

    .contact-form .input-box {
        position: relative;
        width: 100%;
        margin-top: 10px;
    }

    .contact-form .input-box input,
    .contact-form .input-box textarea{
        width: 100%;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        border: none;
        border-bottom: 2px solid #333;
        outline: none;
        resize: none;
    }

    .contact-form .input-box span {
        position: absolute;
        left: 0;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        pointer-events: none;
        transition: 0.5s;
        color: <?php echo $contact_page_form_text_color; ?>;
    }

    .contact-form .input-box input:focus ~ span,
    .contact-form .input-box textarea:focus ~ span{
        color: #e91e63;
        font-size: 12px;
        transform: translateY(-20px);
    }

    .contact-form .input-box button[type="submit"] {
        width: 100%;
        border: none;
        cursor: pointer;
        padding: 10px;
        transition: 0.5s;
    }
    @media (max-width: 991px) {
        section {
            padding-bottom: 50px;
        }
        
        .row {
            flex-direction: column;
        }
        
        .contact-info {
            margin-bottom: 40px;
            width: 100%;
            .contact-info-item {
                flex-direction: column;
                align-items: center;
                .contact-info-content {
                    margin-left: unset;
                    text-align: center;
                }
            }
        }
        
        .contact-form {
            width: 100%;
        }
    }
</style>
<body>
    <?php $activeTab = "KONTAKT"; ?>
    <?php require_once '../components/navigation/navigation_'.$type_of_navigation.'.php' ?>
    <?php 
        if ( $sideSocialIcons ) {
            require_once '../components/homepage/social_side.php';
        }
    ?>
    <main class="all-page-padding-top">
        <section>
            <div class="section-header">
            <div class="container">
                <h1 class="title-h1"><?php echo $contact_page_h1; ?></h1>
                <p><?php echo $contact_page_text; ?></p>
            </div>
            </div>
            
            <div class="container">
            <div class="row">
                
                <div class="contact-info">
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                    <i class="fas fa-home"></i>
                    </div>
                    
                    <div class="contact-info-content">
                    <h2 class="title-h2">Adresa</h2>
                    <p><?php echo $companyAddress; ?></p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                    <i class="fas fa-phone"></i>
                    </div>
                    
                    <div class="contact-info-content">
                    <h2 class="title-h2">Phone</h2>
                    <p><a href="tel:<?php echo $companyPhone; ?>"><?php echo $companyPhone; ?></a></p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                    <i class="fas fa-envelope"></i>
                    </div>
                    
                    <div class="contact-info-content">
                    <h2 class="title-h2">Email</h2>
                    <p><a href="tel:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a></p>
                    </div>
                </div>
                </div>
                
                <div class="contact-form">
                    <form id="contact-form" class="needs-validation" novalidate>
                        <h2 class="title-h2">Posalji poruku</h2>
                        <div class="input-box form-floating">
                            <input type="text" class="input-box" id="name" required name="name">
                            <span><label for="name">Ime i prezime</label></span>
                            <div class="valid-feedback">
                                Ime je dobro!
                            </div>
                            <div class="invalid-feedback">
                                Molimo vas unesite ime
                            </div>
                        </div>
                        
                        <div class="input-box form-floating">
                            <input type="email" class="input-box" id="email" required name="email">
                            <span><label for="email">Email</label></span>
                            <div class="valid-feedback">
                                Email je dobro!
                            </div>
                            <div class="invalid-feedback">
                                Molimo vas unesite email
                            </div>
                        </div>

                        <div class="input-box form-floating">
                            <textarea class="input-box" id="message" required name="message"></textarea>
                            <span><label for="message">Kucajte vasu poruku</label></span>
                            <div class="valid-feedback">
                                Poruka je dobra!
                            </div>
                            <div class="invalid-feedback">
                                Molimo vas unesite poruku
                            </div>
                        </div>
                        
                        <div class="input-box">
                            <button class="btn btn-custom-style form" type="submit">Prosledi</button>
                        </div>
                    </form>
                </div>
                
            </div>
            </div>
        </section>
        <?php if ( !empty( $contact_page_show_map ) ) : ?>
            <section style="padding-bottom:0;">
                <?php require_once '../components/homepage/'.$contact_page_show_map.'.php'; ?>
            </section>
        <?php endif; ?>
    </main>
    <?php if ( $show_back_to_top_button ) { require_once "../components/back_to_top.php"; } ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
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

     // Example starter JavaScript for disabling form submissions if there are invalid fields
     (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()

    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Check if the form is valid before sending data
            if (this.checkValidity()) {
                // Your form data
                var formData = new FormData(this);

                fetch('contactscript_page.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    if (data.status === 'success') {
                        // Optionally, you can reset the form
                        this.reset();
                        console.log(this);
                        this.classList.remove("was-validated");
                    }
                })
                .catch(error => {
                    //console.error('Error:', error);
                    alert('Greška pri slanju poruke.');
                });
            } else {
                // Handle the case where the form is not valid
                alert('Molimo popunite sva obavezna polja ispravno.');
            }
        });
    });
</script>

<script>
    function checkInput(input) {
        const label = input.nextElementSibling.querySelector('label');
        console.log(label);
        if (input.value !== '') {
            label.classList.add('no-view-text');
        } else {
            label.classList.remove('no-view-text');
        }
    }

    const inputFields = document.querySelectorAll('.input-box input, .input-box textarea');
    inputFields.forEach(input => {
        input.addEventListener('blur', function() {
            checkInput(this);
        });
    });
</script>


