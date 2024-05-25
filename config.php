<?php





####################################################################

#################### DEFINE COMPANY NAME ###########################

####################################################################



$companyName = "Šljiva sa Vlašića - Kvalitet sa sela";



$shortCompanyName = "Šljiva sa Vlašića";



$companyAddress = "Gornje Crniljevo BB, <br /> 14253";



$companyPhone = "+381695151702";



$companyEmail = "sljivasavlasica@gmail.com";



//leave empty if website no hosted

$domain_name = "https://www.sljivasavlasica.rs/";



$defineTitle = "Šljiva Sa Vlašića - Kvalitet Sa Sela";





//define social share image



$socialShareImage = "custom/gallery/gallery_1.jpg";



//index page meta description, keywords, 



$indexMetaDescription = "Šljiva sa Vlašića je porodična firma sa tradicijom dugom preko 40 godina, smeštena u srcu zapadne Srbije blizu Osečine.";

$indexMetaKeywords = "sljiva, suva sljiva, šljiva sa Vlašića, porodična firma, tradicija, šljive, stenlej, suve šljive, rakija, zapadna Srbija, Kolubarski okrug, Gornje Crniljevo, Sajam sljiva, kvalitet, kvalitetna rakija, kvalitetna sljiva u osecini, Osecina";



//about page meta description, keywords, 



$aboutMetaDescription = "Šljiva sa Vlašića je porodična firma sa više od 40 godina tradicije u proizvodnji vrhunskih šljiva i rakija. Naša misija je da prenesemo bogatstvo ukusa i mirisa šljive sa obronaka planine Vlašić direktno na vaše stolove, koristeći tradicionalne metode i recepture.";

$aboutMetaKeywords = "sljiva, suva sljiva, Šljiva sa Vlašića, tradicija, porodična firma, šljive, rakije, Vlašić, tradicionalne metode uzgoja sljive, kvalitetna rakija, Kolubarski okrug, Gornje Crniljevo, zapadna Srbija, suve šljive, sveže šljive, stenlej, najkvalitetnija sljiva u srbiji, sljiva u osecini, sajam sljiva";



//history page meta description, keywords, 



$historyMetaDescription = "";

$historyMetaKeywords = "";



//map page meta description, keywords, 



$mapMetaDescription = "Otkrijte nas na mapi, saznajte gde se nalazi Šljiva sa Vlašića proizvodnja najbolje suve šljive.";

$mapMetaKeywords = "suva šljiva, najbolja šljiva, kvalitetna rakija";



//contact page meta description, keywords, 



$contactMetaDescription = "Kontaktirajte nas putem forme, pozivom, slanjem poruke ako vam trebaju neke informacije ili neki od naših proizvoda.";

$contactMetaKeywords = "Gornje Crniljevo, Sljiva, Najbolja suva sljiva";



//gallery page meta description, keywords, 



$galleryMetaDescription = "Pogledajte naše slike šljiva i način na koji obrađujemo naš proizvod.";

$galleryMetaKeywords = "otresena sljiva, prebiranje suve sljive , sljiva na lesi, rodne grane, suva sljiva";



//faq page meta description, keywords, 



$faqMetaDescription = "Pogledajte najčesča pitanja koje dobijamo i naše odgovore.";

$faqMetaKeywords = "porodična firma, Šljiva,  Gornje Crniljevo, zapadna Srbija, Kolubarski okrug, Vlašić, proizvodnja rakije, sveža šljiva, stenlej,suva šljiva ";



//custom page meta description, keywords, 



$customMetaDescription = "Pogledajte kastom stranu.";

$customMetaKeywords = "kastom strana";



####################################################################

#################### DEFINE URL ####################################

####################################################################







function defineUrl($urlPath) {

    return $urlPath;

}



$about_link = defineUrl("o-nama");

$gallery_link = defineUrl("galerija");





$javaScripts = [];







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

<a class="popup__close" href="#">X</a>



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

$all_h2_transform = "capitalize";     //h2 text transform capitalize, uppercase, lowercase, none

$all_h2_font_weight = "300";

$all_h2_font_size = "2.2em";

$all_h2_font_resize = "0em";

$all_h2_font_size_1400 = "0em";

$all_h2_font_size_1200 = "0em";

$all_h2_font_size_1024 = "0.2em";

$all_h2_font_size_767 = "1.7em";



//set all h3 font font-family: "Oswald", sans-serif;

$all_h3_font = "'Oswald', sans-serif";

$h2FontFamily = $all_h2_font;

$all_h3_transform = "none";     //h3 text transform capitalize, uppercase, lowercase, none

$all_h3_font_weight = "300";

$all_h3_font_size = "1.9em";

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



$buttons_animation = 5;

//set bg color for 9 10 and 11 button animations

$button_animation_bg_color = "#fff";

//button 1 colors

$button_1_bg_color = "#374151";

$button_1_border_color = "#374151";

$button_1_text_color = "#dedede";

$button_1_border_radius = "0";



$button_1_bg_color_hover = "transparent";

$button_1_border_color_hover = "#374151";

$button_1_text_color_hover = "#374151";



//button 2 colors

$button_2_bg_color = "#dedede";

$button_2_border_color = "#dedede";

$button_2_text_color = "#374151";

$button_2_border_radius = "0";



$button_2_bg_color_hover = "transparent";

$button_2_border_color_hover = "#dedede";

$button_2_text_color_hover = "#dedede";



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

    array( "section-class" => "under-cover-section", "initial-state" => 2 , "hover-state" => 2, "border-radius" => 1 ),

    array( "section-class" => "form-holder", "initial-state" => 2 , "hover-state" => 2, "border-radius" => 2 ),

    array( "section-class" => "simple-section-1", "initial-state" => 1 , "hover-state" => 2, "border-radius" => 1 ),

    array( "section-class" => "simple-section-2", "initial-state" => 1 , "hover-state" => 1, "border-radius" => 1 ),

    array( "section-class" => "simple-section-3", "initial-state" => 1 , "hover-state" => 1, "border-radius" => 1 ),

    array( "section-class" => "cover-content", "initial-state" => 2 , "hover-state" => 1, "border-radius" => 1 ),

    array( "section-class" => "text_image_section", "initial-state" => 1 , "hover-state" => 1, "border-radius" => 1 ),

    array( "section-class" => "text_image_section_2", "initial-state" => 2 , "hover-state" => 2, "border-radius" => 2 ),

    array( "section-class" => "section-column", "initial-state" => 2 , "hover-state" => 2, "border-radius" => 1 ),

    array( "section-class" => "about-page-content", "initial-state" => 2 , "hover-state" => 2, "border-radius" => 1 ),

    array( "section-class" => "contact-form", "initial-state" => 1 , "hover-state" => 1, "border-radius" => 1 ),

);



//define animation on text in sections



$all_section_animation_left = [

     "under-cover-section",

     "form-holder",

     "simple-section-1",

     #"simple-section-2",

     #"simple-section-3",

     #"text_image_section_1",

     "text-simple-2-item-0",

     "image-gallery-v1-section .img-wrapper",

     "column-section-animation .left-column",

     #"map_v2",

     #"footer_v2",

     #"faq"

];



$all_section_animation_left = json_encode($all_section_animation_left);



$all_section_animation_right = [

    #"under-cover-section",

    #"form-holder",

    "column-section-animation .right-column",

    #"simple-section-1",

    "simple-section-2",

    "simple-section-3",

    "text-simple-1-item-0",

    "text-simple-2-item-1",

    #"image-gallery-v1-section .img-wrapper",

    #"map_v2",

    #"footer_v2",

    "faq_section"

];



$all_section_animation_right = json_encode($all_section_animation_right);



//define wave section linear-gradient(60deg, rgba(255,255,255,1) 0%, rgba(55, 65, 81,1) 100%);



$waveBgColor = "#374151";

//set value in rgb();

$waveBgColorFill = "222, 222, 222";





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

$fbLink = "https://www.facebook.com/profile.php?id=61558884703777";

//set instagram link

$instaLink = "";

//set twitter link

$twitterLink = "";

//set yt link

$ytLink = "https://www.youtube.com/@SljivasaVlasicaKvalitetsasela";

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

$socialSideFromTop = "50%";

// set left or right

$sideSocialIconsAlign = "left";



####################################################################

#################### ALL NAVIGATION STYLE ##########################

####################################################################



//define type of navigation bootstrap, custom, hamburger

$type_of_navigation = "bootstrap";

//show/hide social nav in navigation

$socNavShow = false;

//define logo width

$widthLogo = "250px";

//logo resize value set in px

$logoScrollResize = "25px";

//navigation container padding

$navigation_container_padding = "3px 3px";

//set nav bg color in top position

$nabBgColor = "#dedede";

//set nav bg color in scroll position

$navBgColorScroll = "#dedede";

//set padding between the tabs onlz custom navigation

$tabPadding = "20px";

//set color of tabs in top position

$navTabColor = "#374151";

//set colors of tabs in scroll position

$navTabScrollColor = "#374151";

//set color of tabs in hover state in top position

$navTabHoverColor = "#000";

//set color of tabs in hover state in scroll position

$navTabScrollHoverColor = "#000";

//set logo name

$logoUrl = "logo.png";

//disable social icon *(enter resolution in px)

$disableSocial = "991px";

//define mobile logo width

$mobileWidthLogo = "180px";

//logo mobile scroll resize

$logoMobileScrollResize = "20px";

//hamburger menu color

$hamburgerColor = "#374151";

//hamburger scroll menu color

$hamburgerScrollColor = "#374151";

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

//$mobileWidthLogo = "150px";

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

    #array("type" => "HISTORY", "name" => "Istorija", "link" => defineUrl("istorija"), "target" => "_self", "class" => "navigation-tab"),

    array("type" => "MAPA", "name" => "Mapa", "link" => defineUrl("mapa"), "target" => "_self", "class" => "navigation-tab"),

    array("type" => "KONTAKT", "name" => "Kontakt", "link" => defineUrl("kontakt"), "target" => "_self", "class" => "navigation-tab"),

    array("type" => "GALERIJA", "name" => "Galerija", "link" => defineUrl("galerija"), "target" => "_self", "class" => "navigation-tab"),

    #array("type" => "FAQ", "name" => "Pitanja i odgovori", "link" => defineUrl("pitanja-i-odgovori"), "target" => "_self", "class" => "navigation-tab")

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

    #"item_slide",

    #"images_crop",

    #"gallery_slide",

    #"gallery_swap",

    "cool_section",

    "simple_section_1",

    "wave",

    "simple_section_3",

    #"simple_section_2",

    "text_image_section_2",

    #"slideshow_bootstrap",

    #"slideshow_v1",

    "section_column",

    "text_image_section",

    "gallery_v1",

    #"gallery_v2",

    #"simple_section_1",

    #"text_image_section",

    #"album_section",

    "faq",

    "form",

    #"map_v2",

    "simple_section_2",

    "map_v1",

    "footer_v2",

    #"footer_v1"

);



####################################################################

#################### COVER SECTION #################################

####################################################################

//video, custom_cover, slideshow, slideshow_bootstrap, cover_html

$cover_content ="video";

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

$video_url = "custom/cover_video.mp4";

//video poster

$video_poster = "custom/thumbnail_new.jpg";

//if video have a sound

$video_sound = false;

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

$customCoverBgImage = "custom/gallery/gallery_3.jpg";

$customCoverBgAttachment = "fixed";

$customCoverBgFilter = "opacity(0.4)";

$customCoverBgPosition = "bottom";

$customCoverBgPositionY = "60%";

//slideshow content

$slideshow_array = array(

    array("img" => "custom/gallery/gallery_1.jpg","h2" => "Slideshow 1", "text"=> "<a class='btn btn-custom-style' data-id='0' href='#'>slide 1</a>", "data-id" => "0"),

    array("img" => "custom/gallery/gallery_2.jpg","h2" => "Slideshow 2", "text"=> "<a class='btn btn-custom-style' data-id='1' href='#'>slide 2</a>", "data-id" => "1"),

    array("img" => "custom/gallery/gallery_3.jpg","h2" => "Slideshow 3", "text"=> "<span class='title-h3'>slideshow subtitle</span><br /><a class='btn btn-custom-style' href='#'>slide 2</a>", "data-id" => "2"),

    #array("img" => "slide4.jpg","h2" => "&nbsp;Take only memories, leave <br /> only footprints.&nbsp;", "text"=> "Chief Seattle", "data-id" => "4"),

    #array("img" => "slide5.jpg","h2" => "&nbsp;Blessed are the curious for <br /> they shall have adventures.&nbsp;", "text"=> "Lovelle Drachman", "data-id" => "5"),

);





####################################################################

#################### under_cover SECTION ###########################

####################################################################



//under cover section bg image

$underCoverBgImage = "";

//under cover section bg color

$underCoverBgColor = "#374151";

//under cover section text color

$underCoverTextColor = "#dedede";

//under cover section h1 color

$underCoverTitleColor = "#dedede";

//under cover section h2 color

$underCoverSubtitleColor = "#dedede";

//svg top

$under_cover_top_svg = false;

//top svg color

$under_cover_top_svg_color = "#000";

//svg bottom

$under_cover_bottom_svg = true;

//bottom svg color

$under_cover_bottom_svg_color = "#374151";

$under_cover_section_html = <<<HTML

<div class="">

    <h1 class="subtitle-h2">ŠLJIVA SA VLAŠIĆA</h1>

    <h2 class="title-h3">kvalitet sa sela</h2>

    <div class="col-lg-6 mx-auto">

    <p class="">Proizvod koji već decenijama neguje naša porodica u selu Gornje Crniljevo nadomak Osečine.</p>

    <p>Sa ponosom vam predstavljamo Šljivu sa Vlašića.</p>

    <a href="{$about_link}#" class="btn btn-custom-style">više <span class="no-view-text">o našem proizvodu</span></a>

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



$gallery_section_title_color = "#374151";

$gallery_v1_bg_color = "#dedede";

$gallery_array = array(

    array("img" => "gallery_1.jpg" , "alt" => "gusta sadnja"),

    array("img" => "gallery_2.jpg" , "alt" => "otrešena šljiva"),

    array("img" => "gallery_3.jpg" , "alt" => "šljiva u cvatu"),

    array("img" => "gallery_4.jpg" , "alt" => "ređanje šljive"),

    array("img" => "suva_sljiva1.jpg" , "alt" => "bridge"),

    array("img" => "suva_sljiva2.jpg" , "alt" => "view from top of building"),

    array("img" => "suva_sljiva3.jpg" , "alt" => "beautiful natural"),

    array("img" => "prolece1.jpg" , "alt" => "salad")

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

    array("img" => "gallery_3.jpg" , "text" => "Šljiva u cvatu"),

    array("img" => "gallery_2.jpg" , "text" => "Početak kupljenja"),

    array("img" => "gallery_4.jpg" , "text" => "Priprema za sušenje"),

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

$simple_section_1_title_color = "#dedede";

//simple section subtitle color

$simple_section_1_subtitle_color = "#dedede";

//simple section text color

$simple_section_1_text_color = "#dedede";

//simple section bg color

$simple_section_1_bg_color = "#374151";

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

<div class="col-lg-8 mx-auto">

    

<p>Bavimo se proizvodnjom šljive stenlej, sušenjem iste i pečenjem rakije. Takođe sve te naše proizvode nudimo kao finalne i prodajemo ih po preporuci naših kupaca.</p>

    <p>Naš sajt ima za cilj upoznavanje ljudi sa značenjem šljive kao prirodni lek, odnosno upoznavanje ljudi sa svim benefitima sveže i suve šljive koliko dobrih stvari moze doneti samo par plodova ove biljke.</p>

    <p>Takođe želimo da i drugi saznaju za nas i naš proizvod.</p>

    <p>Iako je šljiva jedna od voćki koja se najviše gaji u našoj zemlji, mnogima se dešava da je zaborave u svojoj ishrani, posebno usled povećanja izbora voća koje se uvozi sa raznih meridijana.

    Naravno, ni u kom slučaju ne želimo da kažemo kako drugo voće nije dobro – naprotiv, da bi organizam bio zdrav, u ishranu moramo uključiti što raznovrsnije namirnice, pre svega voće i povrće – ali želimo da podsetimo i na to koliko šljiva, sama po sebi, može biti korisna i lekovita namirnica.</p>

</div>



HTML;



####################################################################

#################### simple_section_2 ##############################

####################################################################

//simple section title color

$simple_section_2_title_color = "#374151";

//simple section subtitle color

$simple_section_2_subtitle_color = "#374151";

//simple section text color

$simple_section_2_text_color = "#374151";

//simple section bg color

$simple_section_2_bg_color = "#dedede";

//simple section image url

$simple_section_2_bg_url = "";

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



<img class="d-block mx-auto mb-4" src="custom/logo.png" alt="sljiva sa vlasica logo" width="200px" height="">

<h2 class="subtitle-h2">Cilj</h2>

<div class="col-lg-8 mx-auto">

    <p class=" mb-4">Šljiva za nas nije posao, to je nasleđe koje generacijski prenošeno kroz četiri decenije. Nikada sa našim proizvodom nismo išli na šire tržište, to želimo da promenimo. Unapredili smo sušaru pre samo 5 godina smo sušili jednu tonu a sad pet tona odjednom. Planiramo da povećamo zasade i da se proširimo na nivou države u odnosu na trenutno lokalno poslovanje. Takođe želimo da počnemo dublju preradu odnosno da izbijamo košpu i da pravimo druge prehrambene proizvode.<br />

    Naši zasadi su pretežno sorte stenlej, ali imamo i nešto madžarke. Imamo sadnice takozvane ranovače šljive koje više da skoro i nema, ona je idealna za rakiju i dzem.<br />Locirani smo u selu Gornje Crniljevo koje je rodno mesto našeg heroja Milenka Pavlovića. Takođe kod nas se nalazi i izvor prirodne kisele vode. Kontaktirajte nas i sami se uverite u kvalitet sa sela. Spremni smo za svaki vid saradnje vezane za usluge koje nudimo. Možete nas kontaktirati putem forme, putem facebook stranice ili nas jednostavno pozovite na broj koji je na sajtu odnosno pošaljite poruku.</p>

</div>



HTML;



####################################################################

#################### simple_section_3 ##############################

####################################################################

//simple section title color

$simple_section_3_title_color = "#374151";

//simple section subtitle color

$simple_section_3_subtitle_color = "#374151";

//simple section text color

$simple_section_3_text_color = "#374151";

//simple section bg color

$simple_section_3_bg_color = "#dedede";

//simple section image url

$simple_section_3_bg_url = "";

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



<h2 class="subtitle-h2">Ko smo mi?</h2>

<h3 class="title-h3">Generacijsko nasleđe</h3>

<div class="col-lg-8 mx-auto">

    <p class=" mb-4">Mi smo porodična firma sa tradicijom dugom preko 40 godina, smeštena u srcu zapadne Srbije, tačnije u prelepom selu Gornje Crniljevo, u Kolubarskom okrugu nadomak Osečine, koja je poznata po manifestaciji "Sajam Šljiva" koji se organizuje svake godine krajem avgusta. Od samih početaka, naša strast i predanost su usmerene ka proizvodnji najkvalitetnije šljive sorte stenlej, kao i proizvodnji vrhunske rakije.</p>

</div>



HTML;





####################################################################

#################### text_image_section_1 ##########################

####################################################################

//simple section title color

$text_image_section_1_title_color = "#dedede";

//simple section subtitle color

$text_image_section_1_subtitle_color = "#dedede";

//simple section text color

$text_image_section_1_text_color = "#dedede";

//simple section bg color

$text_image_section_1_bg_color = "#374151";

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

$text_image_section_1_bottom_svg = true;

//bottom svg color

$text_image_section_1_bottom_svg_color = "#dedede";

//set in array item to be flex-direction column-reverse

$text_image_section_1_reverse = array(2);

//simple section html

$text_image_section_1_html = <<<HTML



<div class="row align-items-center pb-5">

    <div class="col-12 col-sm-6 col-lg-6 m-auto" style="background-image:url('custom/gallery/gallery_8.jpg');height:500px;background-position:center;">

    </div>

    <div class="col-12 col-sm-6 col-lg-6 p-5 text-left custom-class xs-text-center text-simple-1-item-0">

    <h2 class="display-5 mb-3 subtitle-h2">O našem poslu</h2>

    

    <p>Imamo preko 2000 zasada šljive stenlej, svu količinu šljive sušimo na našoj sušari koja je kapaciteta 5 tona. </p>

    <p>Odnos presne i suve šljive je 1:4 što znači da je za kilogram suve šljive potrebno 4kg presne. Takođe to je proces koji prolazi kroz nekoliko faza da bi šljiva na kraju završila u skladištu i čekala kupca. </p>

    <p>Do sada se nismo bavili daljom obradom od sušenja, kao što je izbijanje košpe, čokoladiranje, pravljenje drugih jestivih prozvoda.</p>

    <p>Šljiva pripada porodici ruža i u našim krajevima ona je najlepša.</p>

    <p>Takođe svake godine pečemo rakiju od šljive koja nije dovoljno čvrsta da se nadje u sušari.</p>



    </div>

</div>



HTML;





####################################################################

#################### text_image_section_2 ##########################

####################################################################

//simple section title color

$text_image_section_2_title_color = "#dedede";

//simple section subtitle color

$text_image_section_2_subtitle_color = "#dedede";

//simple section text color

$text_image_section_2_text_color = "#dedede";

//simple section bg color

$text_image_section_2_bg_color = "#374151";

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

$text_image_section_2_top_svg_color = "#dedede";

//svg bottom

$text_image_section_2_bottom_svg = true;

//bottom svg color

$text_image_section_2_bottom_svg_color = "#dedede";

//set in array item to be flex-direction column-reverse

$text_image_section_2_reverse = array(2);

//simple section html

$text_image_section_2_html = <<<HTML



<div class="row align-items-center text-simple-2-item-0">

    <div class="col-12 col-sm-6 col-lg-6 m-auto" style="background-image:url('custom/about_left.jpg');height:500px;background-position:center;">

    </div>

    <div class="col-12 col-sm-6 col-lg-6 p-5 text-left custom-class xs-text-center">

    <h2 class="display-5 mb-3 subtitle-h2">Tradicija</h2>

    <h3 class="title-h3">pomešana sa ljubavlju</h3>

    <p class="">Šljive koje gajimo na našim plantažama na obroncima planine Vlašić, poznate po idealnim klimatskim uslovima, negujemo sa pažnjom i ljubavlju, koristeći isključivo tradicionalne metode uzgoja. Na taj način, osiguravamo da naši proizvodi nose ne samo ukus vrhunske šljive, već i duh tradicije i autentičnosti.</p>



    <a href="{$about_link}" class="btn btn-custom-style">o nama</a>



    </div>

</div>

<div class="row align-items-center text-simple-2-item-1">

    <div class="col-12 col-sm-6 col-lg-6 p-5 text-right custom-class xs-text-center">

    <h2 class="display-5 mb-3 subtitle-h2">Ponuda</h2>

    <h3 class="title-h3">suva šljiva kao favorit</h3>

    <p class="">Naša ponuda obuhvata sveže šljive stenlej, kao i suve šljive koje pažljivo sušimo kako bismo sačuvali svežinu i bogatstvo njenog ukusa. Takođe, ponosno ističemo našu tradicionalnu proizvodnju rakije od šljive, koja je postala sinonim za kvalitet i autentičan ukus. Godišnje osušimo u proseku oko 30-35t sveže šljive sto je oko 10 tona suve, zavisi od godine do godine. Suva šljiva isto kao i sveža jako je dobar prirodni lek, to možete pročitati i pronaci veoma lako na internetu ali i u drugom odeljku na našem sajtu.</p>



        <a href="{$gallery_link}" class="btn btn-custom-style">pogledaj<span class="no-view-text">više o šljivi</span></a>

    </div>

    <div class="col-12 col-sm-6 col-lg-6 m-auto" style="background-image:url('custom/about_right_new.jpg');height:500px;background-position:center;">

    </div>

</div>



HTML;



####################################################################

#################### section_column  ###############################

####################################################################

//section column title color

$section_column_title_color = "#374151";

//section column subtitle color

$section_column_subtitle_color = "#374151";

//section column text color

$section_column_text_color = "#374151";

//section column bg color

$section_column_bg_color = "#dedede";

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

$section_column_bottom_svg = true;

//bottom svg color

$section_column_bottom_svg_color = "#374151";

//section column html

$section_column_html = <<<HTML



<h2 class="pb-2 border-bottom subtitle-h2">Zdravlje na prvom mestu</h2>

<div class="row g-4 row-cols-1 row-cols-lg-8 column-section-animation">

    <div class="feature col-lg-6 left-column">

    <div class="">

    <img src="custom/presna_sljiva.jpg" class="d-block mx-lg-auto img-fluid mt-4 mb-4" alt="presna sljiva" width="700" height="500" loading="lazy">

    </div>

    <h3 class="title-h3">Sveža šljiva i zdravlje</h3>

    <p>Šljiva je voće bogato vlaknima, vitaminima i mineralima, te ima nizak glikemijski indeks, što je čini izuzetno korisnom za zdravlje. Evo nekoliko razloga zašto je konzumacija šljiva dobra za vaše zdravlje:</p>

    <ul class="pl-0">

        <li><p><strong>Bogata vlaknima:</strong> Šljive su bogate vlaknima, što je ključno za zdrav probavni sistem. Vlakna pomažu u prevenciji zatvora i održavanju redovne probave.</p></li>

        <li><p><strong>Antioksidansi:</strong> Šljive su bogate antioksidansima poput vitamina C, koji pomažu u borbi protiv slobodnih radikala i smanjuju upalu u tijelu.</p></li>

        <li><p><strong>Vitamini i minerali:</strong> Šljive su dobar izvor vitamina A, K i B-kompleksa te minerala poput kalijuma, mangana i bakra, koji su važni za zdravlje kostiju, srca i mozga.</p></li>

        <li><p><strong>Zdravlje srca:</strong> Konzumacija šljiva može pomoći u smanjenju rizika od srčanih bolesti zahvaljujući njihovom visokom udjelu vlakana i antioksidansa.</p></li>

        

    </ul>

    </div>

    <div class="feature col-lg-6 right-column">

    <div class="">

        <img src="custom/suva_sljiva.jpg" class="d-block mx-lg-auto img-fluid mt-4 mb-4" alt="suva sljiva" width="700" height="500" loading="lazy">

    </div>

    <h3 class="title-h3">suva šljiva i zdravlje</h3>

    <p>Suve šljive, poznate i kao suve šljive ili suhe šljive, imaju koncentriranije hranjive sastojke u usporedbi s običnim šljivama, što ih čini još korisnijima za vaše zdravlje. Evo nekoliko razloga zašto su suve šljive dobre za vas:</p>

    <ul class="pl-0">

        <li><p><strong>Poboljšana probava:</strong> Suve šljive su izuzetno bogate vlaknima, što ih čini izvrsnim prirodnim laksativom. Redovita konzumacija može pomoći u sprječavanju zatvora i održavanju zdrave probave.</p></li>

        <li><p><strong>Regulacija šećera u krvi:</strong> Suve šljive imaju nizak glikemijski indeks, što znači da ne uzrokuju nagli porast šećera u krvi. To ih čini odličnim izborom za osobe koje paze na razinu šećera u krvi.</p></li>

        <li><p><strong>Bogatstvo hranjivim tvarima:</strong> Suve šljive su bogate vitaminima i mineralima poput vitamina A, K i B-kompleksa te minerala poput kalijuma, mangana i bakra, koji su važni za održavanje zdravlja kostiju, srca i mozga.</p></li>

        <li><p><strong>Zdravlje srca:</strong> Redovita konzumacija suvih šljiva može smanjiti rizik od srčanih bolesti zbog njihovog visokog udjela vlakana i antioksidansa.</p></li>

    </ul>

    <p>Suve šljive su praktična, ukusna i hranjiva grickalica koja može donijeti brojne koristi za vaše zdravlje.</p>

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



$formTitle = "Imate pitanje?";

$formText = "Popunite polja ispod!";

//center right left

$formTextAlign = "center";

$formWidth = "400px";

$formBgColor = "#374151";

$formTextColor = "#dedede";

$formInputColorText = "#374151";

$formBgImage = "";

//svg top

$form_top_svg = false;

//top svg color

$form_top_svg_color = "#11101d";

//svg bottom

$form_bottom_svg = false;

//bottom svg color

$form_bottom_svg_color = "#dedede";



####################################################################

#################### footer_v1 section  ############################

####################################################################



$footer_v1_html = <<<HTML



<p class="mb-3 mb-md-0 ">© 2024 {$shortCompanyName}</p>



HTML;



//set footer background color

$footer_v1_bg_color = "#374151";

//set footer text color

$footer_v1_text_color = "#dedede";

//social icon hover color

$footer_v1_social_hover_color = "#374151";

//social icon hover bg color

$footer_v1_social__bg_hover_color = "#dedede";

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

$address_map = "";

$latituda = '44.42231450662839';

$longituda = '19.63598522325271';

$dark_map = false;

$map_v1_height = "550px";



####################################################################

#################### map section v2  ###############################

####################################################################

//set map style light , color, dark

$map_v2_style = "color";

// set map zoom 8 9 10 12 13 15 18 20 ...

$map_v2_zoom_level = 16;

$address_map_v2 = "Šljiva sa Vlašića";

$coordinates = '44.42215420089931, 19.6358532688308';

$map_v2_height = "550px";

$map_v2_link = "https://www.google.com/maps/place/%D0%93%D0%BE%D1%80%D1%9A%D0%B5+%D0%A6%D1%80%D0%BD%D0%B8%D1%99%D0%B5%D0%B2%D0%BE/@44.4217099,19.6344043,17.5z/data=!4m6!3m5!1s0x4759868541e25369:0xd8115e78cb1849aa!8m2!3d44.43515!4d19.6273347!16s%2Fm%2F0h98tsl?entry=ttu";



####################################################################

#################### faq section  ##################################

####################################################################



$faq_bg_color = "#374151";

$faq_bg_image = "";

$faq_title_color="#dedede";

$faq_text_color = "#dedede";

$faq_question_hover_color = "#dedede";

$faq_title="Frekfentna pitanja";



$faq_array = array(

    array("question" => "Odakle potiče vaša porodična firma \"Šljiva sa Vlašića\"?", "answer" => "Naša porodična firma \"Šljiva sa Vlašića\" potiče iz sela Gornje Crniljevo, koje se nalazi u zapadnoj Srbiji, u srcu Kolubarskog okruga. Već preko 40 godina negujemo tradiciju uzgoja šljive i proizvodnje rakije na obroncima planine Vlašić."),

    array("question" => "Koje proizvode nudite?", "answer" => "Naša ponuda obuhvata sveže šljive sorte stenlej, suve šljive, kao i vrhunsku rakiju od šljive. Sve naše proizvode odlikuje vrhunski kvalitet i autentičan ukus, koji proizilazi iz pažljivo odabranih plodova i tradicionalnih metoda proizvodnje."),

    array("question" => "Kako se razlikuju vaše sveže šljive od drugih na tržištu?", "answer" => "Naše sveže šljive potiču sa naših plantaža na obroncima planine Vlašić, gde se gaje uz pažljivu negu i primenu tradicionalnih metoda uzgoja. Na taj način, osiguravamo vrhunski kvalitet i autentičan ukus šljive, koji je prepoznatljiv širom regiona."),

    array("question" => "Kako sušite šljive i šta čini vaše suve šljive posebnim?", "answer" => "Naše suve šljive su pažljivo sušene kako bismo sačuvali svežinu i bogatstvo njenog ukusa. Koristimo tradicionalne metode sušenja, što rezultira suvim šljivama koje su sočne, slatke i punog ukusa, bez dodatih konzervansa ili veštačkih aditiva."),

    array("question" => "Šta čini vašu rakiju od šljive posebnom?", "answer" => "Naša rakija od šljive proizvodi se od pažljivo odabranih plodova šljive sorte stenlej, po tradicionalnoj recepturi koja se prenosi generacijama. Pažljivo kontrolisani proces proizvodnje i odležavanja, kao i korišćenje isključivo najkvalitetnijih sastojaka, čine našu rakiju od šljive neodoljivo ukusnom i posebnom.")

);



//svg top

$faq_top_svg = true;

//top svg color

$faq_top_svg_color = "#dedede";

//svg bottom

$faq_bottom_svg = false;

//bottom svg color

$faq_bottom_svg_color = "#dedede";



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

$cool_section_bg_color = "#dedede";

$cool_section_text_color = "#dedede";

$cool_section_height = "70vh";



$cool_array = array(

    array("img" => "custom/gallery/gallery_8.jpg" , "text" => "šljiva u cvatu"),

    array("img" => "custom/about_left.jpg" , "text" => "šljiva u rodu"),

    array("img" => "custom/gallery/gallery_9.jpg" , "text" => "zasad šljive"),

    array("img" => "custom/gallery/gallery_10.jpg" , "text" => "početak kupljenja"),

    array("img" => "custom/gallery/gallery_7.jpg" , "text" => "rod šljive"),

    #array("img" => "custom/gallery/gallery_8.jpg" , "text" => "salad")

);



//svg top

$cool_top_svg = true;

//top svg color

$cool_top_svg_color = "#374151";

//svg bottom

$cool_bottom_svg = true;

//bottom svg color

$cool_bottom_svg_color = "#374151";



####################################################################

############################# pages  ###############################

####################################################################



#######################################

############## contact  ###############

#######################################



$contact_page_bg_color = "#000";

$contact_page_bg_filter = "opacity(0.2)";

$contact_page_bg_image = "custom/contact_bg.jpg";

$contact_page_text_color = "#dedede";

$contact_page_subtitle_color = "#dedede";

$contact_page_form_bg_color = "#dedede";

$contact_page_form_text_color = "#374151";



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
    array("img" => "gallery_1.jpg" , "alt" => "otresena sljiva"),

    array("img" => "gallery_2.jpg" , "alt" => "otresena sljiva druga"),

    array("img" => "gallery_3.jpg" , "alt" => "sljiva u cvatu"),

    array("img" => "gallery_4.jpg" , "alt" => "redjanje sljive"),

    array("img" => "gallery_5.jpg" , "alt" => "slika sljive izbliza"),

    array("img" => "gallery_6.jpg" , "alt" => "suva sljiva u gajbi"),

    array("img" => "gallery_7.jpg" , "alt" => "rodne grane"),

    array("img" => "gallery_8.jpg" , "alt" => "cvat"),

    array("img" => "suva_sljiva1.jpg" , "alt" => "suva sljiva na lesi"),

    array("img" => "suva_sljiva2.jpg" , "alt" => "sljiva na lesi"),

    array("img" => "suva_sljiva3.jpg" , "alt" => "prebiranje suve sljive"),

    # array("img" => "prolece1.jpg" , "alt" => "rani cvat")

);



#######################################

#####gallery from component page ######

#######################################



$gallery_page_array = $gallery_page_array;

//insert gallery component

$gallery_component_page = "gallery_v2";//gallery_v1  gallery_v2 gallery_slide gallery_swap



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



$about_us_page_bg_image = "custom/cover.jpg";



$about_us_page_bg_filter = "opacity(0.4)";



$about_us_page_title_color = "#fff";



$about_us_page_items_bg_color = "#dedede";



$about_page_map_show = true;



$about_page_map = "map_v1";



$about_page_gallery_show = true;



//set in array item to be flex-direction column-reverse

$about_page_reverse = array(3);



$about_us_page_content = <<<HTML

<div class="col-lg-8 mx-auto text-center all-section-style">

    <h2 class="subtitle-h2">Naša priča</h2>

    <p class=" mb-4">

    "Šljiva sa Vlašića" nije samo brend, već priča o tradiciji, ljubavi prema zemlji i posvećenosti vrhunskom kvalitetu. Naša porodična firma osnovana je pre više od 40 godina, sa ciljem da prenesemo bogatstvo ukusa i mirisa šljive sa obronaka planine Vlašić naše domovine, direktno na vaše stolove.<br />



Od samih početaka, naša misija je bila jasna - proizvodnja najkvalitetnijih šljiva i rakija, koristeći isključivo tradicionalne metode i recepture koje su se prenosile s kolena na koleno. Danas, sa ponosom možemo reći da smo postali sinonim za kvalitet i autentičnost kada je u pitanju šljiva i rakija.<br />



Naše plantaže se nalaze na obroncima planine Vlašić, gde šljive rastu pod optimalnim klimatskim uslovima, obasjane suncem i okupane svežim vazduhom. Svaki plod se pažljivo bere i obrađuje, sa ciljem da zadržimo njihov prirodni ukus i bogatstvo hranljivih materija.<br />



Verujemo da je tajna našeg uspeha u ljubavi koju unosimo u svaki korak proizvodnje, kao i u poštovanju prema tradiciji i prirodi. Kada probate naše proizvode, ne samo da probate šljivu ili rakiju, već probate deo naše porodične istorije i nasleđa.

    </p>

    <p><strong>Dobrodošli u svet "Šljive sa Vlašića" - gde tradicija s ljubavlju neguje najbolje od prirode!</strong></p>

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