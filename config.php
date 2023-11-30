<?php

    //define fonts

    $googleFont = "'https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap'";

    //define navigation

    //set true if want navigation in column
    $navigation_column = false;
    //set column if $navigation_column set true, if not set unset
    $navFlexDirection = "unset";
    //set position of nav. Can be fixed, static, relative
    $navigationPosition = "fixed";
    //can be space-round space between center left right (this affect to whole navigation container)
    $navigationFlexPosition = "space-around";
    //can be auto or unset (this affect to tabs list)
    $navigationTabsPositionMargin = "auto";
    //can be auto or unset (this affect to tabs list)
    $navigationTabsPositionMarginRight = "unset";
    //set navigation height value, in scroll this height is smaller for 30px
    $heightNav = "120px";
    //define logo width
    $widthLogo = "150px";
    //set nav bg color in top position
    $nabBgColor = "rgba(0,0,0,0.5)";
    //set nav bg color in scroll position
    $nabBgColorScroll = "rgba(0,0,0)";
    //set padding between the tabs
    $tabPadding = "5px 20px";
    //set text-transform can be uppercase lowercase capitalize
    $navTextTransform = "uppercase";
    //set color of tabs in top position
    $navTabColor = "rgb(249 255 0)";
    //set colors of tabs in scroll position
    $navTabScrollColor = "#fff";
    //set color of tabs in hover state in top position
    $navTabHoverColor = "rgb(144 157 255)";
    //set color of tabs in hover state in scroll position
    $navTabScrollHoverColor = "rgb(144 157 255)";
    //define font for navigation
    $navTabsFont = "'Smooch Sans', sans-serif";
    //define font weight in navigation
    $navTabFontWeight = "200";
    //define font size of navigation tabs
    $navTabSize = "1.2em";
    //set logo name
    $logoUrl = "logo.png";
    //set fb link
    $fbLink = "";
    //set instagram link
    $instaLink = "https://www.w3schools.com/icons/fontawesome_icons_intro.asp#";
    //set twitter link
    $twitterLink = "https://www.w3schools.com/icons/fontawesome_icons_intro.asp";
    //set yt link
    $ytLink = "https://www.w3schools.com/icons/fontawesome_icons_intro.asp#";
    //set true if want show phone and email in navigation
    $phoneEmailInNav = true;
    //set phone number
    $phoneNumber = "+381695151702";
    //set email address
    $email = "stefanstanisavljevic777@gmail.com";
    //set 0 if want phone and email in nav be on right side ($phoneEmailPositionLeft must be sit unset)
    $phoneEmailPositionRight = "0";
    //set 0 if want phone and email in nav be on left side ($phoneEmailPositionRight must be sit unset)
    $phoneEmailPositionLeft = "unset";
    //set true if want show navigation from database(API)
    $dynamicTab = false;
    //array for navigation tab
    $navTabs = array(
        array("type" => "HOME", "name" => "Pocetna", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "ABOUT", "name" => "O Nama", "link" => "#", "target" => "_self", "class" => "navigation-tab dropdown-tab"),
        array("type" => "HISTORY", "name" => "Istorija", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "GALLERY", "name" => "Galerija", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "CONTACT", "name" => "Kontakt", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "GALLERY", "name" => "Galerija", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        #array("type" => "TEST", "name" => "O Nama", "link" => "#", "target" => "_self", "class" => "navigation-tab dropdown-tab"),
        array("type" => "CONTACT", "name" => "Kontakt", "link" => "#", "target" => "_self", "class" => "navigation-tab")
    );
    //array for submenu navigation tab
    $subTabs = array(
        array("type" => "ABOUT", "name" => "sub1", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
        array("type" => "ABOUT", "name" => "sub2", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
        #array("type" => "TEST", "name" => "test", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
        #array("type" => "TEST", "name" => "test2", "link" => "#", "target" => "_self", "class" => "dropdown-sub")
    );

?>