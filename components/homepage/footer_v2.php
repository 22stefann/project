<style>
.footer-v2 {
    background-color: <?php echo $footer_v1_bg_color; ?>;
    padding: 1em 0;
    p, span, a, i {
        color: <?php echo $footer_v1_text_color; ?>;
    }
}
.footer-v2 ul li {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 0.5s;
    transition: background-color 0.5s;
}
.footer-v2 ul li a {
    font-size: 1.7em;
    color: <?php echo $footer_v1_bg_color; ?>;
}

.footer-v2 ul li:hover {
    background-color: <?php echo $footer_v1_social__bg_hover_color; ?>;
    i {
        color: <?php echo $footer_v1_social_hover_color; ?>;
        transition: color 0.5s;
    }
    transition: color 0.5s;
    transition: background-color 0.5s;
}

@media (max-width: 767px) {
    .footer-v2 ul {
        margin: 0 auto;
    }
}
</style>
<div id="footer_v2" class="footer-v2" >
    <div class="container">
    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3 navbar-nav ml-auto mt-lg-0 social-display-block flex-row align-items-center social-icon">

        <?php if ( !empty($whatsappLink) ) { ?>
            <li class="nav-item"> 
                <a class="nav-link p-1" target="_self" href="https://wa.me/<?php echo str_replace("+", "", $phoneNumber); ?>"><i class="fa fa-whatsapp"></i><span class="d-lg-none ml-3 no-view-text">whatsapp</span></a> 
            </li>
        <?php } ?>


        <!-- <?php if ( !empty($viberLink) ) { ?>
            <li class="nav-item"> 
                <a class="nav-link p-1" target="_self" href="viber://chat?number=%2B0695151702"><i class='fab fa-viber'></i><span class="d-lg-none ml-3 no-view-text">Viber</span></a> 
            </li>
        <?php } ?> -->

        <?php if ( !empty($email) ) { ?>
            <li class="nav-item"> 
                <a class="nav-link p-1" target="_self" href="mailto:<?php echo $email; ?>"><i class="fa fa-google" aria-hidden="true"></i><span class="d-lg-none ml-3 no-view-text">Google</span></a> 
            </li>
        <?php } ?>

        <?php if ( !empty($phoneNumber) ) { ?>
            <li class="nav-item"> 
                <a class="nav-link p-1" target="_self" href="tel:<?php echo $phoneNumber; ?>"><i class="fa fa-phone" aria-hidden="true"></i><span class="d-lg-none ml-3 no-view-text">Phone</span></a> 
            </li>
        <?php } ?>

        <?php if ( !empty($twitterLink) ) { ?>
            <li class="nav-item"> 
                <a class="nav-link p-1" target="_blank" href="<?php echo $twitterLink; ?>"><i class="fab fa-twitter"></i><span class="d-lg-none ml-3 no-view-text">Twitter</span></a> 
            </li>
        <?php } ?>

        <?php if ( !empty($fbLink) ) { ?>
            <li class="nav-item"> 
                <a class="nav-link p-1" target="_blank" href="<?php echo $fbLink; ?>"><i class="fab fa-facebook"></i><span class="d-lg-none ml-3 no-view-text">Facebook</span></a> 
            </li>
        <?php } ?>

        <?php if ( !empty($instaLink) ) { ?>
            <li class="nav-item"> 
                <a class="nav-link p-1" target="_blank" href="<?php echo $instaLink; ?>"><i class="fab fa-instagram"></i><span class="d-lg-none ml-3 no-view-text">Instagram</span></a> 
            </li>
        <?php } ?>

        <?php if ( !empty($ytLink) ) { ?>
            <li class="nav-item"> 
                <a class="nav-link p-1" target="_blank" href="<?php echo $ytLink; ?>"><i class="fab fa-youtube"></i><span class="d-lg-none ml-3 no-view-text">Youtube</span></a> 
            </li>
        <?php } ?>
        </ul>
        <p class="text-center">© 2024 Company, Inc</p>
    </footer>
    </div>
</div>