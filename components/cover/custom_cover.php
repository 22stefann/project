
<div class="hero-contain">
    <?php $br=0; foreach ($custom_cover_array as $item) : ?>  
        <?php if ( $br == 0 ) : ?>
            <h1 class="title-h3 <?php echo $item["class"] ?>"><?php echo $item["text"] ?></h2>
        <?php endif; ?> 
            <h2 class="title-h3 <?php echo $item["class"] ?>"><?php echo $item["text"] ?></h2>
    <?php endforeach; ?>
    <div class="circle d-flex align-items-center justify-content-center">
        <span class="circle-icon"><i class="fas fa-stop"></i></span>
    </div>
    <hr class="hr-style">
</div>

<script>
    $(document).ready(function() {
        let intervalID;

        function startAnimation() {
            intervalID = setInterval(function() {
                $('.hr-style').toggleClass('hr-rotate');
                $('.text-1-tleft').toggleClass('t1thide');
                $('.text-1-bright').toggleClass('t1bhide');
                $('.text-2-tright').toggleClass('t2tshow');
                $('.text-2-bleft').toggleClass('t2bshow');
            }, <?php echo $custom_cover_interval; ?>);
        }

        startAnimation();

        $('.circle').click(function() {
            if (intervalID) {
                clearInterval(intervalID);
                intervalID = null;
                $('.circle-icon i').removeClass('fa-stop').addClass('fa-play');
            } else {
                startAnimation();
                $('.circle-icon i').removeClass('fa-play').addClass('fa-stop');
            }
        });
    });
</script>