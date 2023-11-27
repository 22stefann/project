<?php

    //definisanje fontova

    $googleFont = "'https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap'";

    //definisanje navigacije

    $navigationPosition = "fixed";

    $navigationFlexPosition = "space-around";
    
    $navigationTabsPositionMargin = "unset"; //auto ,unset

    $navigationTabsPositionMarginRight = "auto";

    $heightNav = "120px";

    $widthLogo = "150px";

    $nabBgColor = "rgba(0,0,0,0.5)";

    $nabBgColorScroll = "rgba(0,0,0)";

    $tabPadding = "5px 20px";

    $navTextTransform = "uppercase";

    $navTabColor = "rgb(249 255 0)";

    $navTabScrollColor = "#fff";

    $navTabHoverColor = "rgb(144 157 255)";
    
    $navTabScrollHoverColor = "rgb(144 157 255)";

    $navTabsFont = "'Smooch Sans', sans-serif";

    $navTabFontWeight = "200";

    $navTabSize = "1.2em";

    $logoUrl = "logo.png";

    $fbLink = "";

    $instaLink = "https://www.w3schools.com/icons/fontawesome_icons_intro.asp#";
    
    $twitterLink = "https://www.w3schools.com/icons/fontawesome_icons_intro.asp";
    
    $ytLink = "https://www.w3schools.com/icons/fontawesome_icons_intro.asp#";

    $dynamicTab = false;

    $navTabs = array(
        array("type" => "HOME", "name" => "Pocetna", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "ABOUT", "name" => "O Nama", "link" => "#", "target" => "_self", "class" => "navigation-tab dropdown-tab"),
        array("type" => "HISTORY", "name" => "Istorija", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "GALLERY", "name" => "Galerija", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "CONTACT", "name" => "Kontakt", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "GALLERY", "name" => "Galerija", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "CONTACT", "name" => "Kontakt", "link" => "#", "target" => "_self", "class" => "navigation-tab")
    );

    $subTabs = array(
        array("type" => "ABOUT", "name" => "sub1", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
        array("type" => "ABOUT", "name" => "sub2", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
    );

?>