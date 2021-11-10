<?php
	$bookNow = get_field('book_now', 'option');
?>
<!-- DETAIL SECTION STARTS -->
<section class="detail--section">
    <div class="detail--watermark"><img src="https://webo.dev/hampshire-light/wp-content/themes/hampshire/assets/img/banner--watermark.png" alt=""></div>
    <div class="container">
        <div class="detail--box">
            <div class="detail--icon">
                <img src="<?php echo getSmallLogoUrl(); ?>" alt="">
            </div>
            <div class="section--title">
                <div class="main--title">
                    <h2><?php echo $bookNow['title']; ?></h2>
                </div>
                <p><?php echo $bookNow['description']; ?></p>
            </div>
            <?php
            	$button = $bookNow['button'];
            	if($button):
            ?>
            <div class="btn--holder">
                <a href="<?php echo $button['url']; ?>" title="<?php echo $button['title']; ?>" class="btn"><?php echo $button['title']; ?></a>
            </div>
            <?php
            	endif;
            ?>
        </div>
    </div>
</section>
<!-- DETAIL SECTION ENDS -->