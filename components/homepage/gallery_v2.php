<div id="gallery-v2">
    <?php if ( !empty($gallery_section_title) ) { ?>
        <h2 class="title-h1 text-center">Gallery</h2>
    <?php } ?>
    <div class="container-fluid">
    <div id="content" class="row"></div>
    </div>
</div>


<script>
  $(document).ready(function() {
    var data = <?php echo json_encode($gallery_array); ?>;
    data.forEach(function(item) {
        var html = '<div class="col-md-6 col-lg-4 col-xs-12 item nopadding"> \
                  <a href="custom/gallery/' + item.img + '" data-lightbox="gallery" data-title="' + item.alt + '"> \
                    <div class="overflow"> \
                      <div class="content-art"> \
                        <h3>' + item.alt + '</h3> \
                      </div> \
                      <img style="width:100%;" src="custom/gallery/' + item.img + '" alt="' + item.alt + '" class="img-responsive"/> \
                    </div> \
                  </a> \
                </div>';
    $('#content').append(html);
    });

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });

  });
</script>