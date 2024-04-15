<style>
/*Desktop navigation start*/

header nav.desktop-navigation {
    width: 100%;
    height: var(--navHeight);
    background-color: var(--navBgColor);
    position: var(--navPosition);
    transition: height 0.3s;
    top: 0;
    z-index: 99;
}

.scrolled {
    height: calc(var(--navHeight) - 30px);
}

header nav.desktop-navigation.scrolled {
    background-color: var(--navBgColorScroll);
    height: calc(var(--navHeight) - 30px);
}

header nav.desktop-navigation .container {
    display: flex;
    align-items: center;
    justify-content: var(--navFlexPosition);
    height: inherit;
    flex-direction: var(--navigationFlexDirection);
    max-width: 100%;
    padding: var(--navigation_container_padding);
}

header nav.desktop-navigation .container img {
    width: var(--logoWidth);
    transition: width 0.3s;
}

header nav.desktop-navigation.scrolled .container img {
    transition: width 0.3s;
    width: calc(var(--logoWidth) - var(--logoScrollResize));
}

header nav.desktop-navigation .container ul {
    list-style-type: none;
    display: flex;
    padding-left: 0;
}

header nav.desktop-navigation .container ul.navigation-tabs {
    margin-left : var(--navigationTabsPositionMargin);
    margin-right : var(--navigationTabsPositionMarginRight);
    position: relative;
}

header nav.desktop-navigation .container ul:not(.social-icons-div) li {
    padding-left: var(--navPadding);
    padding-right: var(--navPadding);
    padding-top: 5px;
    padding-bottom: 5px;
}

header nav.desktop-navigation .container ul.social-icons-div {
    padding-right: 5px;
    li a {
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
}

header nav.desktop-navigation .container ul li.dropdown-tab {
    position: relative;
}

header nav.desktop-navigation .container ul li.dropdown-tab a .fa-angle-down {
    font-family: 'FontAwesome';
    content: '\f063';
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    font-size: calc(var(--navTabSize) - 0.4em);
    font-weight: 300;
}

header nav.desktop-navigation .container ul li p {
    margin: 0;
}

header nav.desktop-navigation .container .submenu {
    display:none;
    background-color: var(--navBgColor);
    position: absolute;
    padding: 10px;
    text-align: center;
}

header nav.desktop-navigation.scrolled .container .submenu {
    background-color: var(--navBgColorScroll);
}

header nav.desktop-navigation .container ul li a {
    text-transform: var(--navTextTransform);
    text-decoration: unset;
    color: var(--navTabColor);
    font-family: var(--navTabsFont);
    font-weight: var(--navTabFontWeight);
    font-size: var(--navTabSize);
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}

header nav.desktop-navigation .container ul li a:hover,
header nav.desktop-navigation .container ul li a.active {
    color: var(--navTabHoverColor);
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}

header nav.desktop-navigation.scrolled .container ul li a {
    color: var(--navTabScrollColor);
}

header nav.desktop-navigation.scrolled .container ul li a:hover,
header nav.desktop-navigation.scrolled .container ul li a.active {
    color: var(--navTabScrollHoverColor);
}

header nav.desktop-navigation .container ul.social-icons-div li a:hover {
    color: var(--navSocialColor);
    background-color: var(--navSocialBgColor);
}

/*navigation column */

header nav.desktop-navigation .container .nav-column {
    display: flex;
    align-items: center;
    padding: 5px 0;
}

header nav.desktop-navigation .container .logo-column {
    display: flex;
    width: 100%;
    position: relative;
}

header nav.desktop-navigation .container .logo-column a:has(img) {
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    top: var(--logoTopPosition);
}

header nav.desktop-navigation .container .logo-column .phone-email-div {
    flex-direction: column;
    position: absolute;
    right: var(--phoneEmailPositionRight);
    left: var(--phoneEmailPositionLeft);
    top: 50%;
    padding: 5px;
    transform: translateY(-50%);
}

header nav.desktop-navigation .container .logo-column .phone-email-div li {
    padding: 0;
}
<?php
    if ( $disableSocial != "" ) {

        echo '@media only screen and (min-width: 768px) and (max-width: '.$disableSocial.') {';
            echo 'nav ul.social-icons-div {';
            echo 'display: none !important';
            echo '}';
        echo '}';

    }
?>


.mobile-navigation.mobile-logo-navigation,
.mobile-nav-v2,
.mobile-nav-v3 {
    display:none !important;
}

<?php if ( !empty($navTabSize_1400) ) : ?>
    @media (max-width: 1400px) {
        header nav.desktop-navigation .container ul li a  {
            font-size: calc(<?php echo $navTabSize ." - ". $navTabSize_1400 ?>);
        }
    }
<?php endif; ?>
<?php if ( !empty($navTabSize_1200) ) : ?>
    @media (max-width: 1200px) {
        header nav.desktop-navigation .container ul li a  {
            font-size: calc(<?php echo $navTabSize ." - ". $navTabSize_1400 ." - ". $navTabSize_1200 ?>);
        }
    }
<?php endif; ?>
<?php if ( !empty($navTabSize_1024) ) : ?>
    @media (max-width: 1024px) {
        header nav.desktop-navigation .container ul li a  {
            font-size: calc(<?php echo $navTabSize ." - ". $navTabSize_1400 ." - ". $navTabSize_1200." - ". $navTabSize_1024 ?>);
        }
    }
<?php endif; ?>
<?php if ( !empty($navTabSize_767) ) : ?>
    @media (max-width: 767px) {
        header nav.desktop-navigation .container ul li a {
            font-size: <?php echo $navTabSize_767;?>;
        }
    }
<?php endif; ?>

/*Desktop navigation end*/

/*Mobile navigation start */

<?php if ( $mobileNavType == "v1" ) { ?>

@media (max-width: 767px) {
    .mobile-navigation.mobile-logo-navigation {
        display:block !important;
        z-index: 99;
    }

    header .mobile-navigation nav .submenu {
        background-color: var(--navBgColor);
        text-align: left;
        display: none;
        flex-direction: column;
        padding: 0 10px;
        a {
            margin-bottom: -15px;
        }
    }

    .nav-container {
        position: fixed;
        display: inline-block;
        max-width: 50px;
        max-height: 50px;
        overflow: visible;
        outline: none;
        right: 10px
    }

    .nav-container.is-active .nav-toggle:before,
    .nav-container.is-active .nav-toggle:after {
        box-shadow: none;
        background-color: var(--mobileTabsBgColor);
    }

    .nav-container.is-active .nav-toggle:before {
        transform: rotate(-45deg);
    }

    .nav-container.is-active .nav-toggle:after {
        transform: rotate(45deg);
    }

    .nav-container.is-active .nav-items {
        transform: translate(0, 0);
    }

    .nav-container .nav-toggle {
        position: absolute;
        top: 0;
        right: -5px;
        width: 40px;
        height: 40px;
        margin: 7px;
        z-index: 100;
        transform: translateY(6%);
        transition: transform 0.3s;
    }

    .scrolled .nav-container .nav-toggle {
        transform: translateY(0);
        transition: transform 0.3s;
    }

    .nav-container .nav-toggle:hover {
        cursor: pointer;
    }

    .nav-container .nav-toggle:before,
    .nav-container .nav-toggle:after {
        content: "";
        position: absolute;
        top: 18px;
        left: 0;
        transform: translate(0, 0);
        width: 100%;
        height: 4px;
        background: var(--hamburgerColor);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* .scrolled .nav-container .nav-toggle:before,
    .scrolled .nav-container .nav-toggle:after {
        background: var(--hamburgerScrollColor);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    } */

    .nav-container .nav-toggle:before {
        box-shadow: 0 13.3333333333px 0 0 var(--hamburgerColor);
    }

    /* .scrolled .nav-container .nav-toggle:before {
        box-shadow: 0 13.3333333333px 0 0 var(--hamburgerScrollColor);
    } */

    .nav-container .nav-toggle:after {
        box-shadow: 0 -13.3333333333px 0 0 var(--hamburgerColor);
    }

    /* .scrolled .nav-container .nav-toggle:after {
        box-shadow: 0 -13.3333333333px 0 0 var(--hamburgerScrollColor);
    } */

    .nav-container .nav-items {
        position: fixed;
        top: 0;
        right: 0;
        min-width: 300px;
        max-width: 50vw;
        width: 100vw;
        height: 100vh;
        z-index: 99;
        padding: 80px 20px 20px 20px;
        transition: transform 0.3s ease;
        transform: translate(100%, 0);
        background: var(--navBgColorScroll);
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 5px 0;
        align-content: start;
        box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
        ul {
            list-style-type: none;
            padding-left: 0;
            margin: 0;
        }
        ul.submenu li {
            margin: 4px 0 5px 0;
        }
        
        ul.submenu li:last-of-type {
            margin: 10px 0 10px 0;
        }
    }

    .nav-container .nav-items .nav-item {
        font-size: <?php echo $navTabSize_767;?>;
        color: var(--mobileTabsColor);
        background-color: var(--mobileTabsBgColor);
        padding: 10px 0 10px 5px;
        display: inline-block;
        width: 100%;
        text-decoration: none;
        text-transform: var(--navTextTransform);
        font-family: var(--navTabsFont);
        font-weight: var(--navTabFontWeight);
        i {
            color: var(--mobileTabsColor);
        }
    }

    .nav-container .nav-items .nav-item:hover,
    .nav-container .nav-items .nav-item.active {
        cursor: pointer;
        background: var(--mobileTabsBgHoverColor);
        color: var(--mobileTabsHoverColor);
    }

    body.is-active-body {
        overflow: hidden;
        position: relative;
    }

    body.is-active-body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 0;
    }

    .mobile-navigation.mobile-logo-navigation {
        width: 100%;
        height: var(--mobileNavHeight);
        position: fixed;
        top: 0;
        background: var(--navBgColor);
        transition: height 0.3s;
        padding: 3px;
        .logo-holder {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
    }
    .mobile-navigation.mobile-logo-navigation.scrolled {
        height: 60px;
        transition: height 0.3s;
        background: var(--navBgColorScroll);
    }

    .mobile-navigation.mobile-logo-navigation .logo-holder img {
        width:var(--mobileWidthLogo);
        transition: width 0.3s;
    }

    .mobile-navigation.mobile-logo-navigation.scrolled .logo-holder img {
        width:calc(var(--mobileWidthLogo) - <?php echo $logoMobileScrollResize; ?>);
        transition: width 0.3s;
    }

    .mobile-navigation ul.social-icons-div {
        position: absolute;
        list-style-type: none;
        display: inline-flex;
        top: 50%;
        transform: translateY(-50%);
        margin: 0;
        right: 70px;
    }

    .mobile-navigation .social-icons-div li a {
        font-size: calc(var(--navTabSize) + 0.1em);
        padding: 5px;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
    }

    .mobile-navigation .social-icons-div li a:hover  {
        background-color: var(--navSocialBgColor);
        i {
            color: var(--navSocialColor);
        }
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
    }

    .mobile-navigation .social-icons-div li a i {
        color: var(--navTabScrollColor);
    }

}
<?php }  elseif ( $mobileNavType == 'v2' ) { ?>
@media (max-width: 767px) {
    .mobile-nav-v2 {
        top: 0;
        display: flex !important;
        z-index: 99;
        background-color: var(--navBgColor);
        padding: 5px;
        position: var(--mobileNavPosition);
        width: 100%;
        align-items: center;
        justify-content: space-between;
        height: var(--mobileNavHeight);
        transition: height 0.3s;
    }

    .mobile-nav-v2.scrolled {
        height: calc( var(--mobileNavHeight) - 10px);
        transition: height 0.3s;
        background-color: var(--navBgColorScroll);
    }

    .mobile-nav-v2 img.mobile-logo {
        width: var(--mobileWidthLogo);
        margin-right: 10px;
        transition: width 0.3s;
    }

    .scrolled.mobile-nav-v2 img.mobile-logo {
        width: calc( var(--mobileWidthLogo) - <?php echo $logoMobileScrollResize; ?>);
        transition: width 0.3s;
    }

    .mobile-nav-v2 .mobile-nav-v2 .submenu {
        display: none;
    }
    .mobile-nav-v2 span {
        display: inline-block;
        vertical-align: middle;
    }

    .mobile-nav-v2 ul {
        list-style-type: none;
        margin-bottom: 0;
    }

    .mobile-nav-v2 ul:not(.social-icons-div) {
        display: block;
        text-align: right;
    }

    .mobile-nav-v2 .soc-logo ul a {
        font-size: calc( var(--navTabSize) + 0.1em);
        padding: 5px;
        color: var(--navTabColor);
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
    }

    .mobile-nav-v2.scrolled .soc-logo ul a {
        color: var(--navTabScrollColor);
    }

    .mobile-nav-v2 .soc-logo ul a:hover {
        color: var(--navSocialColor);
        background-color: var(--navSocialBgColor);
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
    }

    .mobile-nav-v2 .menu {
        margin: 4px 0 0 0;
        padding-left: 1.25em;
        cursor: pointer;
        position: relative;
        width: 45px;
        height: 45px;
        text-align: right;
        overflow: hidden;
    }

    .menu-close {
        font-size: 0em;
        opacity: 0;
        text-align: center;

    -webkit-transition: 0.2s;
            transition: 0.2s;
    }

    .menu-close-visible {
        font-size: 2em;
        opacity: 1;
        color: var(--navTabColor);

        -webkit-transition: 0.2s 0.4s;
                transition: 0.2s 0.4s;
    }

    .scrolled .menu-close-visible {
        color: var(--navTabScrollColor);
    }

    .menu-global {
        z-index: -1;
        position: absolute;
        left: 0;
        height: 5px; 
        width: 100%;
        background-color: var(--navTabColor);

        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
        -webkit-transition: 0.2s;
                transition: 0.2s;
    }

    .scrolled .menu-global {
        background-color: var(--navBgColorScroll);
    }

    .menu-global:not(.expand) {
        background-color: var(--hamburgerColor);
    }

    .scrolled .menu-global:not(.expand) {
        background-color: var(--hamburgerScrollColor);
    }

    .menu-global.expand:has(.submenu) {
        padding-bottom: 0 !important;
    }

    li.sub-menu-global:first-of-type {
        padding-top: 10px;
    }

    .menu-global:hover {
    left: 10px;
    -webkit-transition: all 0.2s;
            transition: all 0.2s;
    }

    .menu-text{
        opacity: 0;
        font-size: 0em;
        padding: 10px 0;
        -webkit-transition: 0.1s;
                transition: 0.1s;
    }

    .expand {
        box-shadow: rgba(0, 0, 0, 0.1) -2.5px 5px 7.5px, rgba(0, 0, 0, 0.1) 2.5px 5px 7.5px;
        width: var(--mobileNavWidth);
        height: 50px;

        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
    }

    .expand:hover {
        a:not(.dropdown-sub) {
            color: var(--navTabHoverColor);
        }
    }

    
    .menu-global.expand.active-li {
        background-color: var(--navTabHoverColor);
    }

    .menu-global.expand.active-li a {
        color: var(--navBgColor);
    }

    .menu-global.expand:hover {
        background-color: var(--navTabHoverColor);
        .submenu {
            color: var(--navBgColor);
        }
        a {
            color: var(--navBgColor);
        }
    }

    .expand a.dropdown-sub:hover  {
        color: var(--navBgColor);
    }

    .scrolled .expand:hover {
        a:not(.dropdown-sub) {
            color: var(--navBgColor);
        }
    }

    .scrolled .expand a.dropdown-sub:hover  {
        color: var(--navBgColor);
    }

    .menu-text-expand {
        position: relative;
        color: var(--navTabColor);
        text-transform: var(--navTextTransform);
        text-decoration: none !important;
        opacity: 0.8;
        padding: 10px;
        top: 28%;
        font-size: <?php echo $navTabSize_767;?>;
        font-family: var(--navTabsFont);
        -webkit-transition: all 0.2s 0.2s, font-size 0.1s;
                transition: all 0.2s 0.2s, font-size 0.1s;
    }

    .scrolled .menu-text-expand {
        color: var(--navTabScrollColor);
    }
}
<?php } elseif ( $mobileNavType == 'v3' ) { ?>

    @media (max-width: 767px) {
        .cover-content #audio-control {
            z-index: 99;
        }

        .mobile-nav-v3 {
            display: block !important;
            z-index: 999;
            background-color: var(--navBgColor);
            position: var(--mobileNavPosition);
            width: 100%;
            height: var(--mobileNavHeight);
            transition: height 0.3s;
            img {
                width: var(--mobileWidthLogo);
                transition: width 0.3s;
            }
        }

        .scrolled.mobile-nav-v3 {
            background-color: var(--navBgColorScroll);
        }

        .mobile-nav-v3 .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: var(--mobileNavHeight);
        }

        .scrolled.mobile-nav-v3,
        .scrolled.mobile-nav-v3 .header {
            height: calc( var(--mobileNavHeight) - 10px );
            transition: height 0.3s;
            img {
                width: calc( var(--mobileWidthLogo) - <?php echo $logoMobileScrollResize; ?> );
                transition: width 0.3s;
            }
        }

        .mobile-nav-v3 img.mobile-logo {
            width: var(--mobileWidthLogo);
            margin-right: 10px;
        }

        .mobile-nav-v3 ul {
            list-style-type: none;
            margin-bottom: 0;
        }

        .mobile-nav-v3 ul.submenu {
            display: none;
        }

        .mobile-nav-v3 ul:not(.social-icons-div, .submenu) {
            display: block;
            text-align: right;
        }

        .mobile-nav-v3 .soc-logo ul a {
            font-size: calc( var(--navTabSize) + 0.1em);
            padding: 5px;
            color: var(--navTabScrollColor);
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
        }

        .mobile-nav-v3 .soc-logo ul a:hover {
            color: var(--navSocialColor);
            background-color: var(--navSocialBgColor);
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
        }

        /* .scrolled.mobile-nav-v3 .soc-logo ul a {
            color: var(--navTabScrollColor);
        }

        .scrolled.mobile-nav-v3 .soc-logo ul a:hover {
            color: var(--navTabScrollHoverColor);
        } */

        .mobile-wrapper {
            top: 0;
            width: 100%;
            margin: 0 auto;
            text-align: center;
            position: fixed;
        }

        .mobile {
            max-width: 100%;
            width: 100%;
            height: auto;
            overflow: hidden;
            position: relative;
            display: inline-block;
        }

        .line {
            width: 30px;
            height: 2px;
            margin: 10px 0;
            background-color: #fff;
        }

        .menu-toggle:hover {
            cursor: pointer;
        }

        .mobile-nav ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .mobile-four .mobile-nav {
            background-color: var(--navBgColor);
            width: 100%;
            height: 100%;
            text-align: center;
            transform: translate(0, -999%);
            -webkit-transition: all 0.6s ease-in-out;
            -o-transition: all 0.6s ease-in-out;
            transition: all 0.6s ease-in-out;
        }

        .scrolled .mobile-four .mobile-nav {
            background-color: var(--navBgColorScroll);
        }

        .mobile-four .mobile-nav li a {
            color: var(--navTabColor);
            display: block;
            padding: 15px 20px;
            text-align: left;
            text-decoration: none;
            text-transform: var(--navTextTransform);
            font-family: var(--navTabsFont);
            font-size: <?php echo $navTabSize_767;?>;
            font-weight: var(--navTabFontWeight);
        }

        .scrolled .mobile-four .mobile-nav li a {
            color: var(--navTabScrollColor);
        }
        .mobile-four .mobile-nav li a.dropdown-sub {
            padding: 0 20px 0 30px;
        }

        .mobile-four .mobile-nav li a:hover {
            color: var(--navTabHoverColor);
        }
        
        .mobile-four .mobile-nav li.active-li,
        .mobile-four .mobile-nav li:hover {
            background-color: var(--navTabHoverColor);
            a {
                color: var(--navBgColor);
            }
            transition: 0.5s background-color;
        }

        .scrolled .mobile-four .mobile-nav li a:hover {
            color: var(--navBgColor);
        }
        
        .burger {
            width: 55px;
            height: 55px;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px;
            transition: all .5s ease;
        }
        .burger-strip {
            transition: all .5s ease;
        }
        .strip div {
            height: 3px;
            border-radius: 2px;
            background: var(--hamburgerColor);
            margin: 10px;
            width: 40px;
        }

        .scrolled .strip div {
            background: var(--hamburgerScrollColor);
        }
        /* .burger:hover .strip div {
            background: var(--navTabHoverColor);
        } */

        /* .scrolled .burger:hover .strip div {
            background: var(--navTabScrollHoverColor);
        } */
        .burger-strip div:first-child {
            width: 16px;
        }
        .burger-strip div:last-child {
            width: 28px;
        }

    }

<?php } ?>

/* Mobile navigation end */
</style>
<header>
<!-- Desktop navigation start -->
<nav class="desktop-navigation">
    <div class="container">
        <?php if ( $navigation_column ) { ?>
            <div class="logo-column">
                <a href="index">
                    <img src="custom/<?php echo $logoUrl; ?>" alt="<?php echo $companyName; ?> logo">
                </a>
                <?php if ( $phoneEmailInNav ) {?>
                    <ul class="phone-email-div mb-0">
                        <?php if ( !empty($phoneNumber) ) { ?>
                            <li>
                                    <a href="tel:<?php echo $phoneNumber; ?>"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<?php echo $phoneNumber; ?></a>
                            </li>
                        <?php } ?>
                        <?php if ( !empty($email) ) { ?>
                            <li>
                                    <a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<?php echo $email; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="nav-column">
                <ul class="navigation-tabs mb-0">
                    <?php
                        foreach ($navTabs as $tab) {
                            $arrow = "";
                            if (strpos($tab['class'], 'dropdown-tab') !== false) {
                                $arrow = '<i class="fa-solid fa-angle-down" aria-hidden="true"></i>';
                            }
                            echo "<li class=\"{$tab['class']}\" ><a class=\"navigation-link\" data-type=\"{$tab['type']}\" href=\"{$tab['link']}\" target=\"{$tab['target']}\">{$tab['name']} {$arrow}</a>";
                            if (strpos($tab['class'], 'dropdown-tab') !== false) {
                                echo "<ul class=\"submenu\">";
                                foreach ($subTabs as $sub) {
                                    if ( $tab["type"] ==  $sub["type"]) {
                                        echo "<li><a class=\"{$sub["class"]}\" href=\"{$sub['link']}\" target=\"{$sub['target']}\">{$sub['name']}</a></li>";
                                    }
                                }
                                echo "</ul>";
                            }
                            echo "</li>";
                        }
                    ?>
                </ul>
                <?php if ((!empty($fbLink) || !empty($instaLink) || !empty($twitterLink) || !empty($ytLink)) && $socNavShow) { ?>
                    <ul class="social-icons-div mb-0">
                        <?php if (!empty($fbLink)) {
                            echo '<li>';
                            echo '<a class="social-icon" href="'.$fbLink.'" target="_blank"><i class="fa-brands fa-facebook" aria-hidden="true"></i><span class="no-view-text">facebook</span></a>';
                            echo '</li>';
                        } ?>
                    
                        <?php if (!empty($instaLink)) {
                            echo '<li>';
                            echo '<a class="social-icon" href="'.$instaLink.'" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"></i><span class="no-view-text">instagram</span></a>';
                            echo '</li>';
                        } ?>

                        <?php if (!empty($twitterLink)) {
                            echo '<li>';
                            echo '<a class="social-icon" href="'.$twitterLink.'" target="_blank"><i class="fa-brands fa-twitter" aria-hidden="true"></i><span class="no-view-text">twitter</span></a>';
                            echo '</li>';
                        } ?>
                        <?php if (!empty($ytLink)) {
                            echo '<li>';
                            echo '<a class="social-icon" href="'.$ytLink.'" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i><span class="no-view-text">youtube</span></a>';
                            echo '</li>';
                        } ?>
                    </ul>
                <?php } ?>
            </div>
        <?php } else { ?>
            <a href="index">
                <img src="custom/<?php echo $logoUrl; ?>" alt="<?php echo $companyName; ?> logo">
            </a>
            <ul class="navigation-tabs mb-0">
            <?php
                foreach ($navTabs as $tab) {
                    $arrow = "";
                    if (strpos($tab['class'], 'dropdown-tab') !== false) {
                        $arrow = '<i class="fa-solid fa-angle-down" aria-hidden="true"></i>';
                    }
                    echo "<li class=\"{$tab['class']}\" ><a class=\"navigation-link\" data-type=\"{$tab['type']}\" href=\"{$tab['link']}\" target=\"{$tab['target']}\">{$tab['name']} {$arrow}</a>";
                    if (strpos($tab['class'], 'dropdown-tab') !== false) {
                        echo "<ul class=\"submenu\">";
                        foreach ($subTabs as $sub) {
                            if ( $tab["type"] ==  $sub["type"]) {
                                echo "<a class=\"{$sub["class"]}\" href=\"{$sub['link']}\" target=\"{$sub['target']}\">{$sub['name']}</a> <br />";
                            }
                        }
                        echo "</ul>";
                    }

                    echo "</li>";
                }
            ?>
            </ul>
            <?php if ((!empty($fbLink) || !empty($instaLink) || !empty($twitterLink) || !empty($ytLink)) && $socNavShow) { ?>
                <ul class="social-icons-div mb-0">
                    <?php if (!empty($fbLink)) {
                        echo '<li>';
                        echo '<a class="social-icon" href="'.$fbLink.'" target="_blank"><i class="fa-brands fa-facebook" aria-hidden="true"></i><span class="no-view-text">facebook</span></a>';
                        echo '</li>';
                    } ?>
                
                    <?php if (!empty($instaLink)) {
                        echo '<li>';
                        echo '<a class="social-icon" href="'.$instaLink.'" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"></i><span class="no-view-text">instagram</span></a>';
                        echo '</li>';
                    } ?>

                    <?php if (!empty($twitterLink)) {
                        echo '<li>';
                        echo '<a class="social-icon" href="'.$twitterLink.'" target="_blank"><i class="fa-brands fa-twitter" aria-hidden="true"></i><span class="no-view-text">twitter</span></a>';
                        echo '</li>';
                    } ?>
                    <?php if (!empty($ytLink)) {
                        echo '<li>';
                        echo '<a class="social-icon" href="'.$ytLink.'" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i><span class="no-view-text">youtube</span></a>';
                        echo '</li>';
                    } ?>
                </ul>
            <?php } ?>
        <?php } ?>
    </div>
</nav>
<!-- Mobile navigation start -->
<?php if ( $mobileNavType == "v1" ) { ?>
<div class="mobile-navigation mobile-logo-navigation">
    <a class="logo-holder" href="index">
        <img src="custom/<?php echo $logoUrl; ?>" alt="<?php echo $companyName; ?> logo">
    </a>
    <?php if ((!empty($fbLink) || !empty($instaLink) || !empty($twitterLink) || !empty($ytLink)) && $socNavShow) { ?>
        <ul class="social-icons-div">
            <?php if (!empty($fbLink)) {
                echo '<li>';
                echo '<a class="social-icon" href="'.$fbLink.'" target="_blank"><i class="fa-brands fa-facebook" aria-hidden="true"></i><span class="no-view-text">facebook</span></a>';
                echo '</li>';
            } ?>
        
            <?php if (!empty($instaLink)) {
                echo '<li>';
                echo '<a class="social-icon" href="'.$instaLink.'" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"></i><span class="no-view-text">instagram</span></a>';
                echo '</li>';
            } ?>

            <?php if (!empty($twitterLink)) {
                echo '<li>';
                echo '<a class="social-icon" href="'.$twitterLink.'" target="_blank"><i class="fa-brands fa-twitter" aria-hidden="true"></i><span class="no-view-text">twitter</span></a>';
                echo '</li>';
            } ?>
            <?php if (!empty($ytLink)) {
                echo '<li>';
                echo '<a class="social-icon" href="'.$ytLink.'" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i><span class="no-view-text">youtube</span></a>';
                echo '</li>';
            } ?>
        </ul>
    <?php } ?>
    <div class="nav-container mobile-navigation" tabindex="0">
        <div class="nav-toggle"></div>

        <nav class="nav-items">
            <?php
                    foreach ($navTabs as $tab) {
                        $arrow = "";
                        if (strpos($tab['class'], 'dropdown-tab') !== false) {
                            $arrow = '<i class="fa-solid fa-angle-down" aria-hidden="true"></i>';
                        }
                        echo '<ul>';
                            echo "<li class=\"{$tab['class']} \"><a data-type=\"{$tab['type']}\" class=\"nav-item {$tab['class']} navigation-link\" href=\"{$tab['link']}\" target=\"{$tab['target']}\">{$tab['name']} {$arrow}</a>";
                            if (strpos($tab['class'], 'dropdown-tab') !== false) {
                                echo "<ul class=\"submenu\">";
                                foreach ($subTabs as $sub) {
                                    if ( $tab["type"] ==  $sub["type"]) {
                                        echo "<li><a class=\"{$sub["class"]} nav-item \" href=\"{$sub['link']}\" target=\"{$sub['target']}\">{$sub['name']}</a></li>";
                                    }
                                }
                                echo "</ul>";
                            }
                            echo '</li>';
                        echo '</ul>';
                    }
            ?>
        </nav>
    </div>
</div>
<?php } elseif ( $mobileNavType == "v2" ) {?>
    <nav class="mobile-nav-v2">
        <ul class="menu">
            <div class="menu-close fa fa-close"></div>
            
            <?php
                    $br = 0;
                    foreach ($navTabs as $tab) {
                        $arrow = "";
                        if (strpos($tab['class'], 'dropdown-tab') !== false) {
                            $arrow = '<i class="fa-solid fa-arrow-custom fa-angle-right" aria-hidden="true"></i>';
                        }
                        echo "<li class=\"menu-global menu-item-{$br}\"><a data-type=\"{$tab['type']}\" class=\"menu-text nav-item {$tab['class']} navigation-link\" href=\"{$tab['link']}\" target=\"{$tab['target']}\">{$tab['name']} {$arrow}</a>";
                        if (strpos($tab['class'], 'dropdown-tab') !== false) {
                            echo "<ul class=\"submenu\">";
                            foreach ($subTabs as $sub) {
                                if ( $tab["type"] ==  $sub["type"]) {
                                    echo "<li class=\"sub-menu-global \"><a class=\"{$sub["class"]} nav-item menu-text \" href=\"{$sub['link']}\" target=\"{$sub['target']}\">{$sub['name']}</a> </li><br />";
                                }
                            }
                            echo "</li></ul>";
                        } else {
                            echo "</li>";
                        }
                        $br++;
                    }
            ?>
        </ul>
        <div class="soc-logo flex-center-center" >
        <?php if ((!empty($fbLink) || !empty($instaLink) || !empty($twitterLink) || !empty($ytLink)) && $socNavShow) { ?>
            <ul class="social-icons-div flex-center-center">
                <?php if (!empty($fbLink)) {
                    echo '<li>';
                    echo '<a class="social-icon" href="'.$fbLink.'" target="_blank"><i class="fa-brands fa-facebook" aria-hidden="true"></i><span class="no-view-text">facebook</span></a>';
                    echo '</li>';
                } ?>
            
                <?php if (!empty($instaLink)) {
                    echo '<li>';
                    echo '<a class="social-icon" href="'.$instaLink.'" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"></i><span class="no-view-text">instagram</span></a>';
                    echo '</li>';
                } ?>

                <?php if (!empty($twitterLink)) {
                    echo '<li>';
                    echo '<a class="social-icon" href="'.$twitterLink.'" target="_blank"><i class="fa-brands fa-twitter" aria-hidden="true"></i><span class="no-view-text">twitter</span></a>';
                    echo '</li>';
                } ?>
                <?php if (!empty($ytLink)) {
                    echo '<li>';
                    echo '<a class="social-icon" href="'.$ytLink.'" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i><span class="no-view-text">youtube</span></a>';
                    echo '</li>';
                } ?>
            </ul>
        <?php } ?>
        <a href="index">
            <img class="mobile-logo" src="custom/<?php echo $logoMobileUrl; ?>" alt="<?php echo $companyName; ?> mobile logo">
        </a>
        </div>
    </nav>
<?php } elseif ( $mobileNavType == "v3" ) { ?>
    <nav class="mobile-wrapper mobile-nav-v3">
        <div class="mobile mobile-four">
                <div class="header">
                    <div class="menu-toggle burger">
                        <div class="strip burger-strip">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="soc-logo flex-center-center" >
                        <?php if ((!empty($fbLink) || !empty($instaLink) || !empty($twitterLink) || !empty($ytLink)) && $socNavShow) { ?>
                            <ul class="social-icons-div flex-center-center">
                                <?php if (!empty($fbLink)) {
                                    echo '<li>';
                                    echo '<a class="social-icon" href="'.$fbLink.'" target="_blank"><i class="fa-brands fa-facebook" aria-hidden="true"></i><span class="no-view-text">facebook</span></a>';
                                    echo '</li>';
                                } ?>
                            
                                <?php if (!empty($instaLink)) {
                                    echo '<li>';
                                    echo '<a class="social-icon" href="'.$instaLink.'" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"></i><span class="no-view-text">instagram</span></a>';
                                    echo '</li>';
                                } ?>

                                <?php if (!empty($twitterLink)) {
                                    echo '<li>';
                                    echo '<a class="social-icon" href="'.$twitterLink.'" target="_blank"><i class="fa-brands fa-twitter" aria-hidden="true"></i><span class="no-view-text">twitter</span></a>';
                                    echo '</li>';
                                } ?>
                                <?php if (!empty($ytLink)) {
                                    echo '<li>';
                                    echo '<a class="social-icon" href="'.$ytLink.'" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i><span class="no-view-text">youtube</span></a>';
                                    echo '</li>';
                                } ?>
                            </ul>
                        <?php } ?>
                        <a href="index">
                            <img class="mobile-logo" src="custom/<?php echo $logoMobileUrl; ?>" alt="<?php echo $companyName; ?> mobile logo">
                        </a>
                        
                        </div>
                </div>
                <div class="mobile-nav">
                    <ul>
                    <?php
                    foreach ($navTabs as $tab) {
                        $arrow = "";
                        if (strpos($tab['class'], 'dropdown-tab') !== false) {
                            $arrow = '<i class="fa-solid fa-angle-down" aria-hidden="true"></i>';
                        }
                        echo "<li class=\" {$tab['class']} \"><a data-type=\"{$tab['type']}\" class=\"nav-item {$tab['class']} navigation-link\" href=\"{$tab['link']}\" target=\"{$tab['target']}\">{$tab['name']} {$arrow}</a>";
                        if (strpos($tab['class'], 'dropdown-tab') !== false) {
                            echo "<ul class=\"submenu\">";
                            foreach ($subTabs as $sub) {
                                if ( $tab["type"] ==  $sub["type"]) {
                                    echo "<li><a class=\"{$sub["class"]} nav-item \" href=\"{$sub['link']}\" target=\"{$sub['target']}\">{$sub['name']}</a> <br /></li>";
                                }
                            }
                            echo "</ul>";
                        }
                        echo "</li>";
                    }
            ?>
                    </ul>
                </div>
            </div>
    </nav>

<?php } ?>

</header>
<?php if ( $mobileNavType == "v2" ) { ?>
    <style>
        <?php for ($i = 0; $i < $br; $i++) : ?>
            .menu-item-<?php echo $i; ?> {
                top: <?php echo $i * 18; ?>px;
            }
            .menu-<?php echo $i; ?>-expand {
                top: <?php echo $i * 50 + 50; ?>px;
                background: <?php echo $nabBgColor; ?>;
                transition: all 0.5s 0.1s, left 0.1s;
            }
        <?php endfor; ?>
    </style>
<?php } ?>

<script>

$(document).ready(function() {
    window.addEventListener("scroll", function() {
        var navigation = document.querySelector("nav.desktop-navigation");
        var mobileNavigation = document.querySelector(".mobile-navigation.mobile-logo-navigation");
        var mobileNavigationV2 = document.querySelector(".mobile-nav-v2");
        var mobileNavigationV3 = document.querySelector(".mobile-nav-v3");
        if (window.scrollY > 50) {
            navigation.classList.add("scrolled");
            <?php if ( $mobileNavType == "v1" ) { ?>
                mobileNavigation.classList.add("scrolled");
            <?php } elseif( $mobileNavType == "v2" ) { ?>
                mobileNavigationV2.classList.add("scrolled");
                <?php } elseif( $mobileNavType == "v3" ) { ?>
                mobileNavigationV3.classList.add("scrolled");
            <?php } ?>
        } else {
            navigation.classList.remove("scrolled");
            <?php if ( $mobileNavType == "v1" ) { ?>
                mobileNavigation.classList.remove("scrolled");
            <?php } elseif( $mobileNavType == "v2" ) { ?>
                mobileNavigationV2.classList.remove("scrolled");
                <?php } elseif( $mobileNavType == "v3" ) { ?>
                mobileNavigationV3.classList.remove("scrolled");
            <?php } ?>
        }
    });


    $('.desktop-navigation li.dropdown-tab a').on("click", function(event) {
        event.preventDefault();
        //console.log("aaa");
        if ( $(this).parent().find('.submenu').css('display') == 'none' ) {
            $ ( this ).find('i.fa-angle-down').css('transform', 'translateY(-50%) rotate(180deg)');
        } else {
            $ ( this ).find('i.fa-angle-down').css('transform', 'translateY(-50%) rotate(360deg)');
        }
        $( this ).parent().find(".submenu").slideToggle();
    });
    $(document).on("click", function(event) {
        if (!$(event.target).closest('.desktop-navigation li.dropdown-tab a').length) {
            $(".desktop-navigation li.dropdown-tab .submenu").hide();
            $( this ).find('nav.desktop-navigation i.fa-angle-down').css('transform', 'translateY(-50%) rotate(360deg)');
        }
    });

});
</script>

<?php if ( $mobileNavType == "v1" ) { ?>

    <script>

    $(document).ready(function() {
        $('.mobile-navigation nav a.dropdown-tab').on("click", function(event) {
            event.preventDefault();
            if ( $(this).parent().find(".submenu").css('display') == 'none' ) {
                $ ( this ).find('i.fa-angle-down').css('transform', 'translateY(-3px) rotate(180deg)');
            } else {
                $ ( this ).find('i.fa-angle-down').css('transform', 'translateY(0) rotate(360deg)');
            }
            $(this).parent().find(".submenu").slideToggle();
        });
        

        $(document).on("click", function(event) {
            if (!$(event.target).closest(".mobile-navigation .dropdown-tab").length) {
                $(".mobile-navigation .submenu").hide();
            }
        });

        const nav = document.querySelector(".nav-container");
        const body = document.querySelector('body');

        if (nav) {
            const toggle = nav.querySelector(".nav-toggle");

            if (toggle) {
                toggle.addEventListener("click", (event) => {
                    if (nav.classList.contains("is-active")) {
                        nav.classList.remove("is-active");
                        body.classList.remove("is-active-body");
                    } else {
                        nav.classList.add("is-active");
                        body.classList.add("is-active-body");
                    }
                });

                $(document).on("click", function (event) {
                    if (!$(event.target).closest('.nav-container').length) {
                        nav.classList.remove("is-active");
                        body.classList.remove("is-active-body");
                        $(".mobile-navigation .dropdown-tab").find('i.fa-angle-down').css('transform', 'translateY(0) rotate(360deg)');
                    }
                });
            }
        }
    });



    </script>

<?php } ?>

<?php if ( $mobileNavType == "v2" ) { ?>

    <script>

        var numberOfTab= <?php echo $br; ?>;
        var Menu = {
        el: {
            menu: $('.menu'),
            menuTop: $('.menu-top'),
            menuClose: $('.menu-close'),
            menuMiddle: $('.menu-middle'),
            menuBottom: $('.menu-bottom'),
            menuText: $('.menu-text')
        },
        
        
        init: function() {
            Menu.bindUIactions();
        },
        
        bindUIactions: function() {
            Menu.el.menu
                .on(
                'click',
                function(event) {
                setTimeout(() => {
                    if ( $('.menu').css('overflow') == 'hidden' ) {
                        $('.menu').css('overflow', 'visible');
                    } else {
                        $('.menu').css('overflow', 'hidden');
                    }
                }, "100");
                Menu.activateMenu(event);
                event.preventDefault();
            }
            );
        },
        
        activateMenu: function() {
            Menu.el.menuTop.toggleClass('menu-top-expand expand');
            Menu.el.menuMiddle.toggleClass('menu-middle-expand expand');
            Menu.el.menuBottom.toggleClass('menu-bottom-expand expand'); 
            Menu.el.menuText.toggleClass('menu-text-expand');
            Menu.el.menuClose.toggleClass('menu-close-visible');
            for (let i=0 ;i < numberOfTab ; i++ ) {
                var key = 'menu-item-' + i;
                Menu.el[key].toggleClass('menu-'+ i +'-expand expand'); 
            }
        }
        };
        
        $(".menu .menu-global").click(function(e) {
            e.stopPropagation();
        });

        Menu.init();
        for (let i=0 ;i < numberOfTab ; i++ ) {
            var key = 'menu-item-' + i;
            Menu.el[key] = $('.menu-item-' + i);
        }
        $('.menu-close').on('click', function(){

        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('.mobile-nav-v2 ul.submenu').length) {
                $('.mobile-nav-v2 ul.submenu').css('display', 'none');
                var i = $(this).find('i.fa-arrow-custom');
                $('.mobile-nav-v2 li:has(ul.submenu)').css({
                    'left': '',
                    'height': '',
                    'padding': ''
                });
                i.removeClass('fa-angle-left');
                i.addClass('fa-angle-right');
            }
        });

    $('.mobile-nav-v2 li:has(ul.submenu)').on('click', function(event) {
        event.preventDefault();

        var ul = $(this).find('ul');

        var i = $(this).find('i');        

        if (ul.css('display') === 'none') {
            ul.css('display', 'block');
            $(this).css({
                'left': '<?php echo $mobileNavWidth; ?>',
                'height': 'auto',
                'padding': '7px 0'
            });
            i.removeClass('fa-angle-right');
            i.addClass('fa-angle-left');
        } else {
            ul.css('display', 'none');
            $(this).css({
                'left': '',
                'height': '',
                'padding': ''
            });
            i.removeClass('fa-angle-left');
            i.addClass('fa-angle-right');
        }
    });

    </script>
<?php } ?>

<?php if ( $mobileNavType == "v3" ) { ?>

    <script>
        $(document).ready(function() {

            
            var menu = "close";
            $(".mobile-four .menu-toggle").click(function() {
                
                if (menu === "close") {
                    $(this).parent().next(".mobile-nav").css("transform", "translate(0, 0)");
                    menu = "open";
                    $(this).find('.burger-strip div:first-child').css('transform', 'rotate(45deg) translateY(1px) translateX(5px)');
                    $(this).find('.burger-strip div:nth-child(2)').css('transform', 'rotate(-45deg)');
                    $(this).find('.burger-strip div:last-child').css('transform', 'rotate(45deg) translateY(-13px) translateX(2px)');
                    $(this).find('.burger-strip div').css('transition', 'all .65s cubic-bezier(0.075, 0.82, 0.165, 1)');
                    $ ( ".cover-content #audio-control" ).css("z-index", "0");
                } else {
                    $(this).parent().next(".mobile-nav").css("transform", "translate(0, -999%)");
                    menu = "close";
                    $(this).find('.burger-strip div').css('transform', 'none');
                    $(this).find('.burger-strip div').css('transition', 'all .65s cubic-bezier(0.075, 0.82, 0.165, 1)');
                    $ ( ".cover-content #audio-control" ).css("z-index", "99");
                }
            });

                $('.mobile-nav-v3 a.dropdown-tab').on("click", function(event) {
                    event.preventDefault();
                    if ( $(this).parent().find('.submenu').css('display') == 'none' ) {
                        $ ( this ).find('i.fa-angle-down').css('transform', 'translateY(0) rotate(180deg)');
                    } else {
                        $ ( this ).find('i.fa-angle-down').css('transform', 'translateY(0) rotate(360deg)');
                    }
                    $( this ).parent().find(".submenu").slideToggle();
                });

        });
    </script>

<?php } ?>

<script>
    var all_tabs = $('nav a.navigation-link');
    //console.log(all_tabs);
    var activeTab = <?php echo json_encode($activeTab); ?>;
    all_tabs.each(function( index ) {
        //$( this ).data("type");
        if ( $( this ).data("type") == activeTab ) {
            $( this ).addClass("active");
            $( this ).parent().addClass("active-li");
        } else {
            $( this ).removeClass("active");
            $( this ).parent().removeClass("active-li");
        }
    });
</script>