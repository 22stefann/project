<style>
    nav#bootstrap-navigation {
        z-index: 999;
        transition: height 0.3s;
        background-color: var(--navBgColor) ;
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
        background-color: var(--navTabColor) ;
        margin: 6px 0;
        transition: background-color 0.3s;
        border: unset;
    }

    .scrolled .navbar-toggler-line {
        background-color: var(--navTabScrollColor) ;
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
        width: calc(<?php echo $widthLogo; ?> - 20%);
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
        }
        nav.navbar a.navbar-brand img {
            width: <?php echo $mobileWidthLogo; ?>;
            transition: width 0.3s;
        }
        nav.navbar .social-display-none {
            display: none;
        }
    }
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
        <a class="navbar-brand d-flex align-items-center" href="/#">
            <img src="custom/logo.png" alt="<?php echo $companyName; ?> logo" />
        </a> 
        <div class="d-flex">
            <ul class="navbar-nav ml-auto mt-lg-0 social-display-block flex-row align-items-center social-icon">
                <?php if ( !empty($twitterLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link p-1" href="<?php echo $twitterLink; ?>"><i class="fab fa-twitter"></i><span class="d-lg-none ml-3 no-view-text">Twitter</span></a> 
                    </li>
                <?php } ?>

                <?php if ( !empty($fbLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link p-1" href="<?php echo $fbLink; ?>"><i class="fab fa-facebook"></i><span class="d-lg-none ml-3 no-view-text">Facebook</span></a> 
                    </li>
                <?php } ?>

                <?php if ( !empty($instaLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link p-1" href="<?php echo $instaLink; ?>"><i class="fab fa-instagram"></i><span class="d-lg-none ml-3 no-view-text">Instagram</span></a> 
                    </li>
                <?php } ?>

                <?php if ( !empty($ytLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link p-1" href="<?php echo $ytLink; ?>"><i class="fab fa-youtube"></i><span class="d-lg-none ml-3 no-view-text">Youtube</span></a> 
                    </li>
                <?php } ?>

            </ul>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="no-view-text">hamburger menu</span>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbar4">
            <?php $br=0; ?>
            <ul class="navbar-nav mr-auto pl-lg-4">
                <?php 
                    foreach ($navTabs as $tab) {
                        if (strpos($tab['class'], 'dropdown-tab') == false) { ?>
                            <li class="nav-item active px-lg-<?php echo $bootstrap_padding_tabs; ?>"> 
                                <a class="nav-link" href="<?php echo $tab['link']; ?>" target="<?php echo $tab['target']; ?>"><?php echo $tab['name']; ?></a> 
                            </li>
                        <?php } else { ?>
                            <li class="nav-item px-lg-<?php echo $bootstrap_padding_tabs; ?> dropdown d-menu">
                                <a class="nav-link dropdown-toggle" href="<?php echo $tab['link']; ?>" id="dropdown<?php echo $br++; ?>" target="<?php echo $tab['target']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $tab['name']; ?>
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
                        <a class="nav-link" href="<?php echo $twitterLink; ?>"><i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span></a> 
                    </li>
                <?php } ?>

                <?php if ( !empty($fbLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link" href="<?php echo $fbLink; ?>"><i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span></a> 
                    </li>
                <?php } ?>

                <?php if ( !empty($instaLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link" href="<?php echo $instaLink; ?>"><i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span></a> 
                    </li>
                <?php } ?>

                <?php if ( !empty($ytLink) ) { ?>
                    <li class="nav-item"> 
                        <a class="nav-link" href="<?php echo $ytLink; ?>"><i class="fab fa-youtube"></i><span class="d-lg-none ml-3">Youtube</span></a> 
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