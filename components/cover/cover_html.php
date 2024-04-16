<style>
    .cover-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter: <?php echo $customCoverBgFilter ?>;
        background-image: url('<?php echo $customCoverBgImage; ?>');
        background-position: <?php echo $customCoverBgPosition; ?>;
        background-position-y: <?php echo $customCoverBgPositionY; ?>;
        background-attachment: <?php echo $customCoverBgAttachment; ?>;
    }
    .cover-content {
        width: 100%;
        height: 100vh !important;
        background-color: <?php echo $customCoverBgColor; ?>;
        background-size: cover;
        position: relative;
        background-attachment: <?php echo $customCoverBgAttachment; ?>;
    }
</style>