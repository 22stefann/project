
<div class="video-btn-cover">
    <video poster="<?php if ( !empty($video_poster) ) { echo $video_poster; } ?>" id="cover-video" width="100%" height="" autoplay muted loop>
        <source src="<?php if ( !empty($video_url) ) { echo $video_url; } ?>" type="video/mp4">
        <source src="<?php if ( !empty($video_url) ) { echo $video_url; } ?>" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</div>
    <div id="play-stop-control"><i class="fa fa-pause" aria-hidden="true"></i><span class="no-view-text">button for play stop video</span></i></div>
    <script>
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
<?php if ( !empty($video_sound) && $video_sound ) { ?>
    <div id="audio-control" class="muted"><i class="fa-solid fa-volume-xmark"><span class="no-view-text">button for mute unmute video</span></i></div>
<?php } ?>
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
        const video = document.getElementById('cover-video');

        const checkVideoHeight = () => {
            const videoHeight = video.offsetHeight;
            const windowHeight = window.innerHeight;

             //console.log(videoHeight);
             //console.log(`Window Height: ${windowHeight}px`);

            if (videoHeight < windowHeight) {
                //console.log(videoHeight);
                $ ( ".cover-content" ).css("height", "auto");
                $ ( ".cover-content" ).addClass("video-on-cover");
            } else {
                //console.log('Video is equal or larger than the viewport height.');
                $ ( ".cover-content" ).css("max-height", "100vh");
                $ ( ".cover-content" ).removeClass("video-on-cover");
            }
        };

        checkVideoHeight();

        window.addEventListener('resize', checkVideoHeight);
    </script>