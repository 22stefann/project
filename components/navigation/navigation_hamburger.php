<style>

.row .three {
    padding: 80px 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    background-color: #2c3e50;
    color: #ecf0f1;
    text-align: center;
}

.hamburger .line{
    width: 40px;
    height: 5px;
    background-color: var(--hamburgerColor);
    display: block;
    margin: 8px auto;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.hamburger:hover{
    cursor: pointer;
}

/* ONE start*/

#hamburger-1.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-1.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px) rotate(45deg);
    -ms-transform: translateY(13px) rotate(45deg);
    -o-transform: translateY(13px) rotate(45deg);
    transform: translateY(13px) rotate(45deg);
}

#hamburger-1.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(-45deg);
    -ms-transform: translateY(-13px) rotate(-45deg);
    -o-transform: translateY(-13px) rotate(-45deg);
    transform: translateY(-13px) rotate(-45deg);
}

/* ONE end */

/* TWO */

#hamburger-2.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px);
    -ms-transform: translateY(13px);
    -o-transform: translateY(13px);
    transform: translateY(13px);
}

#hamburger-2.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px);
    -ms-transform: translateY(-13px);
    -o-transform: translateY(-13px);
    transform: translateY(-13px);
}

/* FIVE */

#hamburger-5.is-active{
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
}

#hamburger-5.is-active .line:nth-child(2){
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
}

#hamburger-5 .line:nth-child(2){
    -webkit-transition-delay: 0.3s;
    -o-transition-delay: 0.3s;
    transition-delay: 0.3s;
}


#hamburger-5.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-5.is-active .line:nth-child(1),
#hamburger-5.is-active .line:nth-child(3){
    width: 35px;
    -webkit-transform-origin: right;
    -moz-transform-origin: right;
    -ms-transform-origin: right;
    -o-transform-origin: right;
    transform-origin: right;
}

#hamburger-5.is-active .line:nth-child(1){
    -webkit-transform: translateY(15px) rotate(45deg);
    -ms-transform: translateY(15px) rotate(45deg);
    -o-transform: translateY(15px) rotate(45deg);
    transform: translateY(15px) rotate(45deg);
}

#hamburger-5.is-active .line:nth-child(3){
    -webkit-transform: translateY(-15px) rotate(-45deg);
    -ms-transform: translateY(-15px) rotate(-45deg);
    -o-transform: translateY(-15px) rotate(-45deg);
    transform: translateY(-15px) rotate(-45deg);
}

/* SIX */

#hamburger-6.is-active{
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-transition-delay: 0.6s;
    -o-transition-delay: 0.6s;
    transition-delay: 0.6s;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
}

#hamburger-6.is-active .line:nth-child(2){
    width: 0px;
}

#hamburger-6.is-active .line:nth-child(1),
#hamburger-6.is-active .line:nth-child(3){
    -webkit-transition-delay: 0.3s;
    -o-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

#hamburger-6.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px);
    -ms-transform: translateY(13px);
    -o-transform: translateY(13px);
    transform: translateY(13px);
}

#hamburger-6.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(90deg);
    -ms-transform: translateY(-13px) rotate(90deg);
    -o-transform: translateY(-13px) rotate(90deg);
    transform: translateY(-13px) rotate(90deg);
}

/* EIGHT */

#hamburger-8.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-8.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px);
    -ms-transform: translateY(13px);
    -o-transform: translateY(13px);
    transform: translateY(13px);
}

#hamburger-8.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(90deg);
    -ms-transform: translateY(-13px) rotate(90deg);
    -o-transform: translateY(-13px) rotate(90deg);
    transform: translateY(-13px) rotate(90deg);
}

/* NINE */

#hamburger-9{
    position: relative;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

#hamburger-9.is-active{
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
}

#hamburger-9:before{
    content: "";
    position: absolute;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 70px;
    height: 70px;
    border: 5px solid transparent;
    top: calc(50% - 35px);
    left: calc(50% - 35px);
    border-radius: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

#hamburger-9.is-active:before{
    border: 5px solid #ecf0f1;
}

#hamburger-9.is-active .line{
    width: 35px;
}

#hamburger-9.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-9.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px);
    -ms-transform: translateY(13px);
    -o-transform: translateY(13px);
    transform: translateY(13px);
}

#hamburger-9.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(90deg);
    -ms-transform: translateY(-13px) rotate(90deg);
    -o-transform: translateY(-13px) rotate(90deg);
    transform: translateY(-13px) rotate(90deg);
}

/* ELEVEN */

#hamburger-11{
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

#hamburger-11.is-active{
    animation: smallbig 0.6s forwards;
}

@keyframes smallbig{
    0%, 100%{
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
    }

    50%{
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
    }
}

#hamburger-11.is-active .line:nth-child(1),
#hamburger-11.is-active .line:nth-child(2),
#hamburger-11.is-active .line:nth-child(3){
    -webkit-transition-delay: 0.2s;
    -o-transition-delay: 0.2s;
    transition-delay: 0.2s;
}

#hamburger-11.is-active .line:nth-child(2){
    opacity: 0;
}

#hamburger-11.is-active .line:nth-child(1){
    -webkit-transform: translateY(13px) rotate(45deg);
    -ms-transform: translateY(13px) rotate(45deg);
    -o-transform: translateY(13px) rotate(45deg);
    transform: translateY(13px) rotate(45deg);
}

#hamburger-11.is-active .line:nth-child(3){
    -webkit-transform: translateY(-13px) rotate(-45deg);
    -ms-transform: translateY(-13px) rotate(-45deg);
    -o-transform: translateY(-13px) rotate(-45deg);
    transform: translateY(-13px) rotate(-45deg);
}

/* TWELVE */

#hamburger-12.is-active .line:nth-child(1){
    opacity: 0;
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}

#hamburger-12.is-active .line:nth-child(3){
    opacity: 0;
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}

.nav-holder {
    top: 0;
    position: fixed;
    background-color: var(--navBgColor);
    width: 100%;
    z-index: 99;
    a.navbar-brand {
        margin: 0;
    }
    a img {
        width: <?php echo $widthLogo; ?>;
        transition: width 0.3s;
    }
}

.nav-holder.scrolled {
    transition: height 0.3s;
    background-color: var(--navBgColorScroll);
    .hamburger .line {
        background-color: var(--hamburgerScrollColor);
    }
}

.navbar.scrolled a.navbar-brand img {
    width: calc(<?php echo $widthLogo; ?> - <?php echo $logoMobileScrollResize; ?>);
    transition: width 0.3s;
}

.sidebar {
    position: fixed;
    top: 0;
    left: -80px;
    height: 100%;
    width: 78px;
    background: var(--hamburger_menu_side_bg);
    padding: 6px 14px;
    padding-top: 60px;
    z-index: 99;
    transition: all 0.5s ease;
}

.sidebar.active{
    width: 240px
}

.navbar .logo_content {
    top: 50%;
    transform: translateY(-50%);
    left: 5px;
    z-index: 999;
}

.logo_content .logo i {
    font-size: 50px;
    margin-right: 5px;
}

.navbar #btn {
    color: #fff;
    font-size: 40px;
    height: 60px;
    width: 60px;
    text-align: center;
    line-height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: margin-top 0.5s ease;
}

.navbar #btn:hover {
    cursor: pointer;
}

.navbar.scrolled #btn {
    transition: margin-top 0.5s ease;
}

.sidebar.active #btn{
    left: 89%;
}

.sidebar ul{
    margin-top: 20px;
}

.sidebar ul li{
    position: relative;
    height: 50px;
    width: 100%;
    margin: 0 5px;
    list-style: none;
    line-height: 50px;
    margin: 5px 0;
}

.sidebar ul li .tooltip{
    position: absolute;
    left: 125px;
    top: 0;
    transform: translate(-50% , -50%);
    border-radius: 6px;
    height: 35px;
    width: 120px;
    background: #fff;
    line-height: 35px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    transition: 0s;
    opacity: 0;
    pointer-events: none;
    display: block;
}

.sidebar.active ul li .tooltip {
    display: none;
}

.sidebar ul li:hover .tooltip {
    transition: all 0.5s ease;
    opacity: 1;
    top: 50%
}

.sidebar ul li a {
    color: var(--navTabColor);
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 12px;
    white-space: nowrap;
    transition: all 0.4s ease;
}

.sidebar ul li a:hover {
    color: var(--navTabHoverColor);
    background: var(--hamburger_menu_tabs_bg);
}

.sidebar ul li i {
    font-size: 18px;
    font-weight: 400;
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    line-height: 50px;
    text-align: center;
}

.sidebar .links_name {
    font-size: 15px;
    font-weight: 400;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.sidebar.active .links_name {
    transition: 0s;
    opacity: 1;
    pointer-events: auto
}

@media (max-width: 767px) {
    .nav-holder {
        a img {
            width: var(--mobileWidthLogo);
        }
        a.navbar-brand {
            justify-content: end !important;
        }
        justify-content: end !important;
    }
}
</style>
<div class="navbar nav-holder d-flex align-items-center px-2 justify-content-<?php echo $hamburger_menu_logo_position; ?>">
    
    <div class="logo_content d-flex align-items-center justify-content-center position-absolute">
        <div class="three col" id="btn">
            <div class="hamburger" id="<?php echo get_hamburger_id($hamburger_menu_type); ?>">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>

        <?php
        function get_hamburger_id($type) {
            switch ($type) {
                case 1:
                    return "hamburger-1";
                case 2:
                    return "hamburger-2";
                case 3:
                    return "hamburger-5";
                case 4:
                    return "hamburger-6";
                case 5:
                    return "hamburger-8";
                case 6:
                    return "hamburger-9";
                case 7:
                    return "hamburger-11";
                default:
                    return "hamburger-12";
            }
        }
        ?>
    </div>
    <a class="navbar-brand d-flex align-items-center justify-content-<?php echo $hamburger_menu_logo_position; ?>" href="/#">
        <img src="custom/logo.png" alt="<?php echo $companyName; ?> logo" />
    </a> 
    <nav class="sidebar">
    <ul class="nav_list">
        <?php foreach ($navTabs as $tab) : ?>
            <li>
                <a href="<?php echo $tab['link']; ?>" target="<?php echo $tab['target']; ?>" >
                    <i class='bx' ></i>
                    <span class="links_name"><?php echo $tab['name']; ?></span>
                </a>
                <span class="tooltip"><?php echo $tab['name']; ?></span>
            </li>
        <?php endforeach; ?>
        <?php if ( !empty($twitterLink) ) { ?>
            <li class=""> 
                <a class="" target="_blank" href="<?php echo $twitterLink; ?>"><i class='bx' ></i><i class="fab fa-twitter links_name"></i><span class="links_name">Twitter</span></a> 
            </li>
        <?php } ?>

        <?php if ( !empty($fbLink) ) { ?>
            <li class=""> 
                <a class="" target="_blank" href="<?php echo $fbLink; ?>"><i class='bx' ></i><i class="fab fa-facebook links_name"></i><span class="links_name">Facebook</span></a> 
            </li>
        <?php } ?>

        <?php if ( !empty($instaLink) ) { ?>
            <li class=""> 
                <a class="" target="_blank" href="<?php echo $instaLink; ?>"><i class='bx' ></i><i class="fab fa-instagram links_name"></i><span class="links_name">Instagram</span></a> 
            </li>
        <?php } ?>

        <?php if ( !empty($ytLink) ) { ?>
            <li class=""> 
                <a class="" target="_blank" href="<?php echo $ytLink; ?>"><i class='bx' ></i><i class="fab fa-youtube links_name"></i><span class="links_name">Youtube</span></a> 
            </li>
        <?php } ?>
    </ul>
    </nav>
</div>



<script>
let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");

btn.onclick = function() {
    sidebar.classList.toggle("active");
    if(btn.classList.contains("bx-menu")){
        btn.classList.replace("bx-menu" , "bx-menu-alt-right");
    }else{
        btn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
}

$(document).ready(function(){
    $(".hamburger").click(function(){
        $(this).toggleClass("is-active");
    });
});
<?php if ( $bootstrap_nav_height_scroll_change ) { ?>
    window.addEventListener("scroll", function() {
        var navigation = document.querySelector(".navbar");
        if (window.scrollY > 20) {
            navigation.classList.add("scrolled");
        } else {
            navigation.classList.remove("scrolled");
        }
    });
<?php } ?>
</script>