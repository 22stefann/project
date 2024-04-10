<style>
.popup-section {
    * {
        box-sizing: border-box;
    }
    .container {
        a#popup-button {
            <?php if (!$show_popup_button) { echo "display: none !important"; } ?>
        }
    }
    .button {
        text-decoration: none;
        font-size: 0.875rem;
        font-weight: 300;
        text-transform: uppercase;
        display: inline-block;
        border-radius: 1.5rem;
        background-color: #fff;
        color: #9191e9;
        padding: 1rem 2rem;
    }
    .popup {
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        width: 100vw;
        height: 100vh;
        bottom: 0;
        right: 0;
        background-color: rgba(0, 0, 0, .80);
        z-index: 99;
        visibility: hidden;
        opacity: 0;
        overflow: hiden;
        transition: 0.64s ease-in-out;
    }
    .popup-inner {
        position: relative;
        bottom: -100vw;
        right: -100vh;
        display: flex;
        align-items: center;
        max-width: 800px;
        max-height: 600px;
        width: 60%;
        height: 80%;
        background-color: #fff;
        transform: rotate(32deg);
        transition: 0.64s ease-in-out;
    }
    .popup__photo {
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
        width: 40%;
        height: 100%;
        overflow: hidden;
    }
    .popup__photo img {
        width: auto;
        height: 100%;
    }
    .popup__text {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 60%;
        height: 100%;
        padding: 4rem;
    }
    .popup__text h1 {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 2rem;
        text-transform: uppercase;
        color: #0a0a0a;
    }
    .popup__text p {
        font-size: 0.875rem;
        color: #686868;
        line-height: 1.5;
    }
    .popup:target {
        visibility: visible;
        opacity: 1;
    }
    .popup:target .popup-inner {
        bottom: 0;
        right: 0;
        transform: rotate(0);
    }
    .popup__close {
        position: absolute;
        right: -1rem;
        top: -1rem;
        width: 3rem;
        height: 3rem;
        font-size: 0.875rem;
        font-weight: 300;
        border-radius: 100%;
        background-color: <?php echo $popup_close_bg_color; ?>;
        z-index: 4;
        color: <?php echo $popup_close_x_color; ?>;
        line-height: 3rem;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
    }
    
    @media screen and (max-width: 767px) {
        .popup:target .popup-inner {
            flex-direction: column;
        }
        .popup__text {
            padding: 10px;
        }
        .popup__photo,
        .popup__text {
            justify-content:center;
            width: 100%;
            text-align: center;
        }
    }
}
</style>
<div class="popup-section">
    <div class="container">
    <a id="popup-button" class="button" href="#popup">Open Modal</a>
    <div class="popup" id="popup">
        <div class="popup-inner">
            <?php echo $popup_html; ?>
        </div>
    </div>
    </div>
</div>

<?php if ( !empty( $popup_delay ) &&  $show_one_popup ) { ?>
    <script>
        var isPopup = localStorage.getItem('popup');
        if ( isPopup ) {

        } else {
            setTimeout(() => {
                document.getElementById("popup-button").click();
            }, "<?php echo $popup_delay; ?>");
        }
    </script>
<?php } else { ?>
    <script>
        setTimeout(() => {
            document.getElementById("popup-button").click();
        }, "<?php echo $popup_delay; ?>");
    </script>
<?php } ?>

<script>
    function closePopup(event) {
        event.preventDefault();
        var popup = document.getElementById('popup');
        if (popup) {
            popup.style.visibility = 'hidden';
            popup.style.opacity = 0;
        }
        localStorage.setItem('popup', 'true');
        history.replaceState(null, null, ' ');
    }

    
    document.addEventListener('DOMContentLoaded', function() {
        var closeButton = document.querySelector('.popup__close');
        if (closeButton) {
            closeButton.addEventListener('click', closePopup);
        }
    });
</script>

