<?php

    ####################################################################
    #################### DEFINE COMPANY NAME ###########################
    ####################################################################

    $companyName = "Bravarija RiS";

    ####################################################################
    #################### DEFINE FONT START #############################
    ####################################################################

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

    ####################################################################
    #################### DEFINE SOCIAL PHONE EMAIL #####################
    ####################################################################

    //set fb link
    $fbLink = "https://www.w3schools.com/icons/fontawesome_icons_intro.asp";
    //set instagram link
    $instaLink = "";
    //set twitter link
    $twitterLink = "";
    //set yt link
    $ytLink = "";
    //whatsapp link
    $whatsappLink = true;
    //viber link
    $viberLink = false;
    //set true if want show phone and email in navigation
    $phoneEmailInNav = false;
    //set phone number
    $phoneNumber = "+381695151702";
    //set email address
    $email = "stefanstanisavljevic777@gmail.com";
    //set side social icons
    $sideSocialIcons = true;
    // set left or right
    $sideSocialIconsAlign = "right";

    ####################################################################
    #################### ALL NAVIGATION STYLE ##########################
    ####################################################################

    //define type of navigation bootstrap, custom, hamburger
    $type_of_navigation = "hamburger";
    //define logo width
    $widthLogo = "80px";
    //logo resize value set in px
    $logoScrollResize = "25px";
    //navigation container padding
    $navigation_container_padding = "3px 3px";
    //set nav bg color in top position
    $nabBgColor = "#11101d";
    //set nav bg color in scroll position
    $navBgColorScroll = "#11101d";
    //set padding between the tabs
    $tabPadding = "20px";
    //set text-transform can be uppercase lowercase capitalize
    $navTextTransform = "capitalize";
    //set color of tabs in top position
    $navTabColor = "#fff";
    //set colors of tabs in scroll position
    $navTabScrollColor = "#fff";
    //set color of tabs in hover state in top position
    $navTabHoverColor = "#fcba03";
    //set color of tabs in hover state in scroll position
    $navTabScrollHoverColor = "#fcba03";
    //define font for navigation
    $navTabsFont = "'Smooch Sans', sans-serif";
    //define font weight in navigation
    $navTabFontWeight = "200";
    //define font size of navigation tabs
    $navTabSize = "1.2em";
    //set logo name
    $logoUrl = "logo.png";
    //disable social icon *(enter resolution in px)
    $disableSocial = "991px";
    //set true if want show navigation from database(API)
    $dynamicTab = false;
    //define mobile logo width
    $mobileWidthLogo = "50px";
    //logo mobile scroll resize
    $logoMobileScrollResize = "20px";
    //hamburger menu color
    $hamburgerColor = "#fff";
    //hamburger scroll menu color
    $hamburgerScrollColor = "#fff";
    ####################################################################
    #################### CUSTOM NAVIGATION V1 START ####################
    ####################################################################

    //set true if want navigation in column true/false
    $navigation_column = false;
    //set column if $navigation_column set column, if not set unset
    $navFlexDirection = "unset";
    //set position of nav. Can be fixed, static, relative
    $navigationPosition = "fixed";
    //can be space-round between center left right (this affect to whole navigation container) navigationTabsPositionMarginRight and navigationTabsPositionMargin == unset
    $navigationFlexPosition = "space-around";
    //can be auto or unset (this affect to tabs list)
    $navigationTabsPositionMargin = "auto";
    //can be auto or unset (this affect to tabs list)
    $navigationTabsPositionMarginRight = "unset";
    //set navigation height value, in scroll this height is smaller for 30px
    $heightNav = "unset";
    //logo top position
    $logoTopPosition = "0";
    //social nav bg hover color
    $navSocialBgColor = "#fcba03";
    //social nav hover color
    $navSocialColor = "#000";
    //set 0 if want phone and email in nav be on right side ($phoneEmailPositionLeft must be sit unset)
    $phoneEmailPositionRight = "0";
    //set 0 if want phone and email in nav be on left side ($phoneEmailPositionRight must be sit unset)
    $phoneEmailPositionLeft = "unset";

    ####################################################################
    #################### CUSTOM ON MOBILE NAVIGATION ###################
    ####################################################################

    //mobile logo
    $logoMobileUrl = $logoUrl;
    //mobile navigation logo size
    $mobileWidthLogo = "60px";
    //hamburger icon color
    $hamburgerMobileNavigationIcon = "#fff";
    //enter mobile nav type (v1,v2,v3)
    $mobileNavType = "v3";
    //nav height
    $mobileNavHeight = "70px";
    //mobile nav position (static, relative, fixed)
    $mobileNavPosition = "fixed";
    //v1 tabs background color
    $mobileTabsBgColor = "#fcba03";
    //v1 tabs color
    $mobileTabsColor = "#000";
    //v1 tabs hover bg color
    $mobileTabsBgHoverColor = "#755600";
    //v1 tabs hover color
    $mobileTabsHoverColor = "#ffffff";
    //v2 mobile tabs width
    $mobileNavWidth = "130px";

    ####################################################################
    #################### BOOTSTRAP NAVIGATION STYLE ####################
    ####################################################################

    #set navigation column, row, column-reverse
    $bootstrap_nav_flex_direction = "row";
    #set max-width for container true/false (%)
    $bootstrap_nav_full_width = true;
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
    #use other hamburger true/false
    $use_other_hamburger = false;


    ####################################################################
    #################### HAMBURGER NAVIGATION STYLE ####################
    ####################################################################

    #set type of hamburger menu 1,2,3,4,5,6,7
    $hamburger_menu_type = 2;
    #set tabs hover background color
    $hamburger_menu_tabs_bg = "#fff";
    #hamburger menu side bg color
    $hamburger_menu_side_bg = "#11101d";
    #hamburger menu logo position center, end
    $hamburger_menu_logo_position = "center";

    ####################################################################
    #################### NAVIGATION TABS ARRAY #########################
    ####################################################################

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

    ####################################################################
    #################### ALL SECTION ARRAY #############################
    ####################################################################

    $homepageSection = array (
        "under_cover",
        #"simple_section_3",
        "slideshow_bootstrap",
        #"slideshow_v1",
        #"simple_section_2",
        "text_image_section_2",
        "gallery_v1",
        "simple_section_1",
        "text_image_section",
        "section_column",
        #"form_section",
        #"gallery_v2"
    );

    ####################################################################
    #################### COVER SECTION #################################
    ####################################################################
    //video, custom_cover, slideshow, slideshow_bootstrap, cover_html
    $cover_content ="video";
    //video, slideshow, custom section margin-top on desktop 
    $desktop_video_margin_top = "70px";
    //video, slideshow, custom section margin-top on mobile
    $mobile_video_margin_top = "50px";
    #################################
    ############SLIDESHOW cover######
    #################################
    //slideshow autoplay
    $slideshowAutoplay = true;
    //slideshow delay
    $slideshowDelay = "3000";
    //show hide arrow
    $slideshowArrow = true;
    //slideshow animation *(1-12) //1,2,3,4,5,6,7,8,9,10,11
    $slideshowAnimation = 1;
    //slideshow mobile height *bootstrap
    $slideshow_height_mobile = "60vh";
    //slideshow alpha can be brightness(0.5), opacity(0.5),blur(3px), contrast(0.5),grayscale(1),  if bootstrap if not set rgba(0,0,0,0.5);*bootstrap
    $slideshowAlpha = "rgba(0,0,0,0.5)";
    //slideshow text color *bootstrap
    $slideshow_text_color = "#fff";
    //slideshow arrow color rgba(255,255,255,0.8);*bootstrap
    $slideshow_arrow_color = '#000';
    //slideshow arrow color hover
    $slideshow_hover_arrow_color = "#000";
    //slideshow arrow bg color 
    $slideshow_bg_arrow_color = "rgba(255, 255, 255, 0.7)";
    //slideshow arrow bg color hover
    $slideshow_bg_hover_arrow_color = "rgba(255, 255, 255, 0.7)";
    //slideshow remove arrow on mobile
    $slideshowMobileArrow = false;
    #################################
    ############VIDEO################
    #################################
    //video url
    $video_url = "custom/video.mp4";
    //video poster
    $video_poster = "";
    //if video have a sound
    $video_sound = true;
    #################################
    ############CUSTOM COVER#########
    #################################
    //custom cover bg color
    $custom_cover_bg_color = "#000";
    //text color on the cover section
    $custom_cover_section_text_color = "#fff";
    //play stop button color
    $custom_cover_section_play_btn_color = "#000";
    //custom cover section interval
    $custom_cover_interval = "4000";
    //custom cover section text
    $custom_cover_array = array(
        array("text" => "What you dream", "class" => "text-1-tleft"),
        array("text" => "We make it", "class" => "text-1-bright"),
        array("text" => "Your satisfaction", "class" => "text-2-tright"),
        array("text" => "is our target", "class" => "text-2-bleft"),
    );
    //slideshow content
    $slideshow_array = array(
        array("img" => "slide1.jpg","h2" => "&nbsp;The world is a book, and those who do <br /> not travel read only one page.&nbsp;", "text"=> "Saint Augustine", "data-id" => "0"),
        array("img" => "slide2.jpg","h2" => "&nbsp;We travel not to escape life, but <br /> for life not to escape us.&nbsp;", "text"=> "Anonymous", "data-id" => "1"),
        array("img" => "slide3.jpg","h2" => "&nbsp;Blessed are the curious for <br /> they shall have adventures.&nbsp;", "text"=> "Tim Cahill", "data-id" => "2"),
        array("img" => "slide4.jpg","h2" => "&nbsp;Take only memories, leave <br /> only footprints.&nbsp;", "text"=> "Chief Seattle", "data-id" => "3"),
        array("img" => "slide5.jpg","h2" => "&nbsp;Blessed are the curious for <br /> they shall have adventures.&nbsp;", "text"=> "Lovelle Drachman", "data-id" => "4"),
    );
    

    ####################################################################
    #################### UNDER COVER SECTION ###########################
    ####################################################################

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

    ####################################################################
    #################### SLIDESHOW v1 SECTION ##########################
    ####################################################################

    //set slideshow height
    $slideshowSectionDesktopHeight = "700px";
    //set mobile version slideshow height
    $slideshowSectionMobileHeight = "400px";

    ####################################################################
    #################### SLIDESHOW bootstrap SECTION ###################
    ####################################################################

    //slideshow bootstrap autoplay
    $slideshowBootstrapAutoplay = $slideshowAutoplay;
    //slideshow bootstrap bg color
    $bootstrapSlideshowBg = "#fff";
    //slideshow text align
    $slideshowBootstrapTextAlign = "center";
    //slideshow content horizontal align left, center
    $slideshowBootstrapHorizontalAlign = "center";
    //slideshow content vertical align top, center, bottom
    $slideshowBootstrapVerticalAlign = "center";
    //filter
    $slideshowBootstrapAlpha = "brightness(0.5)";
    
    ####################################################################
    #################### GALLERY SECTION ###############################
    ####################################################################

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

####################################################################
#################### SIMPLE SECTION 1 ##############################
####################################################################
//simple section title color
$simple_section_1_title_color = "#fff";
//simple section subtitle color
$simple_section_1_subtitle_color = "#fff";
//simple section text color
$simple_section_1_text_color = "#fff";
//simple section bg color
$simple_section_1_bg_color = "#000";
//simple section image url
$simple_section_1_bg_url = "default_section_back.jpg";
//simple section image attachment
$simple_section_1_bg_attachment = "fixed";
//simple section image size
$simple_section_1_bg_size = "cover";
//simple section image repeat
$simple_section_1_bg_repeat = "no-repeat";
//simple section html
$simple_section_1_html = <<<HTML

<img class="d-block mx-auto mb-4" src="custom/logo.png" alt="" width="72" height="">
<h2 class="subtitle-h2">Simple section 1</h2>
<h3 class="title-h3">Simple section 1</h3>
<div class="col-lg-8 mx-auto">
    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">button</button>
    </div>
</div>

HTML;

####################################################################
#################### SIMPLE SECTION 2 ##############################
####################################################################
//simple section title color
$simple_section_2_title_color = "#fff";
//simple section subtitle color
$simple_section_2_subtitle_color = "#fff";
//simple section text color
$simple_section_2_text_color = "#fff";
//simple section bg color
$simple_section_2_bg_color = "#000";
//simple section image url
$simple_section_2_bg_url = "default_section_back.jpg";
//simple section image attachment
$simple_section_2_bg_attachment = "fixed";
//simple section image size
$simple_section_2_bg_size = "cover";
//simple section image repeat
$simple_section_2_bg_repeat = "no-repeat";
//simple section html
$simple_section_2_html = <<<HTML

<img class="d-block mx-auto mb-4" src="custom/logo.png" alt="" width="72" height="">
<h2 class="subtitle-h2">Simple section 2</h2>
<h3 class="title-h3">Simple section 2</h3>
<div class="col-lg-8 mx-auto">
    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">button</button>
    </div>
</div>

HTML;

####################################################################
#################### SIMPLE SECTION 3 ##############################
####################################################################
//simple section title color
$simple_section_3_title_color = "#fff";
//simple section subtitle color
$simple_section_3_subtitle_color = "#fff";
//simple section text color
$simple_section_3_text_color = "#fff";
//simple section bg color
$simple_section_3_bg_color = "#000";
//simple section image url
$simple_section_3_bg_url = "default_section_back.jpg";
//simple section image attachment
$simple_section_3_bg_attachment = "fixed";
//simple section image size
$simple_section_3_bg_size = "cover";
//simple section image repeat
$simple_section_3_bg_repeat = "no-repeat";
//simple section html
$simple_section_3_html = <<<HTML

<img class="d-block mx-auto mb-4" src="custom/logo.png" alt="" width="72" height="">
<h2 class="subtitle-h2">Simple section 3</h2>
<h3 class="title-h3">Simple section 3</h3>
<div class="col-lg-8 mx-auto">
    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">button</button>
    </div>
</div>

HTML;


####################################################################
#################### TEXT IMAGE SECTION 1 ##########################
####################################################################
//simple section title color
$text_image_section_1_title_color = "#fff";
//simple section subtitle color
$text_image_section_1_subtitle_color = "#fff";
//simple section text color
$text_image_section_1_text_color = "#fff";
//simple section bg color
$text_image_section_1_bg_color = "#000";
//simple section image url
$text_image_section_1_bg_url = "default_section_back.jpg";
//simple section image attachment
$text_image_section_1_bg_attachment = "fixed";
//simple section image size
$text_image_section_1_bg_size = "cover";
//simple section image repeat
$text_image_section_1_bg_repeat = "no-repeat";
//simple section html
$text_image_section_1_html = <<<HTML

<div class="row align-items-center py-5">
    <div class="col-12 col-sm-6 col-lg-6 m-auto">
    <img src="custom/gallery/gallery_7.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-12 col-sm-6 col-lg-6">
    <h2 class="display-5 fw-bold lh-1 mb-3 subtitle-h2">Responsive left-aligned hero with image</h2>
    <h3 class="title-h3">Text image section 1</h3>
    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
    </div>
    </div>
</div>
<div class="row align-items-center py-5">
    <div class="col-12 col-sm-6 col-lg-6">
    <h2 class="display-5 fw-bold lh-1 mb-3 subtitle-h2">Responsive left-aligned hero with image</h2>
    <h3 class="title-h3">Text image section 1</h3>
    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
    </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-6 m-auto">
    <img src="custom/gallery/gallery_7.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
</div>

HTML;


####################################################################
#################### TEXT IMAGE SECTION 2 ##########################
####################################################################
//simple section title color
$text_image_section_2_title_color = "#fff";
//simple section subtitle color
$text_image_section_2_subtitle_color = "#fff";
//simple section text color
$text_image_section_2_text_color = "#fff";
//simple section bg color
$text_image_section_2_bg_color = "#000";
//simple section image url
$text_image_section_2_bg_url = "default_section_back.jpg";
//simple section image attachment
$text_image_section_2_bg_attachment = "fixed";
//simple section image size
$text_image_section_2_bg_size = "cover";
//simple section image repeat
$text_image_section_2_bg_repeat = "no-repeat";
//simple section html
$text_image_section_2_html = <<<HTML

<div class="row align-items-center py-5">
    <div class="col-12 col-sm-6 col-lg-6 m-auto">
    <img src="custom/gallery/gallery_7.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-12 col-sm-6 col-lg-6">
    <h2 class="display-5 fw-bold lh-1 mb-3 subtitle-h2">Responsive left-aligned hero with image</h2>
    <h3 class="title-h3">Text image section 2</h3>
    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
    </div>
    </div>
</div>
<div class="row align-items-center py-5">
    <div class="col-12 col-sm-6 col-lg-6">
    <h2 class="display-5 fw-bold lh-1 mb-3 subtitle-h2">Responsive left-aligned hero with image</h2>
    <h3 class="title-h3">Text image section 2</h3>
    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
    </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-6 m-auto">
    <img src="custom/gallery/gallery_7.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
</div>

HTML;

####################################################################
#################### section column  ###############################
####################################################################
//simple section title color
$section_column_title_color = "#fcfc";
//simple section subtitle color
$section_column_subtitle_color = "#acac";
//simple section text color
$section_column_text_color = "#fff";
//simple section bg color
$section_column_bg_color = "#000";
//simple section image url
$section_column_bg_url = "default_section_back.jpg";
//simple section image attachment
$section_column_bg_attachment = "fixed";
//simple section image size
$section_column_bg_size = "cover";
//simple section image repeat
$section_column_bg_repeat = "no-repeat";
//simple section html
$section_column_html = <<<HTML

<h2 class="pb-2 border-bottom subtitle-h2">Columns with icons</h2>
<div class="row g-4 row-cols-1 row-cols-lg-3">
    <div class="feature col">
    <div class="">
    <img src="custom/gallery/gallery_7.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <h3 class="title-h3">Featured title</h3>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
    </div>
    <div class="feature col">
    <div class="">
        <img src="custom/gallery/gallery_7.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <h3 class="title-h3">Featured title</h3>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
    </div>
    <div class="feature col">
    <div class="">
    <img src="custom/gallery/gallery_7.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <h3 class="title-h3">Featured title</h3>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
    </div>
</div>

HTML;

?>