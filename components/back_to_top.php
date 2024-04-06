<style>
    #btn-back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        background-color: <?php echo $bg_color_back_to_top_button; ?>;
        border-color: <?php echo $border_color_back_to_top_button; ?>;
        color: <?php echo $font_color_back_to_top_button; ?>;
        transition: scale 0.4s;
        z-index: 9;
        &:hover {
            scale: 1.1;
            transition: scale 0.4s;
        }
    }
    <?php if ( $side_back_to_top_button == "left" ) : ?>
        #btn-back-to-top {
            left: 20px;
            right: unset;
        }
    <?php endif; ?>
</style>

<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i><span class="no-view-text">back to top</span>
</button>


<script>
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>