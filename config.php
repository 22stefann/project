<?php

    //name of company

    $companyName = "Bravarija RiS";

    //define fonts

    $googleFont = "'https://fonts.googleapis.com/css2?family=Exo+2:wght@300;700&family=Smooch+Sans:wght@100;300&display=swap'";

    //set p
    $all_p_font = "'Exo 2', sans-serif";
    $all_p_font_weight = "300";
    $all_p_font_size = "1.3em";
    $all_p_font_resize = "0.1em";

    //set all h1 font
    $all_h1_font = "'Exo 2', sans-serif";
    $all_h1_transform = "capitalize";     //h1 text transform capitalize, uppercase, lowercase, none
    $all_h1_font_weight = "300";
    $all_h1_font_size = "3.5em";
    $all_h1_font_resize = "0.4em";

    //set all h2 font
    $all_h2_font = "'Exo 2', sans-serif";
    $all_h2_transform = "uppercase";     //h2 text transform capitalize, uppercase, lowercase, none
    $all_h2_font_weight = "700";
    $all_h2_font_size = "1.8em";
    $all_h2_font_resize = "0.2em";



    //define h2 font
    $h2FontFamily = "'Smooch Sans', cursive";

    //define navigation

    //set true if want navigation in column
    $navigation_column = false;
    //set column if $navigation_column set column, if not set unset
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
    $heightNav = "130px";
    //define logo width
    $widthLogo = "70px";
    //define mobile logo width
    $mobileWidthLogo = "50px";
    //logo resize value set in px
    $logoScrollResize = "35px";
    //logo top position
    $logoTopPosition = "10px";
    //set nav bg color in top position
    $nabBgColor = "#1c1945";
    //set nav bg color in scroll position
    $navBgColorScroll = "#1c1945";
    //set padding between the tabs
    $tabPadding = "20px";
    //set text-transform can be uppercase lowercase capitalize
    $navTextTransform = "capitalize";
    //set color of tabs in top position
    $navTabColor = "#fff";
    //set colors of tabs in scroll position
    $navTabScrollColor = "#fff";
    //set color of tabs in hover state in top position
    $navTabHoverColor = "#c2c2c2c2";
    //set color of tabs in hover state in scroll position
    $navTabScrollHoverColor = "#c2c2c2c2";
    //define font for navigation
    $navTabsFont = "'Smooch Sans', sans-serif";
    //define font weight in navigation
    $navTabFontWeight = "200";
    //define font size of navigation tabs
    $navTabSize = "1.3em";
    //set logo name
    $logoUrl = "logo.png";
    //set fb link
    $fbLink = "";
    //set instagram link
    $instaLink = "";
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
    //disable social icon *(enter resolution in px)
    $disableSocial = "991px";
    //set true if want show navigation from database(API)
    $dynamicTab = false;


    #########bootstrap navigation v1 start############
    #set navigation column, row, column-reverse
    $bootstrap_nav_flex_direction = "row";
    #set max-width for container true/false (%)
    $bootstrap_nav_full_width = false;
    #set width for container 25, 50, 75, 100 (%) or empty if want full width
    $bootstrap_nav_container_width = "100";
    #set tabs and social align start, center, end
    $bootstrap_nav_tabs_align = "end";
    #set justify-content in navigation space-around, center, evenly
    $bootstrap_nav_justify = "space-around";
    #set if want changed nav height in scroll true/false
    $bootstrap_nav_height_scroll_change = true;
    #set if want logo not in nav
    $bootstrap_logo_out = false;
    #set top absolute position
    $bootstrap_top_position = "0";
    #set padding around tabs 0,1,2,3,4
    $bootstrap_padding_tabs = 2;
    #########bootstrap navigation v1 end##############
    //array for navigation tab
    $navTabs = array(
        array("type" => "HOME", "name" => "Pocetna", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "ABOUT", "name" => "O Nama", "link" => "#", "target" => "_self", "class" => "navigation-tab dropdown-tab"),
        array("type" => "HISTORY", "name" => "Istorija", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "GALLERY", "name" => "Galerija", "link" => "https://github.com/22stefann/project", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "CONTACT", "name" => "Kontakt", "link" => "#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "GALLERY", "name" => "Galerija", "link" => "https://github.com/22stefann/project#", "target" => "_self", "class" => "navigation-tab"),
        array("type" => "TEST", "name" => "Test", "link" => "#", "target" => "_self", "class" => "navigation-tab dropdown-tab"),
        array("type" => "CONTACT", "name" => "Kontakt", "link" => "https://github.com/22stefann/project", "target" => "_self", "class" => "navigation-tab")
    );
    //array for submenu navigation tab
    $subTabs = array(
        array("type" => "ABOUT", "name" => "sub1", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
        array("type" => "ABOUT", "name" => "sub2", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
        array("type" => "TEST", "name" => "test", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
        array("type" => "TEST", "name" => "test2", "link" => "#", "target" => "_self", "class" => "dropdown-sub")
    );

    //mobile navigation style

    //mobile logo
    $logoMobileUrl = $logoUrl;
    //mobile navigation logo size
    $mobileLogoSize = "70px";
    //hamburger icon color
    $hamburgerMobileNavigationIcon = "#fff";
    //enter mobile nav type (v1,v2,v3)
    $mobileNavType = "v1";
    //nav height
    $mobileNavHeight = "70px";
    //mobile nav position (static, relative, fixed)
    $mobileNavPosition = "fixed";
    //v1 tabs background color
    $mobileTabsBgColor = "#eee";
    //v1 tabs color
    $mobileTabsColor = "#000";
    //v1 tabs hover bg color
    $mobileTabsBgHoverColor = "#fff";
    //v1 tabs hover color
    $mobileTabsHoverColor = "#0e0e0e";
    //v2 mobile tabs width
    $mobileNavWidth = "130px";
    //social nav bg hover color
    $navSocialBgColor = "#42b3f5";
    //social nav hover color
    $navSocialColor = "#000";

    //cover video, section, slideshow
    $cover_content ="slideshow";
    //video margin-top on desktop
    $desktop_video_margin_top = "80px";
    //video margin-top on mobile
    $mobile_video_margin_top = "70px";
    //slideshow autoplay
    $slideshowAutoplay = "false";
    //slideshow delay
    $slideshowDelay = "6000";
    //show hide arrow
    $slideshowArrow = "true";
    //slideshow animation *(1-12) //1,2,3,4,5,6,7,8,9,10,11
    $slideshowAnimation = 3;
    //slideshow mobile height
    $slideshow_height_mobile = "60vh";
    //video url
    $video_url = "custom/video.mp4";
    //video poster
    $video_poster = "";
    //if video have a sound
    $video_sound = true;
    //slideshow content
    $slideshow_array = array(
        array("img" => "slide1.jpg","h2" => "&nbsp;The world is a book, and those who do <br /> not travel read only one page.&nbsp;", "text"=> "Saint Augustine", "data-id" => "0"),
        array("img" => "slide2.jpg","h2" => "&nbsp;We travel not to escape life, but <br /> for life not to escape us.&nbsp;", "text"=> "Anonymous", "data-id" => "1"),
        array("img" => "slide3.jpg","h2" => "&nbsp;Blessed are the curious for <br /> they shall have adventures.&nbsp;", "text"=> "Tim Cahill", "data-id" => "2"),
        array("img" => "slide4.jpg","h2" => "&nbsp;Take only memories, leave <br /> only footprints.&nbsp;", "text"=> "Chief Seattle", "data-id" => "3"),
        array("img" => "slide5.jpg","h2" => "&nbsp;Blessed are the curious for <br /> they shall have adventures.&nbsp;", "text"=> "Lovelle Drachman", "data-id" => "4"),
    );

    #under cover section

    //under cover section bg image
    $underCoverBgImage = "";
    //under cover section bg color
    $underCoverBgColor = "#fff";
    //under cover section text color
    $underCoverTextColor = "#000";
    //under cover section h1 color
    $underCoverTitleColor = "#22228f";
    //under cover section h2 color
    $underCoverSubtitleColor = "#592d73";
    //gallery section
    $gallery_section_title = "gallery";
    $gallery_section_title_color = "#22228f";
    $gallery_array = array(
        array("img" => "gallery_1.jpg" , "alt" => "gallery photo 1"),
        array("img" => "gallery_2.jpg" , "alt" => "gallery photo 2"),
        array("img" => "gallery_3.jpg" , "alt" => "gallery photo 3"),
        array("img" => "gallery_4.jpg" , "alt" => "gallery photo 4 "),
        array("img" => "gallery_5.jpg" , "alt" => "gallery photo 5"),
        array("img" => "gallery_6.jpg" , "alt" => "gallery photo 6"),
        // array("img" => "gallery_7.jpg" , "alt" => "gallery photo"),
        // array("img" => "gallery_8.jpg" , "alt" => "gallery photo")
    );

    
?>