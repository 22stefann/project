<?php 
    
    require_once 'query/navigation.php'; 

?>
<style>
/*navigation start*/

header nav {
    width: 100%;
    height: var(--navHeight);
    background-color: var(--navBgColor);
    position: var(--navPosition);
    transition: height 0.3s;
    top: 0;
}

.scrolled {
    height: calc(var(--navHeight) - 30px);
}

header nav.scrolled {
    background-color: var(--navBgColorScroll);
}

header nav .container {
    display: flex;
    align-items: center;
    justify-content: var(--navFlexPosition);
    height: inherit;
    flex-direction: var(--navigationFlexDirection);
}

header nav .container img {
    width: var(--logoWidth);
    transition: width 0.3s;
}

header nav.scrolled .container img {
    transition: width 0.3s;
    width: calc(var(--logoWidth) - 30px);
}

header nav .container ul {
    list-style-type: none;
    display: flex;
}

header nav .container ul.navigation-tabs {
    margin-left : var(--navigationTabsPositionMargin);
    margin-right : var(--navigationTabsPositionMarginRight);
    position: relative;
}

header nav .container ul li {
    padding: var(--navPadding);
}

header nav .container ul li.dropdown-tab {
    position: relative;
}

header nav .container ul li.dropdown-tab a .fa-arrow-down {
    font-family: 'FontAwesome';
    content: '\f063';
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    font-size: calc(var(--navTabSize) - 0.4em);
    font-weight: 300;
}

header nav .container ul li p {
    margin: 0;
}

header nav .container .submenu {
    display:none;
    background-color: var(--navBgColor);
    position: absolute;
    padding: 10px;
    text-align: center;
}

header nav.scrolled .container .submenu {
    background-color: var(--navBgColorScroll);
}

header nav .container ul li a {
    text-transform: var(--navTextTransform);
    text-decoration: unset;
    color: var(--navTabColor);
    font-family: var(--navTabsFont);
    font-weight: var(--navTabFontWeight);
    font-size: var(--navTabSize);
}

header nav .container ul li a:hover {
    color: var(--navTabHoverColor);
}

header nav.scrolled .container ul li a {
    color: var(--navTabScrollColor);
}

header nav.scrolled .container ul li a:hover {
    color: var(--navTabScrollHoverColor);
}

/*navigation column */

header nav .container .nav-column {
    display: flex;
}

header nav .container .logo-column {
    display: flex;
    width: 100%;
    position: relative;
}

header nav .container .logo-column a:has(img) {
    position: relative;
    left: 50%;
    transform: translateX(-50%);
}

header nav .container .logo-column .phone-email-div {
    flex-direction: column;
    position: absolute;
    right: var(--phoneEmailPositionRight);
    left: var(--phoneEmailPositionLeft);
    top: 50%;
    padding: 5px;
    transform: translateY(-50%);
}

header nav .container .logo-column .phone-email-div li {
    padding: 0;
}

/*navigation end*/
</style>
<header>
<nav>
    <div class="container">
        <?php if ( $navigation_column ) { ?>
            <div class="logo-column">
                <a href="/#">
                    <img src="custom/<?php echo $logoUrl; ?>" alt="logo">
                </a>
                <?php if ( $phoneEmailInNav ) {?>
                    <ul class="phone-email-div">
                        <?php if ( !empty($phoneNumber) ) { ?>
                            <li>
                                    <a href="tel:<?php echo $phoneNumber; ?>"><?php echo $phoneNumber; ?></a>
                            </li>
                        <?php } ?>
                        <?php if ( !empty($email) ) { ?>
                            <li>
                                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="nav-column">
                <ul class="navigation-tabs">
                    <?php
                        if($dynamicTab) {
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<li><p><a href='#'> ".$row["naziv"]."</a></p></li>";
                                }
                            } else {
                                echo "Nema rezultata.";
                            }
                        } else {
                            foreach ($navTabs as $tab) {
                                $arrow = "";
                                if (strpos($tab['class'], 'dropdown-tab') !== false) {
                                    $arrow = '<i class="fa fa-arrow-down" aria-hidden="true"></i>';
                                }
                                echo "<li class=\"{$tab['class']}\" ><p><a href=\"{$tab['link']}\" target=\"{$tab['target']}\">{$tab['name']} {$arrow}</a></p>";
                                if (strpos($tab['class'], 'dropdown-tab') !== false) {
                                    echo "<div class=\"submenu\">";
                                    foreach ($subTabs as $sub) {
                                        if ( $tab["type"] ==  $sub["type"]) {
                                            echo "<a class=\"{$sub["class"]}\" href=\"{$sub['link']}\" target=\"{$sub['target']}\">{$sub['name']}</a> <br />";
                                        }
                                    }
                                    echo "</div>";
                                }
                                echo "</li>";
                            }
                        }
                    ?>
                </ul>
                <?php if (!empty($fbLink) || !empty($instaLink) || !empty($twitterLink) || !empty($ytLink)) { ?>
                    <ul>
                        <?php if (!empty($fbLink)) {
                            echo '<li>';
                            echo '<a class="social-icon" href="'.$fbLink.'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span class="no-view-text">facebook</span></a>';
                            echo '</li>';
                        } ?>
                    
                        <?php if (!empty($instaLink)) {
                            echo '<li>';
                            echo '<a class="social-icon" href="'.$instaLink.'" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i><span class="no-view-text">instagram</span></a>';
                            echo '</li>';
                        } ?>

                        <?php if (!empty($twitterLink)) {
                            echo '<li>';
                            echo '<a class="social-icon" href="'.$twitterLink.'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span class="no-view-text">twitter</span></a>';
                            echo '</li>';
                        } ?>
                        <?php if (!empty($ytLink)) {
                            echo '<li>';
                            echo '<a class="social-icon" href="'.$ytLink.'" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i><span class="no-view-text">youtube</span></a>';
                            echo '</li>';
                        } ?>
                    </ul>
                <?php } ?>
            </div>
        <?php } else { ?>
            <a href="/#">
                <img src="custom/<?php echo $logoUrl; ?>" alt="logo">
            </a>
            <ul class="navigation-tabs">
            <?php
                if($dynamicTab) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<li><p><a href='#'> ".$row["naziv"]."</a></p></li>";
                        }
                    } else {
                        echo "Nema rezultata.";
                    }
                } else {
                    foreach ($navTabs as $tab) {
                        $arrow = "";
                        if (strpos($tab['class'], 'dropdown-tab') !== false) {
                            $arrow = '<i class="fa fa-arrow-down" aria-hidden="true"></i>';
                        }
                        echo "<li class=\"{$tab['class']}\" ><p><a href=\"{$tab['link']}\" target=\"{$tab['target']}\">{$tab['name']} {$arrow}</a></p>";
                        if (strpos($tab['class'], 'dropdown-tab') !== false) {
                            echo "<div class=\"submenu\">";
                            foreach ($subTabs as $sub) {
                                if ( $tab["type"] ==  $sub["type"]) {
                                    echo "<a class=\"{$sub["class"]}\" href=\"{$sub['link']}\" target=\"{$sub['target']}\">{$sub['name']}</a> <br />";
                                }
                            }
                            echo "</div>";
                        }

                        echo "</li>";
                    }
                }

            ?>
            </ul>
            <?php if (!empty($fbLink) || !empty($instaLink) || !empty($twitterLink) || !empty($ytLink)) { ?>
                <ul>
                    <?php if (!empty($fbLink)) {
                        echo '<li>';
                        echo '<a class="social-icon" href="'.$fbLink.'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span class="no-view-text">facebook</span></a>';
                        echo '</li>';
                    } ?>
                
                    <?php if (!empty($instaLink)) {
                        echo '<li>';
                        echo '<a class="social-icon" href="'.$instaLink.'" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i><span class="no-view-text">instagram</span></a>';
                        echo '</li>';
                    } ?>

                    <?php if (!empty($twitterLink)) {
                        echo '<li>';
                        echo '<a class="social-icon" href="'.$twitterLink.'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span class="no-view-text">twitter</span></a>';
                        echo '</li>';
                    } ?>
                    <?php if (!empty($ytLink)) {
                        echo '<li>';
                        echo '<a class="social-icon" href="'.$ytLink.'" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i><span class="no-view-text">youtube</span></a>';
                        echo '</li>';
                    } ?>
                </ul>
            <?php } ?>
        <?php } ?>
    </div>
</nav>
</header>


<script>

$(document).ready(function() {
    window.addEventListener("scroll", function() {
        var navigation = document.querySelector("nav");
        if (window.scrollY > 50) {
        navigation.classList.add("scrolled");
        } else {
        navigation.classList.remove("scrolled");
        }
    });

    //dropdown show-hide

    $('li.dropdown-tab a').on("click", function(event){
        event.preventDefault();
        $(this).parent().parent().find(".submenu").toggle();
    });

    $(document).on("click", function(event) {
        if (!$(event.target).closest("li.dropdown-tab").length) {
            $("li.dropdown-tab .submenu").hide();
        }
        
        if ( $('li.dropdown-tab .submenu').css('display') == 'block' ) {
            $ ( this ).find('i.fa-arrow-down').css('transform', 'translateY(-50%) rotate(180deg)');
        } else {
            $ ( this ).find('i.fa-arrow-down').css('transform', 'translateY(-50%) rotate(360deg)');
        }
    });

});
</script>