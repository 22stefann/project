<style>
    .social-side a {
        text-decoration: none;
    }

    .color-youtube {
        background-color: #ff0000;
    }

    .color-facebook {
        background-color: #316FF6;
    }

    .color-twitter {
        background-color: #000;
    }

    .color-instagram {
        background: #f09433; 
        background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
        background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
        background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
    }
    .color-whatsapp {
        background-color: #24cc63;
    }

    .color-viber {
        background-color: rgb(127, 77, 160);
    }

    .color-email {
        background-color: #fff;
    }

    .color-phone {
        background-color: #fff;
        color: #000;
    }

    .google-font {
        font-family: "Lato", sans-serif;
        font-size: 1.25rem;
    }

    .social-btn img {
        width: 40px;
    }

    .social-btn p {
        color: white;
        font-size: 1em;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .icons8-instagram {
        order: 2;
        display: inline-block;
        width: 40px;
        height: 40px;
        background: url("socials_svg/instagram.svg")
            50% 50% no-repeat;
        background-size: 100%;
    }

    .icons8-whatsapp {
        order: 2;
        display: inline-block;
        width: 38px;
        height: 38px;
        background: url("socials_svg/whatsapp.svg")
            50% 50% no-repeat;
        background-size: 100%;
    }

    .icons8-viber {
        order: 2;
        display: inline-block;
        width: 38px;
        height: 38px;
        background: url("socials_svg/viber_new.svg")
            50% 50% no-repeat;
        background-size: 100%;
    }

    .icons8-youtube {
        order: 2;
        display: inline-block;
        width: 38px;
        height: 38px;
        background: url("socials_svg/youtube.svg")
            50% 50% no-repeat;
        background-size: 100%;
    }

    .icons8-facebook {
        order: 2;
        display: inline-block;
        width: 38px;
        height: 38px;
        background: url("socials_svg/facebook.svg")
            50% 50% no-repeat;
        background-size: 100%;
    }

    .icons8-twitter {
        order: 2;
        display: inline-block;
        width: 38px;
        height: 38px;
        background: url("socials_svg/icons8-twitterx.svg")
            50% 50% no-repeat;
        background-size: 100%;
    }

    .icons8-phone {
        order: 2;
        display: inline-block;
        width: 38px;
        height: 38px;
        background: url("socials_svg/icons8-phone-50.svg")
            50% 50% no-repeat;
        background-size: 100%;
    }

    .social-btn p.margin-email,
    .social-btn p.margin-phone {
        color: #000 !important;
    }

    .icons8-email {
        order: 2;
        display: inline-block;
        width: 38px;
        height: 38px;
        background: url("socials_svg/search_email.svg")
            50% 50% no-repeat;
        background-size: 100%;
    }
</style>
<?php if ( $sideSocialIconsAlign == "right" ) : ?>
    <style>
    .social-btn {
        display: flex;
        flex-flow: row-reverse;
        width: 150px;
        align-items: center;
        justify-content: start;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        border: 1px;
        border-bottom-left-radius: 30px;
        border-top-left-radius: 30px;
        margin-bottom: 5px;
        position: relative;
        right: 0;
        transition: right 1s;
    }

    .social-side a {
        position: relative;
        right: -100px;
    }

    .social-btn:hover {
        right: 85px;
        transition: right 1s;
    }

    .social-side {
        position: fixed;
        top: <?php echo $socialSideFromTop; ?>;
        transform: translateY(-50%);
        right: 183px;
        z-index: 10;
        width: 0;
    }

    .social-btn p {
        padding-left: 5px;
    }

    </style>

<?php else : ?>

    <style>
        .social-btn {
            display: flex;
            width: 150px;
            align-items: center;
            justify-content: end;
            padding-left: 30px;
            padding-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 1px;
            border-bottom-right-radius: 30px;
            border-top-right-radius: 30px;
            margin-bottom: 5px;
            position: relative;
            left: 0;
            transition: left 1s;
        }
        .social-btn:hover {
            left: 100px;
            transition: left 1s;
        }

        .social-side a {
            position: relative;
            left: -135px;
        }

        .social-side {
            position: fixed;
            top: <?php echo $socialSideFromTop; ?>;
            left: 0;
            transform: translateY(-50%);
            z-index: 10;
            width: 0;
        }

        .social-btn p {
            padding-right: 5px;
        }

    </style>

<?php endif; ?>

<div class="social-side">
    <ul>
        <?php if ( !empty($twitterLink) ) { ?>
            <li class=""> 
                <a href="<?php echo $twitterLink; ?>">
                    <div class="social-btn color-twitter">
                    <div class="icons8-twitter"></div>
                    <p class="order-1 google-font margin-twitter">twitter</p>
                    </div>
                </a>
            </li>
        <?php } ?>

        <?php if ( !empty($fbLink) ) { ?>
            <li class=""> 
                <a href="<?php echo $fbLink; ?>">
                    <div class="social-btn color-facebook">
                    <div class="icons8-facebook"></div>
                    <p class="order-1 google-font margin-facebook">facebook</p>
                    </div>
                </a>
            </li>
        <?php } ?>

        <?php if ( !empty($instaLink) ) { ?>
            <li class=""> 
                <a href="<?php echo $instaLink; ?>">
                    <div class="social-btn color-instagram">
                    <div class="icons8-instagram"></div>
                    <p class="order-1 google-font margin-instagram">instagram</p>
                    </div>
                </a>
            </li>
        <?php } ?>

        <?php if ( !empty($ytLink) ) { ?>
            <li class=""> 
                <a href="<?php echo $ytLink; ?>">
                    <div class="social-btn color-youtube">
                    <div class="icons8-youtube"></div>
                    <p class="order-1 google-font margin-youtube">youtube</p>
                    </div>
                </a>
            </li>
        <?php } ?>
        <?php if ( !empty($whatsappLink) ) { ?>
            <li class=""> 
                <a href="https://wa.me/<?php echo str_replace("+", "", $phoneNumber); ?>">
                    <div class="social-btn color-whatsapp">
                    <div class="icons8-whatsapp"></div>
                    <p class="order-1 google-font margin-instagram">whats app</p>
                    </div>
                </a>
            </li>
        <?php } ?>
        <!-- <?php if ( !empty($viberLink) ) { ?>
            <li class=""> 
                <a href="viber://chat?number=<?php echo str_replace("+", "", $phoneNumber); ?>">
                    <div class="social-btn color-viber">
                    <div class="icons8-viber"></div>
                    <p class="order-1 google-font margin-viber">viber</p>
                    </div>
                </a>
            </li>
        <?php } ?> -->
        <?php if ( !empty($phoneNumber) ) { ?>
            <li class=""> 
                <a href="tel:<?php echo $phoneNumber; ?>">
                    <div class="social-btn color-phone">
                    <div class="icons8-phone"></div>
                    <p class="order-1 google-font margin-phone">phone</p>
                    </div>
                </a>
            </li>
        <?php } ?>
        <?php if ( !empty($email) ) { ?>
            <li class=""> 
                <a href="mailto:<?php echo $email; ?>">
                    <div class="social-btn color-email">
                    <div class="icons8-email"></div>
                    <p class="order-1 google-font margin-email">email</p>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>