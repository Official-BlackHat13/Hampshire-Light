<?php
	$brochure = get_field('brochure_cta', 'option');
?>
<!-- DISPLAY SECTION STARTS -->
<section class="display--section">
    <div class="container">
        <div class="display--box">
            <div class="display--img">
                <img src="<?php echo $brochure['image']['url']; ?>" alt="">
            </div>
            <div class="display--text">
                <div class="title">
                    <h4><?php echo $brochure['title']; ?></h4>
                </div>
                <div class="text">
                    <p><?php echo $brochure['description']; ?></p>
                </div>
            </div>
            <div class="btn--holder">
                <a href="<?php echo $brochure['file']['url']; ?>" class="btn" title="Download Now" download>Download Now</a>
            </div>
        </div>
    </div>
</section>
<!-- DISPLAY SECTION ENDS -->