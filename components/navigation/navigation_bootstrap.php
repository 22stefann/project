<style>

.hamburger .line{
    width: 40px;
    height: 5px;
    background-color: var(--hamburgerColor);
    display: block;
    margin: 7px auto;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.scrolled .hamburger .line{
    background-color: var(--hamburgerScrollColor);
}

.hamburger:hover{
    cursor: pointer;
}

/* ONE start*/

#hamburger-1.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-1.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px) rotate(45deg);
    -ms-transform: translateY(13px) rotate(45deg);
    -o-transform: translateY(13px) rotate(45deg);
    transform: translateY(13px) rotate(45deg);
}

#hamburger-1.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(-45deg);
    -ms-transform: translateY(-13px) rotate(-45deg);
    -o-transform: translateY(-13px) rotate(-45deg);
    transform: translateY(-13px) rotate(-45deg);
}

/* ONE end */

/* TWO */

#hamburger-2.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px);
    -ms-transform: translateY(13px);
    -o-transform: translateY(13px);
    transform: translateY(13px);
}

#hamburger-2.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px);
    -ms-transform: translateY(-13px);
    -o-transform: translateY(-13px);
    transform: translateY(-13px);
}

/* FIVE */

#hamburger-5.is-active{
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
}

#hamburger-5.is-active .line:nth-child(2){
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
}

#hamburger-5 .line:nth-child(2){
    -webkit-transition-delay: 0.3s;
    -o-transition-delay: 0.3s;
    transition-delay: 0.3s;
}


#hamburger-5.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-5.is-active .line:nth-child(1),
#hamburger-5.is-active .line:nth-child(3){
    width: 35px;
    -webkit-transform-origin: right;
    -moz-transform-origin: right;
    -ms-transform-origin: right;
    -o-transform-origin: right;
    transform-origin: right;
}

#hamburger-5.is-active .line:nth-child(1){
    -webkit-transform: translateY(15px) rotate(45deg);
    -ms-transform: translateY(15px) rotate(45deg);
    -o-transform: translateY(15px) rotate(45deg);
    transform: translateY(15px) rotate(45deg);
}

#hamburger-5.is-active .line:nth-child(3){
    -webkit-transform: translateY(-15px) rotate(-45deg);
    -ms-transform: translateY(-15px) rotate(-45deg);
    -o-transform: translateY(-15px) rotate(-45deg);
    transform: translateY(-15px) rotate(-45deg);
}

/* SIX */

#hamburger-6.is-active{
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-transition-delay: 0.6s;
    -o-transition-delay: 0.6s;
    transition-delay: 0.6s;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
}

#hamburger-6.is-active .line:nth-child(2){
    width: 0px;
}

#hamburger-6.is-active .line:nth-child(1),
#hamburger-6.is-active .line:nth-child(3){
    -webkit-transition-delay: 0.3s;
    -o-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

#hamburger-6.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px);
    -ms-transform: translateY(13px);
    -o-transform: translateY(13px);
    transform: translateY(13px);
}

#hamburger-6.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(90deg);
    -ms-transform: translateY(-13px) rotate(90deg);
    -o-transform: translateY(-13px) rotate(90deg);
    transform: translateY(-13px) rotate(90deg);
}

/* EIGHT */

#hamburger-8.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-8.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px);
    -ms-transform: translateY(13px);
    -o-transform: translateY(13px);
    transform: translateY(13px);
}

#hamburger-8.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(90deg);
    -ms-transform: translateY(-13px) rotate(90deg);
    -o-transform: translateY(-13px) rotate(90deg);
    transform: translateY(-13px) rotate(90deg);
}

/* NINE */

#hamburger-9{
    position: relative;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

#hamburger-9.is-active{
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
}

#hamburger-9:before{
    content: "";
    position: absolute;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 70px;
    height: 70px;
    border: 5px solid transparent;
    top: calc(50% - 35px);
    left: calc(50% - 35px);
    border-radius: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

#hamburger-9.is-active:before{
    border: 5px solid #ecf0f1;
}

#hamburger-9.is-active .line{
    width: 35px;
}

#hamburger-9.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-9.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px);
    -ms-transform: translateY(13px);
    -o-transform: translateY(13px);
    transform: translateY(13px);
}

#hamburger-9.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(90deg);
    -ms-transform: translateY(-13px) rotate(90deg);
    -o-transform: translateY(-13px) rotate(90deg);
    transform: translateY(-13px) rotate(90deg);
}

/* ELEVEN */

#hamburger-11{
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

#hamburger-11.is-active{
    animation: smallbig 0.6s forwards;
}

@keyframes smallbig{
    0%, 100%{
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
    }

    50%{
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
    }
}

#hamburger-11.is-active .line:nth-child(1),
#hamburger-11.is-active .line:nth-child(2),
#hamburger-11.is-active .line:nth-child(3){
    -webkit-transition-delay: 0.2s;
    -o-transition-delay: 0.2s;
    transition-delay: 0.2s;
}

#hamburger-11.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-11.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px) rotate(45deg);
    -ms-transform: translateY(13px) rotate(45deg);
    -o-transform: translateY(13px) rotate(45deg);
    transform: translateY(13px) rotate(45deg);
}

#hamburger-11.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(-45deg);
    -ms-transform: translateY(-13px) rotate(-45deg);
    -o-transform: translateY(-13px) rotate(-45deg);
    transform: translateY(-13px) rotate(-45deg);
}

/* TWELVE */

#hamburger-12.is-active .line:nth-child(1){
    opacity: 0;
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}

#hamburger-12.is-active .line:nth-child(3){
    opacity: 0;
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
    nav#bootstrap-navigation {
        z-index: 999;
        transition: height 0.3s;
        background-color: var(--navBgColor) ;
        padding: var(--navigation_container_padding);
        a.nav-link {
            color: var(--navTabColor);
            text-transform: var(--navTextTransform);
            font-size: var(--navTabSize);
            font-family: var(--navTabsFont);
        }
        a.nav-link:hover {
            color: var(--navTabHoverColor);
        }
        .dropdown-menu {
            background-color: var(--navBgColor);
            a {
                color: var(--navTabColor);
                text-transform: var(--navTextTransform);
                font-size: var(--navTabSize);
                font-family: var(--navTabsFont);
            }
            a:hover {
                background-color: var(--navTabColor);
                color: var(--navBgColor);
            }
        }
    }
    nav#bootstrap-navigation.scrolled {
        transition: height 0.3s;
        background-color: var(--navBgColorScroll);
        a.nav-link {
            color: var(--navTabScrollColor);
        }
        a.nav-link:hover {
            color: var(--navTabScrollHoverColor);
        }
        .social-icon a.nav-link:hover {
            color: var(--navBgColorScroll);
        }
        .dropdown-menu {
            background-color: var(--navBgColorScroll);
            a {
                color: var(--navTabScrollColor);
            }   
            a:hover {
                background-color: var(--navTabScrollColor);
                color: var(--navBgColorScroll);
            } 
        }
    }
    nav#bootstrap-navigation .social-icon a:hover {
        background-color: var(--navTabColor);
        color: var(--navBgColor);
    }
    .navbar-toggler:focus {
        box-shadow: none;
    }
    .navbar-toggler-line {
        display: block;
        width: 30px;
        height: 3px;
        background-color: var(--hamburgerColor) ;
        margin: 6px 0;
        transition: background-color 0.3s;
        border: unset;
    }

    .scrolled .navbar-toggler-line {
        background-color: var(--hamburgerScrollColor) ;
        transition: background-color 0.3s;
    }

    
    nav.navbar a.navbar-brand img {
        width: <?php echo $widthLogo; ?>;
        transition: width 0.3s;
    }
    .dropdown-toggle::after {
        display: none;
    }
    .text-decoration-none {
        text-decoration: none!important;
    }
    .icon-width { 
        width: 2rem;
    }
    .scrolled {
        transition: height 0.3s;
    }
    nav.navbar.scrolled a.navbar-brand img {
        width: calc(<?php echo $widthLogo; ?> - <?php echo $logoMobileScrollResize; ?>);
        transition: width 0.3s;
    }
    @media (min-width: 992px) {
        nav .container.flex-lg-column a.navbar-brand {
            justify-content: center;
        }
        .navbar-expand-lg .navbar-collapse {
            max-width: fit-content;
        }
        nav.navbar .social-display-block {
            display: none;
        }
        <?php if ( $bootstrap_logo_out ) {
            echo "nav.navbar a.navbar-brand {";
            echo    "position: relative;";
            echo "}";
            echo "nav.navbar a.navbar-brand img {";
            echo "    position: absolute;";
            echo "    top: {$bootstrap_top_position};";
            echo "}";
        } ?>
    }
    @media (max-width: 991px) {
        nav.navbar .container {
            max-width: 100%;
            margin: 0;
            padding-left: 5px;
        }
        nav.navbar a.navbar-brand img {
            width: <?php echo $mobileWidthLogo; ?>;
            transition: width 0.3s;
        }

        nav.navbar.scrolled a.navbar-brand img {
            width: calc( <?php echo $mobileWidthLogo; ?> - <?php echo $logoMobileScrollResize; ?> );
            transition: width 0.3s;
        }
        nav.navbar .social-display-none {
            display: none;
        }
    }
    <?php
        if ( $disableSocial != "" ) {

            echo '@media only screen and (min-width: 768px) and (max-width: '.$disableSocial.') {';
                echo 'nav ul.social-icon {';
                echo 'display: none';
                echo '}';
            echo '}';

        }
    ?>
</style>
<nav id="bootstrap-navigation" class="navbar navbar-expand-lg navbar-container navbar-light shadow-sm fixed-top">
    <div class="container <?php if ( $bootstrap_nav_full_width ) { echo "mw-100"; } ?> 
    <?php if ( $bootstrap_nav_container_width == "25" ) { echo "w-lg-25"; } elseif ( $bootstrap_nav_container_width == "50" ) { echo "w-lg-50";} 
    elseif ( $bootstrap_nav_container_width == "75" ) { echo "w-lg-75";} elseif ( $bootstrap_nav_container_width == "100" ) { echo "w-lg-100";} 
    else {} ?>
    <?php if ( $bootstrap_nav_flex_direction == "column" ) { echo "flex-lg-column"; } 
    elseif( $bootstrap_nav_flex_direction == "column-reverse" ) { echo "flex-lg-column-reverse"; } 
    else { echo "flex-lg-row"; } ?> 
    <?php if ( $bootstrap_nav_justify == "space-around" ) { echo "justify-content-lg-between"; } 
    elseif( $bootstrap_nav_justify == "center" ) { echo "justify-content-lg-center"; }
    elseif( $bootstrap_nav_justify == "evenly" ) { echo "justify-content-lg-evenly"; } ?>"> 
        <a class="navbar-brand d-flex align-items-center animated-element animate-left" href="/#">
            <img src="custom/logo.png" alt="<?php echo $companyName; ?> logo" />
        </a> 
        <div class="d-flex">
            <ul class="navbar-nav ml-auto mt-lg-0 social-display-block flex-row align-items-center social-icon">
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
            <?php if ( !$use_other_hamburger ) : ?>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="no-view-text">hamburger menu</span>
            </button>
            <?php else : ?>
            <button class="three col navbar-toggler navbar-toggler-right border-0" id="btn" type="button" data-toggle="collapse" data-target="#navbar4">
                <div class="hamburger" id="<?php echo get_hamburger_id($hamburger_menu_type); ?>">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </button>
            <?php endif; ?>
        <?php
            function get_hamburger_id($type) {
                switch ($type) {
                    case 1:
                        return "hamburger-1";
                    case 2:
                        return "hamburger-2";
                    case 3:
                        return "hamburger-5";
                    case 4:
                        return "hamburger-6";
                    case 5:
                        return "hamburger-8";
                    case 6:
                        return "hamburger-9";
                    case 7:
                        return "hamburger-11";
                    default:
                        return "hamburger-12";
                }
            }
        ?>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbar4">
            <?php $br=0; ?>
            <ul class="navbar-nav mr-auto pl-lg-4">
                <?php 
                    foreach ($navTabs as $tab) {
                        if (strpos($tab['class'], 'dropdown-tab') == false) { ?>
                            <li class="nav-item active px-lg-<?php echo $bootstrap_padding_tabs; ?>"> 
                                <a class="nav-link animated-element animate-left" href="<?php echo $tab['link']; ?>" target="<?php echo $tab['target']; ?>"><?php echo $tab['name']; ?></a> 
                            </li>
                        <?php } else { ?>
                            <li class="nav-item px-lg-<?php echo $bootstrap_padding_tabs; ?> dropdown d-menu">
                                <a class="nav-link dropdown-toggle animated-element animate-left" href="<?php echo $tab['link']; ?>" id="dropdown<?php echo $br++; ?>" target="<?php echo $tab['target']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $tab['name']; ?>
                                <svg  id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                                </a>
                                    <div class="dropdown-menu shadow-sm sm-menu border-light">
                                <?php foreach ($subTabs as $stab) { ?>
                                        <?php if ( $tab['type'] == $stab['type'] ) { ?>
                                            <a class="dropdown-item" target="<?php echo $stab['target']; ?>" href="<?php echo $stab['link']; ?>"><?php echo $stab['name']; ?></a>
                                        <?php } ?>
                                <?php } ?>
                                    </div>
                            </li>
                        <?php } ?>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ml-auto mt-3 mt-lg-0 social-display-none social-icon">
                <?php if ( !empty($twitterLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link animated-element animate-left" target="_blank" href="<?php echo $twitterLink; ?>"><i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span></a> 
                    </li>
                <?php } ?>

                <?php if ( !empty($fbLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link animated-element animate-left" target="_blank" href="<?php echo $fbLink; ?>"><i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span></a> 
                    </li>
                <?php } ?>

                <?php if ( !empty($instaLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link animated-element animate-left" target="_blank" href="<?php echo $instaLink; ?>"><i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span></a> 
                    </li>
                <?php } ?>

                <?php if ( !empty($ytLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link animated-element animate-left" target="_blank" href="<?php echo $ytLink; ?>"><i class="fab fa-youtube"></i><span class="d-lg-none ml-3">Youtube</span></a> 
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function () {
        $('.navbar-container .d-menu .nav-link').click(function (e) {
            e.preventDefault();
            var $smMenu = $(this).parent().find('.sm-menu').first();

            $('.navbar-container .d-menu .sm-menu').not($smMenu).slideUp(150);

            $smMenu.slideToggle(150);
        });
        $(document).on('click', function (e) {
            if (!$('.navbar-container .d-menu .nav-link').is(e.target) && $('.navbar-container .d-menu .nav-link').has(e.target).length === 0 &&
                !$('.navbar-container .d-menu .sm-menu').is(e.target) && $('.navbar-container .d-menu .sm-menu').has(e.target).length === 0) {
                $('.navbar-container .d-menu .sm-menu').slideUp(150);
            }
        });

        $('.navbar-container .d-menu .sm-menu').click(function (e) {
            e.stopPropagation();
        });

        $(".hamburger").click(function(){
            $(this).toggleClass("is-active");
        });

        $('.navbar-toggler').click(function () {
            $('#navbar4').toggleClass('show');
        });
        <?php if ( $bootstrap_nav_height_scroll_change ) { ?>
            window.addEventListener("scroll", function() {
                var navigation = document.querySelector("nav.navbar");
                if (window.scrollY > 20) {
                    navigation.classList.add("scrolled");
                } else {
                    navigation.classList.remove("scrolled");
                }
            });
        <?php } ?>
    });
</script>