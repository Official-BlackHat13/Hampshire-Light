<?php
$background_image = $args['background_image'];
$title           = $args['title'];
$description     = $args['description'];
$name           = $args['name'];
$designation    = $args['designation'];
$person_image   = $args['person_image'];
?>
<!-- CONTACT SECTION STARTS -->
<section class="contact--section" style="background: url(<?php echo $background_image['url']; ?>) center center no-repeat; background-size: cover;" id="contact-section">
    <div class="container">
        <div class="contact--box">
            <div class="contact--textbox">
                <div class="section--box">
                    <div class="section--title">
                        <div class="main--title">
                            <h2 class="col--white"><?php echo $title; ?></h2>
                        </div>
                    </div>
                    <div class="section--text">
                        <p class="col--white"><?php echo $description; ?></p>
                    </div>
                </div>
                <div class="contact--imgbox">
                    <div class="contact--img"><img src="<?php echo $person_image['url']; ?>" alt=""></div>
                    <div class="contact--imgtext">
                        <div class="text">
                            <div class="name"><?php echo $name; ?></div>
                            <span><?php echo $designation; ?></span>
                        </div>
                    </div>
                </div>
                <div class="contact--call">
                    <a href="#" title="Call Now">
                        <div class="img"><img src="https://webo.dev/hampshire-light/wp-content/themes/hampshire/assets/img/icons/icon--phone.svg" alt=""></div>
                        <div class="text">Or call us now at <span><?php echo getPhoneNumber(); ?></span></div>
                    </a>
                </div>
            </div>
            <div class="contact--formbox">
                <?php echo do_shortcode('[contact-form-7 id="121" title="Contact form 1" ]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT SECTION ENDS -->