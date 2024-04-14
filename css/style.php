<style>
    
    <?php
        echo "@import url($googleFont);"
    ?>
    :root {
        --font: <?php echo $googleFont; ?>; 
        /* h1 */
        --all_h1_font : <?php echo $all_h1_font; ?>;
        --all_h1_transform : <?php echo $all_h1_transform; ?>;
        --all_h1_font_size : <?php echo $all_h1_font_size; ?>;
        --all_h1_font_weight : <?php echo $all_h1_font_weight; ?>;
        /* h2 */
        --all_h2_font : <?php echo $all_h2_font; ?>;
        --all_h2_transform : <?php echo $all_h2_transform; ?>;
        --all_h2_font_size : <?php echo $all_h2_font_size; ?>;
        --all_h2_font_resize : <?php echo $all_h2_font_resize; ?>;
        --all_h2_font_weight : <?php echo $all_h2_font_weight; ?>;
        /* p */
        --all_p_font : <?php echo $all_p_font; ?>;
        --all_p_font_size : <?php echo $all_p_font_size; ?>;
        --all_p_font_resize : <?php echo $all_p_font_resize; ?>;
        --all_p_font_weight : <?php echo $all_p_font_weight; ?>;
        /* all buttons */
        --allButtonsFontFamily : <?php echo $all_button_font; ?>;
        --allButtonsFontSize : <?php echo $allButtonsFontSize; ?>;
        --allButtonsFontSizeMobile : <?php echo $allButtonsFontSizeMobile; ?>;
        --all_button_transform : <?php echo $all_button_transform; ?>;
        --buttonsPaddingDesktop : <?php echo $buttonsPaddingDesktop; ?>;
        --buttonsPaddingMobile : <?php echo $buttonsPaddingMobile; ?>;
        /* custom navigation */
        --navigationColumn: <?php echo $navigation_column; ?>;
        --navigationFlexDirection: <?php echo $navFlexDirection; ?>;
        --navPosition: <?php echo $navigationPosition; ?>;
        --navFlexPosition: <?php echo $navigationFlexPosition; ?>;
        --navigation_container_padding: <?php echo $navigation_container_padding; ?>;
        --navigationTabsPositionMargin: <?php echo $navigationTabsPositionMargin; ?>;
        --navigationTabsPositionMarginRight: <?php echo $navigationTabsPositionMarginRight; ?>;
        --navHeight: <?php echo $heightNav; ?>;
        --logoWidth: <?php echo $widthLogo; ?>;
        --logoScrollResize: <?php echo $logoScrollResize; ?>;
        --logoTopPosition: <?php echo $logoTopPosition; ?>;
        --navBgColor : <?php echo $nabBgColor; ?>;
        --navBgColorScroll: <?php echo $navBgColorScroll; ?>;
        --hamburgerColor : <?php echo $hamburgerColor; ?>;
        --hamburgerScrollColor : <?php echo $hamburgerScrollColor; ?>;
        --hamburger_menu_side_bg : <?php echo $hamburger_menu_side_bg; ?>;
        --navPadding: <?php echo $tabPadding; ?>;
        --navTextTransform: <?php echo $navTextTransform; ?>;
        --navTabColor: <?php echo $navTabColor; ?>;
        --navTabScrollColor: <?php echo $navTabScrollColor; ?>;
        --navTabHoverColor: <?php echo $navTabHoverColor; ?>;
        --navTabScrollHoverColor: <?php echo $navTabScrollHoverColor; ?>;
        --navTabsFont: <?php echo $navTabsFont; ?>;
        --navTabFontWeight: <?php echo $navTabFontWeight; ?>;
        --navTabSize: <?php echo $navTabSize; ?>;
        --hamburger_menu_tabs_bg : <?php echo $hamburger_menu_tabs_bg; ?>;
        --phoneEmailPositionRight: <?php echo $phoneEmailPositionRight; ?>;
        --phoneEmailPositionLeft: <?php echo $phoneEmailPositionLeft; ?>;
        --disableSocial: <?php echo $disableSocial; ?>;
        --hamburgerMobileNavigationIcon: <?php echo $hamburgerMobileNavigationIcon; ?>;
        --mobileWidthLogo: <?php echo $mobileWidthLogo; ?>;
        --mobileNavHeight: <?php echo $mobileNavHeight; ?>;
        --mobileNavPosition: <?php echo $mobileNavPosition; ?>;
        --mobileNavWidth: <?php echo $mobileNavWidth; ?>;
        --mobileTabsBgColor: <?php echo $mobileTabsBgColor; ?>;
        --mobileTabsColor: <?php echo $mobileTabsColor; ?>;
        --mobileTabsBgHoverColor: <?php echo $mobileTabsBgHoverColor; ?>;
        --mobileTabsHoverColor: <?php echo $mobileTabsHoverColor; ?>;
        --navSocialBgColor: <?php echo $navSocialBgColor; ?>;
        --navSocialColor: <?php echo $navSocialColor; ?>;
        --h2FontFamily: <?php echo $h2FontFamily; ?>;
        /*video cover*/
        --desktop_video_margin_top : <?php echo $desktop_video_margin_top; ?>;
        --mobile_video_margin_top : <?php echo $mobile_video_margin_top; ?>;
        /*slideshow*/
        --slideshow_height_mobile : <?php echo $slideshow_height_mobile; ?>;
        --slideshowAlpha : <?php echo $slideshowAlpha; ?>;
        --slideshow_text_color : <?php echo $slideshow_text_color; ?>;
        --slideshow_arrow_color : <?php echo $slideshow_arrow_color; ?>;
        --slideshow_hover_arrow_color : <?php echo $slideshow_hover_arrow_color; ?>;
        --slideshow_bg_arrow_color : <?php echo $slideshow_bg_arrow_color; ?>;
        --slideshow_bg_hover_arrow_color : <?php echo $slideshow_bg_hover_arrow_color; ?>;
        /*custom cover section*/
        --custom_cover_bg_color : <?php echo $custom_cover_bg_color; ?>;
        --custom_cover_section_text_color : <?php echo $custom_cover_section_text_color; ?>;
        --custom_cover_section_play_btn_color : <?php echo $custom_cover_section_play_btn_color; ?>;
        /*under cover section*/
        --underCoverBgImage : url('<?php echo $underCoverBgImage; ?>');
        --underCoverBgColor : <?php echo $underCoverBgColor; ?>;
        --underCoverTextColor : <?php echo $underCoverTextColor; ?>;
        --underCoverSubtitleColor : <?php echo $underCoverSubtitleColor; ?>;
        --underCoverTitleColor : <?php echo $underCoverTitleColor; ?>;
        /* gallery v1 section */
        --gallery_section_title_color : <?php echo $gallery_section_title_color; ?>;
        /*slideshow section*/
        --slideshowSectionDesktopHeight : <?php echo $slideshowSectionDesktopHeight; ?>;
        --slideshowSectionMobileHeight : <?php echo $slideshowSectionMobileHeight; ?>;
        --slideshowBootstrapTextAlign : <?php echo $slideshowBootstrapTextAlign; ?>;
        --slideshowBootstrapHorizontalAlign : <?php echo $slideshowBootstrapHorizontalAlign; ?>;
        --slideshowBootstrapVerticalAlign : <?php echo $slideshowBootstrapVerticalAlign; ?>;
        --bootstrapSlideshowBg : <?php echo $bootstrapSlideshowBg; ?>;
        --slideshowBootstrapAlpha : <?php echo $slideshowBootstrapAlpha; ?>;
        /* buttons 9 10 11 animation bg color */
        --button_animation_bg_color : <?php echo $button_animation_bg_color; ?>;
    }
    <?php
    
    foreach ($all_buttons_style as $button) {
        $button_bg_color = ${'button_' . $button['initial-state'] . '_bg_color'};
        $button_border_color = ${'button_' . $button['initial-state'] . '_border_color'};
        $button_text_color = ${'button_' . $button['initial-state'] . '_text_color'};
        $button_border_radius = ${'button_' . $button['initial-state'] . '_border_radius'};

        $button_bg_color_hover = ${'button_' . $button['hover-state'] . '_bg_color_hover'};
        $button_border_color_hover = ${'button_' . $button['hover-state'] . '_border_color_hover'};
        $button_text_color_hover = ${'button_' . $button['hover-state'] . '_text_color_hover'};

        echo "
            .{$button['section-class']} .btn-custom-style {
                background-color: {$button_bg_color};
                border: 2px solid {$button_border_color};
                color: {$button_text_color};
                border-radius: {$button_border_radius};
            }
            .{$button['section-class']} .btn-custom-style:hover,
            .{$button['section-class']} .btn-custom-style:focus,
            .{$button['section-class']} .btn-custom-style:hover:before,
            .{$button['section-class']} .btn-custom-style:focus:before  {
                background-color: {$button_bg_color_hover};
                border-color: {$button_border_color_hover};
                color: {$button_text_color_hover};
            }
        ";
    }

    ?>
    /* all h1 resize */ 
    <?php if ( !empty($all_h1_font_size_1400) ) : ?>
        @media (max-width: 1400px) {
            .title-h1,
            .subtitle-h2 {
                font-size: calc(<?php echo $all_h1_font_size ." - ". $all_h1_font_size_1400 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_h1_font_size_1200) ) : ?>
        @media (max-width: 1200px) {
            .title-h1,
            .subtitle-h2 {
                font-size: calc(<?php echo $all_h1_font_size ." - ". $all_h1_font_size_1400 ." - ". $all_h1_font_size_1200 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_h1_font_size_1024) ) : ?>
        @media (max-width: 1024px) {
            .title-h1,
            .subtitle-h2 {
                font-size: calc(<?php echo $all_h1_font_size ." - ". $all_h1_font_size_1400 ." - ". $all_h1_font_size_1200." - ". $all_h1_font_size_1024 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_h1_font_size_767) ) : ?>
        @media (max-width: 767px) {
            .title-h1,
            .subtitle-h2 {
                font-size: <?php echo $all_h1_font_size_767;?>;
            }
        }
    <?php endif; ?>
    /* all h2 resize */ 
    <?php if ( !empty($all_h2_font_size_1400) ) : ?>
        @media (max-width: 1400px) {
            .title-h3,
            .title-h2 {
                font-size: calc(<?php echo $all_h2_font_size ." - ". $all_h2_font_size_1400 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_h2_font_size_1200) ) : ?>
        @media (max-width: 1200px) {
            .title-h3,
            .title-h2 {
                font-size: calc(<?php echo $all_h2_font_size ." - ". $all_h2_font_size_1400 ." - ". $all_h2_font_size_1200 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_h2_font_size_1024) ) : ?>
        @media (max-width: 1024px) {
            .title-h3,
            .title-h2 {
                font-size: calc(<?php echo $all_h2_font_size ." - ". $all_h2_font_size_1400 ." - ". $all_h2_font_size_1200." - ". $all_h2_font_size_1024 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_h2_font_size_767) ) : ?>
        @media (max-width: 767px) {
            .title-h3,
            .title-h2 {
                font-size: <?php echo $all_h2_font_size_767;?>;
            }
        }
    <?php endif; ?>
    /* all h3 resize */ 
    <?php if ( !empty($all_p_font_size_1400) ) : ?>
        @media (max-width: 1400px) {
            .title-h4 {
                font-size: calc(<?php echo $all_p_font_size ." - ". $all_p_font_size_1400 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_p_font_size_1200) ) : ?>
        @media (max-width: 1200px) {
            .title-h4 {
                font-size: calc(<?php echo $all_p_font_size ." - ". $all_p_font_size_1400 ." - ". $all_p_font_size_1200 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_p_font_size_1024) ) : ?>
        @media (max-width: 1024px) {
            .title-h4 {
                font-size: calc(<?php echo $all_p_font_size ." - ". $all_p_font_size_1400 ." - ". $all_p_font_size_1200." - ". $all_p_font_size_1024 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_p_font_size_767) ) : ?>
        @media (max-width: 767px) {
            .title-h4 {
                font-size: <?php echo $all_p_font_size_767;?>;
            }
        }
    <?php endif; ?>
    /* all p resize */ 
    <?php if ( !empty($all_p_font_size_1400) ) : ?>
        @media (max-width: 1400px) {
            p {
                font-size: calc(<?php echo $all_p_font_size ." - ". $all_p_font_size_1400 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_p_font_size_1200) ) : ?>
        @media (max-width: 1200px) {
            p {
                font-size: calc(<?php echo $all_p_font_size ." - ". $all_p_font_size_1400 ." - ". $all_p_font_size_1200 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_p_font_size_1024) ) : ?>
        @media (max-width: 1024px) {
            p {
                font-size: calc(<?php echo $all_p_font_size ." - ". $all_p_font_size_1400 ." - ". $all_p_font_size_1200." - ". $all_p_font_size_1024 ?>);
            }
        }
    <?php endif; ?>
    <?php if ( !empty($all_p_font_size_767) ) : ?>
        @media (max-width: 767px) {
            p {
                font-size: <?php echo $all_p_font_size_767;?>;
            }
        }
    <?php endif; ?>
</style>