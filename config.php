<?php


####################################################################
#################### DEFINE COMPANY NAME ###########################
####################################################################

$companyName = "Bravarija Ris - Vaš pouzdan partner za bravarske proizvode";

$shortCompanyName = "Bravarija Ris";

$companyAddress = "Podgorska 26, <br /> Osecina, <br /> 14253";

$companyPhone = "+381695151702";

$companyEmail = "stefanstanisavljevic777@gmail.com";

//leave empty if website no hosted
$domain_name = "https://bravarija-ris.000webhostapp.com/";

//define social share image

$socialShareImage = "custom/gallery/gallery_1.jpg";

//index page meta description, keywords, 

$indexMetaDescription = "Bravarija Ris - Pouzdan partner za izradu i montažu metalnih ograda, kapija, stepeništa i drugih bravarskih proizvoda u Osečini.";
$indexMetaKeywords = "Bravarija Osečina, Bravarski proizvodi, Metalne ograde, Kapije, Stepeništa, Izrada i montaža, Pouzdanost, Kvalitet, Stručnost, Osečina";

//about page meta description, keywords, 

$aboutMetaDescription = "Upoznajte nas - saznajte više o našoj strasti, misiji i predanosti. Otkrijte ko smo, šta radimo i zašto to radimo. Posvetite se našoj priči i saznajte kako vam možemo pomoć.";
$aboutMetaKeywords = "O nama, strast, misija, stala, predanost";

//history page meta description, keywords, 

$historyMetaDescription = "Saznajte nasu istoriju, korake koje smo pravili dok smo rasli kao bravarska firma za izdjubravanja. ";
$historyMetaKeywords = "bravarska firma, izdjubravanja, istorija";

//map page meta description, keywords, 

$mapMetaDescription = "Otkrijte nas na mapi, saznajte gde se nalazi Bravarija RIS firma za izvodjenje bravarskih radova prvenstveno izdjubravanja.";
$mapMetaKeywords = "Otkrijte nas, Bravarija RIS, Bravarija, izdjubravanja";

//contact page meta description, keywords, 

$contactMetaDescription = "Kontaktirajte nas putem forme, pozivom, slanjem poruke ako vam trebaju neke informacije ili neki od nasih proizvoda.";
$contactMetaKeywords = "Kontaktirajte nas, informacije, proizvod";

//gallery page meta description, keywords, 

$galleryMetaDescription = "Pogledajte nase slike proizvoda i nacina na koji radimo montaze.";
$galleryMetaKeywords = "Slike proizvoda, montaze, teren";

//faq page meta description, keywords, 

$faqMetaDescription = "Pogledajte najcesca pitanja koje dobijamo i nase odgovore.";
$faqMetaKeywords = "Najcesca pitanja, odgovori";

//custom page meta description, keywords, 

$customMetaDescription = "Pogledajte kastom stranu.";
$customMetaKeywords = "kastom strana";

####################################################################
#################### DEFINE URL ####################################
####################################################################



function defineUrl($urlPath) {
    return $urlPath;
}


$javaScripts = [];

$about_page_link = defineUrl("o-nama");
$history_page_link = defineUrl("istorija");
$contact_page_link = defineUrl("kontakt");
$map_page_link = defineUrl("mapa");
$gallery_page_link = defineUrl("galerija");
$faq_page_link = defineUrl("pitanja-i-odgovori");



####################################################################
#################### DEFINE POPUP ##################################
####################################################################

$popup_delay = "10000";

$show_popup = false;

$show_one_popup = false;

$show_popup_button = false;

$popup_close_bg_color = "#000";

$popup_close_x_color = "#fff";

$popup_bg_color = "#fff";

$popup_text_color = "#000";

$popup_html = <<<HTML

<div class="popup__photo">
    <img src="https://images.unsplash.com/photo-1515224526905-51c7d77c7bb8?ixlib=rb-0.3.5&s=9980646201037d28700d826b1bd096c4&auto=format&fit=crop&w=700&q=80" alt="ocean exterior">
</div>
<div class="popup__text">
    <h2 class="title-h1">Popup</h2>
    <p>Ovde ce ici tekst za popup ako je potrebno. <br /> Takodje i slika moze da se doda. </p>
</div>
<a class="popup__close" href="{$contact_page_link}">X</a>

HTML;

####################################################################
#################### DEFINE FONT START #############################
####################################################################

$googleFont = "'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Raleway:ital,wght@0,700;1,700&display=swap'";
//set p font-family: "Oswald", sans-serif;
$all_p_font = "'Oswald', sans-serif";
$all_p_font_weight = "300";
$all_p_font_size = "1.3em";
$all_p_font_size_1400 = "0em";
$all_p_font_size_1200 = "0em";
$all_p_font_size_1024 = "0.1em";
$all_p_font_size_767 = "1.1em";

//set all h1 font font-family: "Raleway", sans-serif;
$all_h1_font = "'Raleway', sans-serif";
$all_h1_transform = "uppercase";     //h1 text transform capitalize, uppercase, lowercase, none
$all_h1_font_weight = "300";
$all_h1_font_size = "3.5em";
$all_h1_font_size_1400 = "0.4em";
$all_h1_font_size_1200 = "0em";
$all_h1_font_size_1024 = "0.4em";
$all_h1_font_size_767 = "2em";


//set all h2 font font-family: "Oswald", sans-serif;
$all_h2_font = "'Oswald', sans-serif";
$h2FontFamily = $all_h2_font;
$all_h2_transform = "lowercase";     //h2 text transform capitalize, uppercase, lowercase, none
$all_h2_font_weight = "300";
$all_h2_font_size = "1.6em";
$all_h2_font_resize = "0.2em";
$all_h2_font_size_1400 = "0.2em";
$all_h2_font_size_1200 = "0em";
$all_h2_font_size_1024 = "0.2em";
$all_h2_font_size_767 = "1.2em";

//set all h3 font font-family: "Oswald", sans-serif;
$all_h3_font = "'Oswald', sans-serif";
$h2FontFamily = $all_h2_font;
$all_h3_transform = "none";     //h3 text transform capitalize, uppercase, lowercase, none
$all_h3_font_weight = "300";
$all_h3_font_size = "1.4em";
$all_h3_font_resize = "0em";
$all_h3_font_size_1400 = "0em";
$all_h3_font_size_1200 = "0em";
$all_h3_font_size_1024 = "0.2em";
$all_h3_font_size_767 = "1.1em";

//navigation font
$navTabsFont = "'Oswald', sans-serif";
// >1400
$navTabSize = "1.2em";
$navTabFontWeight = "400";
$navTextTransform ="capitalize";
// 1200 < x < 1400
$navTabSize_1400 = "0.1em";
// 1024 < x < 1200
$navTabSize_1200 = "0.1em";
// 768 < x < 1024
$navTabSize_1024 = "0.1em";
// 0 < x < 768
$navTabSize_767 = "1.1em";

//define all buttons
$all_button_font = "'Oswald', sans-serif";
$allButtonsFontSize = "1.1em";
$allButtonsFontSizeMobile = "1em";
$all_button_transform = "uppercase";     //button text transform capitalize, uppercase, lowercase, none
$buttonsPaddingDesktop = "14px 60px;";
$buttonsPaddingMobile = "10px 30px;";
$all_button_font_weight = "700";

$buttons_animation = 10;
//set bg color for 9 10 and 11 button animations
$button_animation_bg_color = "#fff";
//button 1 colors
$button_1_bg_color = "#fff";
$button_1_border_color = "#fff";
$button_1_text_color = "#000";
$button_1_border_radius = "10px 20px";

$button_1_bg_color_hover = "#eb4034";
$button_1_border_color_hover = "#fff";
$button_1_text_color_hover = "#fff";

//button 2 colors
$button_2_bg_color = "#145287";
$button_2_border_color = "#fff";
$button_2_text_color = "#fff";
$button_2_border_radius = "20px 10px";

$button_2_bg_color_hover = "#078afa";
$button_2_border_color_hover = "#fff";
$button_2_text_color_hover = "#fff";

// "under_cover",
// "form",
// #"simple_section_3",
// #"slideshow_bootstrap",
// #"slideshow_v1",
// #"simple_section_2",
// "text_image_section_2",
// "gallery_v1",
// "simple_section_1",
// "text_image_section",
// "section_column",
// "album_section",
// "map_v1",
// #"footer_v2",
// "footer_v1",
// #"gallery_v2"

$all_buttons_style = array(
    array( "section-class" => "under-cover-section", "initial-state" => 1 , "hover-state" => 1, "border-radius" => 1 ),
    array( "section-class" => "form-holder", "initial-state" => 2 , "hover-state" => 2, "border-radius" => 2 ),
    array( "section-class" => "simple-section-1", "initial-state" => 1 , "hover-state" => 2, "border-radius" => 1 ),
    array( "section-class" => "simple-section-2", "initial-state" => 1 , "hover-state" => 1, "border-radius" => 1 ),
    array( "section-class" => "simple-section-3", "initial-state" => 1 , "hover-state" => 1, "border-radius" => 1 ),
    array( "section-class" => "cover-content", "initial-state" => 2 , "hover-state" => 1, "border-radius" => 1 ),
    array( "section-class" => "text_image_section_1", "initial-state" => 1 , "hover-state" => 1, "border-radius" => 1 ),
    array( "section-class" => "text_image_section_2", "initial-state" => 1 , "hover-state" => 1, "border-radius" => 1 ),
    array( "section-class" => "section-column", "initial-state" => 2 , "hover-state" => 2, "border-radius" => 1 ),
    array( "section-class" => "about-page-content", "initial-state" => 2 , "hover-state" => 2, "border-radius" => 1 ),
    array( "section-class" => "contact-form", "initial-state" => 2 , "hover-state" => 2, "border-radius" => 1 ),
);

//define animation on text in sections

$all_section_animation_left = [
    "under-cover-section",
    #"form-holder",
    "simple-section-1",
    #"simple-section-2",
    "simple-section-3",
    #"text_image_section_1",
    "text-simple-2-item-0",
    #"section-column",
    "image-gallery-v1-section .img-wrapper",
    #"album-section",
    #"gallery-v1"
];

$all_section_animation_left = json_encode($all_section_animation_left);

$all_section_animation_right = [
    #"under-cover-section",
    "form-holder",
    #"simple-section-1",
    "simple-section-2",
    #"simple-section-3",
    #"text_image_section_1",
    "text-simple-2-item-1",
    #"image-gallery-v1-section .img-wrapper",
    #"map_v2",
    #"footer_v2",
    "faq_section"
];

$all_section_animation_right = json_encode($all_section_animation_right);

//define wave section linear-gradient(60deg, rgba(255,255,255,1) 0%, rgba(200,200,200,1) 100%);

$waveBgColor = "#11101d";
//set value in rgb();
$waveBgColorFill = "0,0,0";


####################################################################
#################### BACK TO TOP BUTTON ############################
####################################################################

$show_back_to_top_button = true;

$side_back_to_top_button = "right";

$bg_color_back_to_top_button = "#fff";

$border_color_back_to_top_button = "#000";

$font_color_back_to_top_button = "#000";

####################################################################
#################### DEFINE SOCIAL PHONE EMAIL #####################
####################################################################

//set fb link
$fbLink = "https://www.facebook.com/izdjubravanje.izdjubravanje/?locale=sr_RS";
//set instagram link
$instaLink = "";
//set twitter link
$twitterLink = "";
//set yt link
$ytLink = "https://www.youtube.com/@izdjubravanje";
//whatsapp link
$whatsappLink = false;
//viber link
$viberLink = false;
//set true if want show phone and email in navigation
$phoneEmailInNav = false;
//set phone number
$phoneNumber = $companyPhone;
//set email address
$email = $companyEmail;
//set side social icons
$sideSocialIcons = true;
//set social side from top
$socialSideFromTop = "65%";
// set left or right
$sideSocialIconsAlign = "left";

####################################################################
#################### ALL NAVIGATION STYLE ##########################
####################################################################

//define type of navigation bootstrap, custom, hamburger
$type_of_navigation = "hamburger";
//show/hide social nav in navigation
$socNavShow = true;
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
//set padding between the tabs onlz custom navigation
$tabPadding = "20px";
//set color of tabs in top position
$navTabColor = "#fff";
//set colors of tabs in scroll position
$navTabScrollColor = "#fff";
//set color of tabs in hover state in top position
$navTabHoverColor = "#fcba03";
//set color of tabs in hover state in scroll position
$navTabScrollHoverColor = "#fcba03";
//set logo name
$logoUrl = "logo.png";
//disable social icon *(enter resolution in px)
$disableSocial = "991px";
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
$hamburger_menu_type = 5;
#set tabs hover background color
$hamburger_menu_tabs_bg = "#000";
#hamburger menu side bg color
$hamburger_menu_side_bg = "#11101d";
#hamburger menu logo position center, end
$hamburger_menu_logo_position = "center";

####################################################################
#################### NAVIGATION TABS ARRAY #########################
####################################################################

$navTabs = array(
    #array("type" => "HOME", "name" => "Pocetna", "link" => "index", "target" => "_self", "class" => "navigation-tab"),
    #array("type" => "ABOUT", "name" => "O Nama", "link" => "#", "target" => "_self", "class" => "navigation-tab dropdown-tab"),
    array("type" => "ABOUT", "name" => "O nama", "link" => defineUrl("o-nama"), "target" => "_self", "class" => "navigation-tab"),
    array("type" => "HISTORY", "name" => "Istorija", "link" => defineUrl("istorija"), "target" => "_self", "class" => "navigation-tab"),
    array("type" => "MAPA", "name" => "Mapa", "link" => defineUrl("mapa"), "target" => "_self", "class" => "navigation-tab"),
    array("type" => "KONTAKT", "name" => "Kontakt", "link" => defineUrl("kontakt"), "target" => "_self", "class" => "navigation-tab"),
    array("type" => "GALERIJA", "name" => "Galerija", "link" => defineUrl("galerija"), "target" => "_self", "class" => "navigation-tab"),
    array("type" => "FAQ", "name" => "Pitanja i odgovori", "link" => defineUrl("pitanja-i-odgovori"), "target" => "_self", "class" => "navigation-tab")
);

//array for submenu navigation tab
$subTabs = array(
    #array("type" => "ABOUT", "name" => "sub1", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
    #array("type" => "ABOUT", "name" => "sub2", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
    #array("type" => "TEST", "name" => "test", "link" => "#", "target" => "_self", "class" => "dropdown-sub"),
    #array("type" => "TEST", "name" => "test2", "link" => "#", "target" => "_self", "class" => "dropdown-sub")
);

####################################################################
#################### ALL SECTIONS ARRAY ############################
####################################################################

$homepageSection = array (
    "under_cover",
    #"wave",
    "form",
    #"item_slide",
    #"images_crop",
    #"gallery_slide",
    #"gallery_swap",
    "simple_section_3",
    #"simple_section_2",
    "text_image_section_2",
    #"slideshow_bootstrap",
    #"slideshow_v1",
    "gallery_v1",
    #"gallery_v2",
    #"cool_section",
    #"simple_section_1",
    #"text_image_section",
    #"section_column",
    #"album_section",
    #"map_v1",
    "faq",
    "map_v2",
    "footer_v2",
    #"footer_v1"
);

####################################################################
#################### COVER SECTION #################################
####################################################################
//video, custom_cover, slideshow, slideshow_bootstrap, cover_html
$cover_content ="cover_html";
//video, slideshow, custom section margin-top on desktop 
$desktop_video_margin_top = "80px";
//video, slideshow, custom section margin-top on mobile
$mobile_video_margin_top = "60px";
#################################
############SLIDESHOW cover######
#################################
//slideshow autoplay
$slideshowAutoplay = true;
//slideshow delay
$slideshowDelay = "6000";
//show hide arrow
$slideshowArrow = true;
//slideshow animation *(1-12) //1,2,3,4,5,6,7,8,9,10,11
$slideshowAnimation = 7;
//slideshow mobile height *bootstrap
$slideshow_height_mobile = "60vh";
//slideshow alpha can be brightness(0.5), opacity(0.5),blur(3px), contrast(0.5),grayscale(1),  if bootstrap if not set rgba(0,0,0,0.5);*bootstrap
$slideshowAlpha = "rgba(0,0,0,0.6)";
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
$slideshowMobileArrow = true;
//custom slideshow text align
$custom_slideshow_align = "center";
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
//custom_slideshow_padding_right
$custom_slideshow_padding_right = "20px";
//custom cover section text
$custom_cover_array = array(
    array("text" => "What you dream", "class" => "text-1-tleft"),
    array("text" => "We make it", "class" => "text-1-bright"),
    array("text" => "Your satisfaction", "class" => "text-2-tright"),
    array("text" => "is our target", "class" => "text-2-bleft"),
);
#################################
############COVER HTML ##########
#################################
$customCoverBgColor = "#000";
$customCoverBgImage = "custom/gallery/gallery_7.jpg";
$customCoverBgAttachment = "fixed";
$customCoverBgFilter = "opacity(0.5)";
$customCoverBgPosition = "bottom";
$customCoverBgPositionY = "60%";
//slideshow content
$slideshow_array = array(
    array("img" => "custom/gallery/gallery_1.jpg","h2" => "Najčešća pitanja", "text"=> "<a class='btn btn-custom-style' data-id='0' href='$faq_page_link'>vidi</a>", "data-id" => "0"),
    array("img" => "custom/gallery/gallery_2.jpg","h2" => "Pogledaj naše fotografije", "text"=> "<a class='btn btn-custom-style' data-id='1' href='$gallery_page_link'>vidi</a>", "data-id" => "1"),
    array("img" => "custom/gallery/gallery_3.jpg","h2" => "Kontaktiraj nas", "text"=> "<span class='title-h3'>slideshow subtitle</span><br /><a class='btn btn-custom-style' href='$contact_page_link'>vidi</a>", "data-id" => "2"),
    #array("img" => "slide4.jpg","h2" => "&nbsp;Take only memories, leave <br /> only footprints.&nbsp;", "text"=> "Chief Seattle", "data-id" => "4"),
    #array("img" => "slide5.jpg","h2" => "&nbsp;Blessed are the curious for <br /> they shall have adventures.&nbsp;", "text"=> "Lovelle Drachman", "data-id" => "5"),
);


####################################################################
#################### under_cover SECTION ###########################
####################################################################

//under cover section bg image
$underCoverBgImage = "";
//under cover section bg color
$underCoverBgColor = "#11101d";
//under cover section text color
$underCoverTextColor = "#fff";
//under cover section h1 color
$underCoverTitleColor = "#fff";
//under cover section h2 color
$underCoverSubtitleColor = "#fff";
//svg top
$under_cover_top_svg = false;
//top svg color
$under_cover_top_svg_color = "#000";
//svg bottom
$under_cover_bottom_svg = false;
//bottom svg color
$under_cover_bottom_svg_color = "#000";
$under_cover_section_html = <<<HTML
<div class="">
    <h1 class="subtitle-h2">PREDSTAVLJAMO VAM BRAVARIJU RIS IZ OSECINE</h1>
    <h2 class="title-h3">ko smo zapravo mi?</h2>
    <div class="col-lg-6 mx-auto">
    <p class="">Dobrodošli u Bravariju "Ris" – vašeg pouzdanog partnera za izradu i montažu bravarskih proizvoda u Osečini!</p>
    <p>Sa ponosom predstavljamo našu firmu koja već godinama pruža vrhunsku uslugu u oblasti bravarije, nudeći kvalitetne proizvode i pouzdane usluge po meri vaših potreba.</p>
    
    <a href="{$about_page_link}" class="btn btn-custom-style">Under Cover</a>
    </div>
</div>
HTML;

####################################################################
#################### slideshow_v1 SECTION ##########################
####################################################################

//set slideshow height
$slideshowSectionDesktopHeight = "700px";
//set mobile version slideshow height
$slideshowSectionMobileHeight = "400px";
//svg top
$slideshow_v1_top_svg = false;
//top svg color
$slideshow_v1_top_svg_color = "#000";
//svg bottom
$slideshow_v1_bottom_svg = false;
//bottom svg color
$slideshow_v1_bottom_svg_color = "#000";

####################################################################
#################### slideshow_bootstrap SECTION ###################
####################################################################

//slideshow bootstrap autoplay
$slideshowBootstrapAutoplay = $slideshowAutoplay;
//slideshow bootstrap bg color
$bootstrapSlideshowBg = "#000";
//slideshow text align
$slideshowBootstrapTextAlign = "center";
//slideshow content horizontal align left, center
$slideshowBootstrapHorizontalAlign = "center";
//slideshow content vertical align top, center, bottom
$slideshowBootstrapVerticalAlign = "center";
//filter
$slideshowBootstrapAlpha = "brightness(0.4)";
//svg top
$slideshow_bootstrap_top_svg = false;
//top svg color
$slideshow_bootstrap_top_svg_color = "#000";
//svg bottom
$slideshow_bootstrap_bottom_svg = false;
//bottom svg color
$slideshow_bootstrap_bottom_svg_color = "#000";

####################################################################
#################### gallery_v1 section and gallery_v2 #############
####################################################################

$gallery_section_title = <<<HTML

<h2 class="title-h1 text-center">Galerija</h2>

HTML;

$gallery_section_title_color = "#fff";
$gallery_v1_bg_color = "#11101d";
$gallery_array = array(
    array("img" => "gallery_1.jpg" , "alt" => "forest"),
    array("img" => "gallery_2.jpg" , "alt" => "city"),
    array("img" => "gallery_3.jpg" , "alt" => "rain"),
    array("img" => "gallery_4.jpg" , "alt" => "car"),
    array("img" => "gallery_5.jpg" , "alt" => "bridge"),
    array("img" => "gallery_6.jpg" , "alt" => "view from top of building"),
    array("img" => "gallery_7.jpg" , "alt" => "beautiful natural"),
    array("img" => "gallery_8.jpg" , "alt" => "salad")
);
//svg top
$gallery_top_svg = false;
//top svg color
$gallery_top_svg_color = "#000";
//svg bottom
$gallery_bottom_svg = false;
//bottom svg color
$gallery_bottom_svg_color = "#000";


####################################################################
#################### images_crop SECTION ###########################
####################################################################

$images_crop_array = array(
    #array("img" => "gallery_1.jpg" , "text" => "forest"),
    array("img" => "gallery_3.jpg" , "text" => "rain"),
    array("img" => "gallery_2.jpg" , "text" => "city"),
    array("img" => "gallery_4.jpg" , "text" => "car"),
    //array("img" => "gallery_5.jpg" , "text" => "bridge"),
    //array("img" => "gallery_6.jpg" , "text" => "view from top of building"),
    // array("img" => "gallery_7.jpg" , "text" => "beautiful natural"),
    // array("img" => "gallery_8.jpg" , "text" => "salad")
);
$image_crop_height = "500px";
//if border is enable set 4rem if not 1rem
$images_crop_bottom = '1rem';

//svg top
$images_crop_top_svg = false;
//top svg color
$images_crop_top_svg_color = "#000";
//svg bottom
$images_crop_bottom_svg = false;
//bottom svg color
$images_crop_bottom_svg_color = "#000";

####################################################################
#################### gallery_slide SECTION #####################
####################################################################

$gallery_slideshow_section_html = <<<HTML

<h2 class="title-h1 text-center">Sekcija slajd galerije</h2>

HTML;

$gallery_slideshow_array = array(
    #array("img" => "gallery_1.jpg" , "text" => "forest"),
    #array("img" => "gallery_3.jpg" , "text" => "rain"),
    array("img" => "gallery_2.jpg" , "text" => "city"),
    array("img" => "gallery_4.jpg" , "text" => "car"),
    array("img" => "gallery_5.jpg" , "text" => "bridge"),
    array("img" => "gallery_6.jpg" , "text" => "view from top of building"),
    array("img" => "gallery_7.jpg" , "text" => "beautiful natural"),
    array("img" => "gallery_8.jpg" , "text" => "salad")
);

$gallery_slideshow_bg_color = "#000";
$gallery_slideshow_title_color = "#fff";
$gallery_slideshow_height = "50vh";
$gallery_slideshow_height_mobile = "250px";
//svg top
$gallery_slide_top_svg = false;
//top svg color
$gallery_slide_top_svg_color = "#000";
//svg bottom
$gallery_slide_bottom_svg = false;
//bottom svg color
$gallery_slide_bottom_svg_color = "#000";

####################################################################
#################### gallery_swap SECTION #########################
####################################################################

$gallery_swap_width ="70%";
$gallery_swap_bg_color = "#000";
$gallery_swap_title_color = "#fff";
//svg top
$gallery_swap_top_svg = false;
//top svg color
$gallery_swap_top_svg_color = "#000";
//svg bottom
$gallery_swap_bottom_svg = false;
//bottom svg color
$gallery_swap_bottom_svg_color = "#000";
$gallery_swap_section_html = <<<HTML

<h2 class="title-h1 text-center">Galerija</h2>

HTML;

$gallery_swap_array = array(
    #array("img" => "gallery_1.jpg" , "text" => "forest"),
    #array("img" => "gallery_3.jpg" , "text" => "rain"),
    array("img" => "gallery_2.jpg" , "text" => "city"),
    array("img" => "gallery_4.jpg" , "text" => "car"),
    array("img" => "gallery_5.jpg" , "text" => "bridge"),
    array("img" => "gallery_6.jpg" , "text" => "view from top of building"),
    array("img" => "gallery_7.jpg" , "text" => "beautiful natural"),
    array("img" => "gallery_8.jpg" , "text" => "salad")
);

####################################################################
#################### simple_section_1 ##############################
####################################################################
//simple section title color
$simple_section_1_title_color = "#fff";
//simple section subtitle color
$simple_section_1_subtitle_color = "#fff";
//simple section text color
$simple_section_1_text_color = "#fff";
//simple section bg color
$simple_section_1_bg_color = "#11101d";
//simple section image url
$simple_section_1_bg_url = "";
//simple section image attachment
$simple_section_1_bg_attachment = "fixed";
//simple section image size
$simple_section_1_bg_size = "cover";
//simple section image repeat
$simple_section_1_bg_repeat = "no-repeat";
//svg top
$simple_section_1_top_svg = false;
//top svg color
$simple_section_1_top_svg_color = "#000";
//svg bottom
$simple_section_1_bottom_svg = false;
//bottom svg color
$simple_section_1_bottom_svg_color = "#000";
//simple section html
$simple_section_1_html = <<<HTML

<img class="d-block mx-auto mb-4" src="custom/logo.png" alt="company logo" width="72" height="">
<h2 class="subtitle-h2">Simple section 1</h2>
<h3 class="title-h3">podnaslov sekcije Simple section 1</h3>
<div class="col-lg-8 mx-auto">
    <p class=" mb-4">Ovde ide neki takst sekcije Simple section 1</p>
    <a href="{$map_page_link}" class="btn btn-custom-style">simple section</a>
</div>

HTML;

####################################################################
#################### simple_section_2 ##############################
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
//svg top
$simple_section_2_top_svg = false;
//top svg color
$simple_section_2_top_svg_color = "#000";
//svg bottom
$simple_section_2_bottom_svg = false;
//bottom svg color
$simple_section_1_bottom_svg_color = "#000";
//simple section html
$simple_section_2_html = <<<HTML

<img class="d-block mx-auto mb-4" src="custom/logo.png" alt="company logo" width="72" height="">
<h2 class="subtitle-h2">Simple section 2</h2>
<h3 class="title-h3">Simple section 2</h3>
<div class="col-lg-8 mx-auto">
    <p class=" mb-4">Ovde ide neki takst</p>
    <a href="{$contact_page_link}" class="btn btn-custom-style">section 2</a>
</div>

HTML;

####################################################################
#################### simple_section_3 ##############################
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
//svg top
$simple_section_3_top_svg = false;
//top svg color
$simple_section_3_top_svg_color = "#000";
//svg bottom
$simple_section_3_bottom_svg = false;
//bottom svg color
$simple_section_3_bottom_svg_color = "#000";
//simple section html
$simple_section_3_html = <<<HTML

<img class="d-block mx-auto mb-4" src="custom/logo.png" alt="company logo" width="72" height="">
<h2 class="subtitle-h2">bravarija ris</h2>
<h3 class="title-h3">jos stvari o nama</h3>
<div class="col-lg-8 mx-auto">
    <p class=" mb-4">Bravarija "Ris" je prepoznatljiva po izuzetnom kvalitetu i posvećenosti detaljima u svakom projektu koji preuzimamo. Bez obzira da li vam je potrebna izrada i montaža metalnih ograda, kapija, stepeništa ili drugih bravarskih proizvoda, možete računati na nas da vaše ideje pretvorimo u stvarnost.</p>
    <p>Naš tim visoko kvalifikovanih bravara poseduje bogato iskustvo i stručnost u radu sa različitim materijalima i tehnikama. Pružamo vam pouzdanost i sigurnost u svakom koraku procesa, od početne konsultacije i dizajna, pa sve do finalne montaže.</p>
    <a href="{$map_page_link}" class="btn btn-custom-style">section 3</a>
</div>

HTML;


####################################################################
#################### text_image_section_1 ##########################
####################################################################
//simple section title color
$text_image_section_1_title_color = "#fff";
//simple section subtitle color
$text_image_section_1_subtitle_color = "#fff";
//simple section text color
$text_image_section_1_text_color = "#fff";
//simple section bg color
$text_image_section_1_bg_color = "#11101d";
//simple section image url
$text_image_section_1_bg_url = "";
//simple section image attachment
$text_image_section_1_bg_attachment = "fixed";
//simple section image size
$text_image_section_1_bg_size = "cover";
//simple section image repeat
$text_image_section_1_bg_repeat = "no-repeat";
//set width of section
$text_image_section_1_width = "100%";
//svg top
$text_image_section_1_top_svg = false;
//top svg color
$text_image_section_1_top_svg_color = "#000";
//svg bottom
$text_image_section_1_bottom_svg = false;
//bottom svg color
$text_image_section_1_bottom_svg_color = "#000";
//set in array item to be flex-direction column-reverse
$text_image_section_1_reverse = array(2);
//simple section html
$text_image_section_1_html = <<<HTML

<div class="row align-items-center">
    <div class="col-12 col-sm-6 col-lg-6 m-auto" style="background-image:url('custom/gallery/gallery_8.jpg');height:500px;background-position:center;">
    </div>
    <div class="col-12 col-sm-6 col-lg-6 p-5 text-left custom-class xs-text-center">
    <h2 class="display-5 mb-3 subtitle-h2">O nama</h2>
    <h3 class="title-h3">Podnaslov</h3>
    <p class="">Ovde ide neki takst</p>

    <a href="{$about_page_link}" class="btn btn-custom-style">text-image 1</a>

    </div>
</div>
<div class="row align-items-center">
    <div class="col-12 col-sm-6 col-lg-6 p-5 text-right custom-class xs-text-center">
    <h2 class="display-5 mb-3 subtitle-h2">Usluge</h2>
    <h3 class="title-h3">Podnaslov</h3>
    <p class="">Ovde ide neki takst</p>

        <a href="{$history_page_link}" class="btn btn-custom-style">text-image 1</a>
    </div>
    <div class="col-12 col-sm-6 col-lg-6 m-auto" style="background-image:url('custom/gallery/gallery_7.jpg');height:500px;background-position:center;">
    </div>
</div>

HTML;


####################################################################
#################### text_image_section_2 ##########################
####################################################################
//simple section title color
$text_image_section_2_title_color = "#fff";
//simple section subtitle color
$text_image_section_2_subtitle_color = "#fff";
//simple section text color
$text_image_section_2_text_color = "#fff";
//simple section bg color
$text_image_section_2_bg_color = "#11101d";
//simple section image url
$text_image_section_2_bg_url = "";
//simple section image attachment
$text_image_section_2_bg_attachment = "fixed";
//simple section image size
$text_image_section_2_bg_size = "cover";
//simple section image repeat
$text_image_section_2_bg_repeat = "no-repeat";
//set width of section
$text_image_section_2_width = "100%";
//svg top
$text_image_section_2_top_svg = false;
//top svg color
$text_image_section_2_top_svg_color = "#000";
//svg bottom
$text_image_section_2_bottom_svg = false;
//bottom svg color
$text_image_section_2_bottom_svg_color = "#000";
//set in array item to be flex-direction column-reverse
$text_image_section_2_reverse = array(2);
//simple section html
$text_image_section_2_html = <<<HTML

<div class="row align-items-center text-simple-2-item-0">
    <div class="col-12 col-sm-6 col-lg-6 m-auto" style="background-image:url('custom/gallery/gallery_8.jpg');height:500px;background-position:center;">
    </div>
    <div class="col-12 col-sm-6 col-lg-6 p-5 text-left custom-class xs-text-center">
    <h2 class="display-5 mb-3 subtitle-h2">Sa ponosom vam predstavljamo</h2>
    <h3 class="title-h3">dodatno o nama</h3>
    <p class="">Osećajte se slobodno da nas kontaktirate kako biste razgovarali o vašim projektima i idejama. Naša adresa je [Adresa], a možete nas kontaktirati i putem telefona na [Broj telefona].</p>

    <a href="{$history_page_link}" class="btn btn-custom-style">text-image 2</a>

    </div>
</div>
<div class="row align-items-center text-simple-2-item-1">
    <div class="col-12 col-sm-6 col-lg-6 p-5 text-right custom-class xs-text-center">
    <h2 class="display-5 mb-3 subtitle-h2">Kontaktirajte nas slobodno</h2>
    <h3 class="title-h3">kako je vama lakse</h3>
    <p class="">Za sve vaše bravarske potrebe u Osečini, Bravarija "Ris" je tu da vam pruži vrhunsku uslugu i zadovolji vaše zahteve sa stručnošću i pažnjom koju zaslužujete.</p>

        <a href="{$faq_page_link}" class="btn btn-custom-style">text-image 2</a>
    </div>
    <div class="col-12 col-sm-6 col-lg-6 m-auto" style="background-image:url('custom/gallery/gallery_7.jpg');height:500px;background-position:center;">
    </div>
</div>

HTML;

####################################################################
#################### section_column  ###############################
####################################################################
//section column title color
$section_column_title_color = "#fff";
//section column subtitle color
$section_column_subtitle_color = "#fff";
//section column text color
$section_column_text_color = "#fff";
//section column bg color
$section_column_bg_color = "#11101d";
//section column image url
$section_column_bg_url = "";
//section column image attachment
$section_column_bg_attachment = "fixed";
//section column image size
$section_column_bg_size = "cover";
//section column image repeat
$section_column_bg_repeat = "no-repeat";
//svg top
$section_column_top_svg = false;
//top svg color
$section_column_top_svg_color = "#000";
//svg bottom
$section_column_bottom_svg = false;
//bottom svg color
$section_column_bottom_svg_color = "#000";
//section column html
$section_column_html = <<<HTML

<h2 class="pb-2 border-bottom subtitle-h2">Sekcija sa vise itema</h2>
<div class="row g-4 row-cols-1 row-cols-lg-3">
    <div class="feature col">
    <div class="">
    <img src="custom/gallery/gallery_1.jpg" class="d-block mx-lg-auto img-fluid mt-4 mb-4" alt="Forest" width="700" height="500" loading="lazy">
    </div>
    <h3 class="title-h3">Naslov</h3>
    <p>Ovde ide neki tekst</p>
    <a href="{$about_page_link}" class="btn btn-custom-style">item 1</a>
    </div>
    <div class="feature col">
    <div class="">
        <img src="custom/gallery/gallery_2.jpg" class="d-block mx-lg-auto img-fluid mt-4 mb-4" alt="City" width="700" height="500" loading="lazy">
    </div>
    <h3 class="title-h3">Naslov</h3>
    <p>Ovde ide neki tekst</p>
    <a href="{$faq_page_link}" class="btn btn-custom-style">item 2</a>
    </div>
    <div class="feature col">
    <div class="">
    <img src="custom/gallery/gallery_3.jpg" class="d-block mx-lg-auto img-fluid mt-4 mb-4" alt="rain" width="700" height="500" loading="lazy">
    </div>
    <h3 class="title-h3">Naslov</h3>
    <p>Ovde ide neki tekst</p>
    <a href="{$gallery_page_link}" class="btn btn-custom-style">item 3</a>
    </div>
</div>

HTML;

####################################################################
#################### album_section  ################################
####################################################################

//section album title color
$section_album_title_color = "#fff";
//section album text color
$section_album_text_color = "#000";
//section album bg color
$section_album_bg_color = "#11101d";
//section album image url
$section_album_bg_url = "";
//card bg color
$section_card_bg_color = "transparent";
//card text color
$section_card_text_color = "#fff";
//section album image attachment
$section_album_bg_attachment = "fixed";
//section album image size
$section_album_bg_size = "cover";
//section album image repeat
$section_album_bg_repeat = "no-repeat";
//svg top
$section_album_top_svg = false;
//top svg color
$section_album_top_svg_color = "#000";
//svg bottom
$section_album_bottom_svg = false;
//bottom svg color
$section_album_bottom_svg_color = "#000";
//set text or title for album section
$album_section_title = <<<HTML

<h2 class="subtitle-h2">Selcija sa albumima</h2>

HTML;

$album_section_items = array(
    array("text" => "Ovde ide neki tekst za album sekciju", "src" => "gallery/gallery_7.jpg", "alt"=> "Bootstrap Themes"),
    array("text" => "Ovde ide neki tekst za album sekciju", "src" => "gallery/gallery_7.jpg", "alt"=> "Bootstrap Themes"),
    array("text" => "Ovde ide neki tekst za album sekciju", "src" => "gallery/gallery_7.jpg", "alt"=> "Bootstrap Themes"),
    #array("text" => "Ovde ide neki tekst za album sekciju", "src" => "gallery/gallery_7.jpg", "alt"=> "Bootstrap Themes"),
    #array("text" => "Ovde ide neki tekst za album sekciju", "src" => "gallery/gallery_7.jpg", "alt"=> "Bootstrap Themes"),
    #array("text" => "Ovde ide neki tekst za album sekciju", "src" => "gallery/gallery_7.jpg", "alt"=> "Bootstrap Themes"),
    #array("text" => "Ovde ide neki tekst za album sekciju", "src" => "gallery/gallery_7.jpg", "alt"=> "Bootstrap Themes"),
    #array("text" => "Ovde ide neki tekst za album sekciju", "src" => "gallery/gallery_7.jpg", "alt"=> "Bootstrap Themes"),
);

####################################################################
#################### form section v1  ##############################
####################################################################

$formTitle = "Kontakt forma";
$formText = "Molimo vas popunite polja ispod!";
//center right left
$formTextAlign = "center";
$formWidth = "400px";
$formBgColor = "#000";
$formTextColor = "#fff";
$formInputColorText = "#11101d";
$formBgImage = "";
//svg top
$form_top_svg = false;
//top svg color
$form_top_svg_color = "#11101d";
//svg bottom
$form_bottom_svg = false;
//bottom svg color
$form_bottom_svg_color = "#11101d";

####################################################################
#################### footer_v1 section  ############################
####################################################################

$footer_v1_html = <<<HTML

<p class="mb-3 mb-md-0 ">© 2024 {$shortCompanyName}</p>

HTML;

//set footer background color
$footer_v1_bg_color = "#11101d";
//set footer text color
$footer_v1_text_color = "#fff";
//social icon hover color
$footer_v1_social_hover_color = "#000";
//social icon hover bg color
$footer_v1_social__bg_hover_color = "#fcfc";
//svg top
$footer_top_svg = false;
//top svg color
$footer_top_svg_color = "#000";
//svg bottom
$footer_bottom_svg = false;
//bottom svg color
$footer_bottom_svg_color = "#000";

####################################################################
#################### footer_v2 section  ############################
####################################################################

$footer_v2_html = <<<HTML

<p class="text-center">© 2024 {$shortCompanyName}</p>

HTML;

####################################################################
#################### map section v1  ###############################
####################################################################
//set map style m - default k - satelit h
$map_style = "m";
// set map zoom 8 9 10 12 13 15 18 20 ...
$map_zoom_level = 18;
$address_map = "bravarija ris osecina";
$latituda = '44.379265097376106';
$longituda = '19.60514016282363';
$dark_map = false;
$map_v1_height = "550px";

####################################################################
#################### map section v2  ###############################
####################################################################
//set map style light , color, dark
$map_v2_style = "dark";
// set map zoom 8 9 10 12 13 15 18 20 ...
$map_v2_zoom_level = 19;
$address_map_v2 = "Bravarija RIS Osecina";
$coordinates = '44.37926393246601, 19.60505969658644';
$map_v2_height = "550px";
$map_v2_link = "https://maps.app.goo.gl/DAYSkea73XEjE2GJA";

####################################################################
#################### faq section  ##################################
####################################################################

$faq_bg_color = "#11101d";
$faq_bg_image = "";
$faq_title_color="#acdfac";
$faq_text_color = "#fff";
$faq_question_hover_color = "#acdfac";
$faq_title="Frekfentna pitanja";

$faq_array = array(
    array("question" => "Ko ste vi i sta radite?", "answer" => "Mi smo IT firma i pravimo sajtove."),
    array("question" => "Kakve sajtove pravite?", "answer" => "Imamo svoj templejt i pravimo sajtove pomocu njega."),
    array("question" => "Za koje oblasti pravite sajtove?", "answer" => "Za sve oblasti.", "alt"=> "Bootstrap Themes"),
);

//svg top
$faq_top_svg = false;
//top svg color
$faq_top_svg_color = "#000";
//svg bottom
$faq_bottom_svg = false;
//bottom svg color
$faq_bottom_svg_color = "#000";

####################################################################
#################### item_slide section  ###########################
####################################################################

$item_slide_section_bg_color = "#fff";
$item_slide_section_title_color = "#000";
$item_slide_section_subtitle_color = "#3e4543";
$item_slide_section_text_color = "#fff";
$item_slide_section_bg_image = "";

$item_slide_array = array(
    #array("img" => "gallery_1.jpg" , "text" => "forest"),
    #array("img" => "gallery_3.jpg" , "text" => "rain"),
    array("img" => "custom/gallery/gallery_2.jpg" , "text" => "city" , "title" => "title"),
    array("img" => "custom/gallery/gallery_4.jpg" , "text" => "car" , "title" => "title"),
    array("img" => "custom/gallery/gallery_5.jpg" , "text" => "bridge" , "title" => "title"),
    array("img" => "custom/gallery/gallery_6.jpg" , "text" => "view from top of building" , "title" => "title"),
    array("img" => "custom/gallery/gallery_7.jpg" , "text" => "beautiful natural" , "title" => "title"),
    array("img" => "custom/gallery/gallery_8.jpg" , "text" => "salad" , "title" => "title")
);

//svg top
$item_slide_top_svg = false;
//top svg color
$item_slide_top_svg_color = "#000";
//svg bottom
$item_slide_bottom_svg = false;
//bottom svg color
$item_slide_bottom_svg_color = "#000";


####################################################################
#################### cool_section  #################################
####################################################################
$cool_section_bg_color = "#000";
$cool_section_text_color = "#fff";
$cool_section_height = "65vh";

$cool_array = array(
    array("img" => "custom/gallery/gallery_2.jpg" , "text" => "city"),
    array("img" => "custom/gallery/gallery_4.jpg" , "text" => "car"),
    array("img" => "custom/gallery/gallery_5.jpg" , "text" => "bridge"),
    array("img" => "custom/gallery/gallery_6.jpg" , "text" => "view from top of building"),
    array("img" => "custom/gallery/gallery_7.jpg" , "text" => "beautiful natural"),
    #array("img" => "custom/gallery/gallery_8.jpg" , "text" => "salad")
);

//svg top
$cool_top_svg = false;
//top svg color
$cool_top_svg_color = "#000";
//svg bottom
$cool_bottom_svg = false;
//bottom svg color
$cool_bottom_svg_color = "#000";

####################################################################
############################# pages  ###############################
####################################################################

#######################################
############## contact  ###############
#######################################

$contact_page_bg_color = "#000";
$contact_page_bg_filter = "opacity(0.2)";
$contact_page_bg_image = "custom/gallery/gallery_8.jpg";
$contact_page_text_color = "#fff";
$contact_page_subtitle_color = "#1da9c0";
$contact_page_form_bg_color = "#fff";
$contact_page_form_text_color = "#333";

//set map_v1 or map_v2 if want map
$contact_page_show_map = "map_v1";
$contact_page_h1 = "Kontakt";
$contact_page_text = "Ovo je kontakt forma ako zelite nesto da nas pitate molimo vas da popunite polja koja se nalaze ispod";

#######################################
############## faq page  ##############
#######################################

$faq_page_bg_color = "#000";
$faq_page_bg_filter = "opacity(0.2)";
$faq_page_bg_image = "custom/gallery/gallery_8.jpg";
$faq_page_text_color = "#fff";

#######################################
############## gallery  ###############
#######################################x

$gallery_page_array = array(
    array("img" => "gallery_1.jpg" , "alt" => "forest"),
    array("img" => "gallery_2.jpg" , "alt" => "city"),
    array("img" => "gallery_3.jpg" , "alt" => "rain"),
    array("img" => "gallery_4.jpg" , "alt" => "car"),
    array("img" => "gallery_5.jpg" , "alt" => "bridge"),
    array("img" => "gallery_6.jpg" , "alt" => "view from top of building"),
    array("img" => "gallery_7.jpg" , "alt" => "beautiful natural"),
    array("img" => "gallery_8.jpg" , "alt" => "salad")
);

#######################################
#####gallery from component page ######
#######################################

$gallery_page_array = $gallery_page_array;
//insert gallery component
$gallery_component_page = "gallery_swap";//gallery_v1  gallery_v2 gallery_slide gallery_swap

$gallery_page_bg_color = "#fff";
$gallery_page_text_color = "#000";


#######################################
############## history  ###############
#######################################

$history_bg_color = "#000";

$history_text_color = "#fff";

$history_line_color = "#fff";

$history_box_bg_color = "#fff";

$history_box_color = "#000";
//blur(5px) grayscale(50%)
$history_bg_filter = "opacity(0.2)";

$history_page_intro_bg_color = "transparent";

$history_bg_image = "custom/gallery/gallery_7.jpg";

$history_array = array(
    array("year"=> "2001", "text" => "At vero eos et accusamus et iusto odio dign"),
    array("year"=> "2001", "text" => "At vero eos et accusamus et iusto odio dign"),
    array("year"=> "2001", "text" => "At vero eos et accusamus et iusto odio dign"),
    array("year"=> "2001", "text" => "At vero eos et accusamus et iusto odio dign"),
    array("year"=> "2001", "text" => "At vero eos et accusamus et iusto odio dign"),
    array("year"=> "2001", "text" => "At vero eos et accusamus et iusto odio dign")
);


#######################################
############## aboutus  ###############
#######################################

$about_us_page_bg_color = "#000";

$about_us_page_bg_image = "custom/gallery/gallery_7.jpg";

$about_us_page_bg_filter = "opacity(0.4)";

$about_us_page_title_color = "#fff";

$about_us_page_items_bg_color = "#fff";

$about_page_map_show = true;

$about_page_map = "map_v1";

$about_page_gallery_show = true;

//set in array item to be flex-direction column-reverse
$about_page_reverse = array(3);

$about_us_page_content = <<<HTML
<div class="col-lg-8 mx-auto text-center all-section-style">
    <h2 class="subtitle-h2">Simple section 3</h2>
    <h3 class="title-h3">Simple section 3</h3>
    <p class=" mb-4">Ovde ide neki takst</p>
    <a href="{$about_page_link}" class="btn btn-custom-style">section 3</a>
</div>

<div class="row align-items-center">
    <div class="col-12 col-sm-6 col-lg-6 m-auto" style="background-image:url('custom/gallery/gallery_8.jpg');height:500px;background-position:center;">
    </div>
    <div class="col-12 col-sm-6 col-lg-6 p-5 text-center custom-class xs-text-center">
        <h2 class="display-5 mb-3 subtitle-h2">O nama</h2>
        <h3 class="title-h3">Podnaslov</h3>
        <p class="">Ovde ide neki takst</p>
        <a href="{$history_page_link}" class="btn btn-custom-style">text-image 2</a>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-12 col-sm-6 col-lg-6 p-5 text-center custom-class xs-text-center">
        <h2 class="display-5 mb-3 subtitle-h2">Usluge</h2>
        <h3 class="title-h3">Podnaslov</h3>
        <p class="">Ovde ide neki takst</p>
        <a href="{$contact_page_link}" class="btn btn-custom-style">text-image 2</a>
    </div>
    <div class="col-12 col-sm-6 col-lg-6 m-auto" style="background-image:url('custom/gallery/gallery_7.jpg');height:500px;background-position:center;">
    </div>
</div>

HTML;

#######################################
############## custom page  ###########
#######################################

$custom_page_bg_color = "#000";

$custom_page_bg_image = "custom/gallery/gallery_6.jpg";

$custom_page_bg_filter = "opacity(0.4)";

$custom_page_text_color = "#fff";

$custom_page_bg_attachment = "fixed";

$customPageHtml = <<<HTML

<h1 class="title-h1 text-center">Kastom</h1>

HTML;



####################################################################
#################### php function   ################################
####################################################################

function setVariable($variable, $element, $class = null) {
    if ( !empty($variable) ) {
        return '<'.$element.' class="'.$class.'">'.$variable.'</'.$element.'>';
    }
    return null;
}

function checkVariable($variable) {
    if ( !empty($variable) ) {
        return $variable;
    }
    return "";
}

?>