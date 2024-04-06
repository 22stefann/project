
<style>
    .cover-content {
        max-height: 100vh;
        height: auto;
        line-height: 0;
        .video-btn-cover {
            margin-top: <?php echo $desktop_video_margin_top; ?>;
        }
    }
    @media (max-width: 991px) {
        .cover-content {
        .video-btn-cover {
            margin-top: <?php echo $mobile_video_margin_top; ?>;
        }
    }
    }
</style>
<div class="video-btn-cover">
<div id="play-stop-control"><i class="fa fa-pause" aria-hidden="true"></i><span class="no-view-text">button for play stop video</span></i></div>
<?php if ( !empty($video_sound) && $video_sound ) { ?>
    <div id="audio-control" class="muted"><i class="fa-solid fa-volume-xmark"><span class="no-view-text">button for mute unmute video</span></i></div>
<?php } ?>
    <video poster="<?php if ( !empty($video_poster) ) { echo $video_poster; } ?>" id="cover-video" width="100%" height="" autoplay muted loop>
        <source src="<?php if ( !empty($video_url) ) { echo $video_url; } ?>" type="video/mp4">
        <source src="<?php if ( !empty($video_url) ) { echo $video_url; } ?>" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</div>


<script>
    const video = document.getElementById('cover-video');
    $('#play-stop-control').click(function(){
        if (video.paused) {
            video.play();
            $(this).html('<i class="fa fa-pause"></i>');
        } else {
            video.pause();
            $(this).html('<i class="fa fa-play"></i>');
        }
    });
</script>
<?php if ( $video_sound ) { ?>
    <script>
        $('#audio-control').click(function(){
            if( $("#cover-video").prop('muted') ) {
                $("#cover-video").prop('muted', false);
                $(this).html('<i class="fa-solid fa-volume-high"></i>');
            } else {
            $("#cover-video").prop('muted', true);
            $(this).html('<i class="fa-solid fa-volume-xmark"></i>');
            }
        });
    </script>
<?php } ?>

<script>
        // const video = document.getElementById('cover-video');

        // const checkVideoHeight = () => {
        //     const videoHeight = video.offsetHeight;
        //     const windowHeight = window.innerHeight;

        //      console.log(`Video Height: ${videoHeight}px`);
        //      console.log(`Window Height: ${windowHeight}px`);

        //     if (videoHeight < windowHeight) {
        //         console.log("prvi if");
        //         $( ".cover-content" ).css("max-height", "auto");
        //         //$ ( ".cover-content" ).addClass("video-on-cover");
        //     } else {
        //         console.log('drugi if');
        //         $ ( ".cover-content" ).css("max-height", "100vh");
        //         //$ ( ".cover-content" ).removeClass("video-on-cover");
        //     }
        // };

        // checkVideoHeight();

        // window.addEventListener('resize', checkVideoHeight);
        // window.onload = checkVideoHeight;
    </script>