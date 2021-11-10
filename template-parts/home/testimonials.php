<?php

    $image = $args['image'];

    $testimonials_args = array(
        'post_type' => 'testimonials',
        'post_status' => 'publish',
        'order' => 'DESC',
    );

$testimonials = new WP_Query($testimonials_args);

?>


    <!-- TESTIMONIAL SECTION STARTS -->
    <section class="testimonial--section" id="testimonial-section">
        <div class="testimonial--bg">
            <img src="<?php echo $image['url']; ?>" alt="">
        </div>
        <div class="container">
            <div class="testimonial--box">
                <div class="sliderbox">
                    <div class="testimonial--slider owl-carousel owl-theme" id="testimonial--slider">
                        <?php 
                        if ($testimonials->have_posts()) {
                            while ($testimonials->have_posts()):
                                    $testimonials->the_post();


                        ?>
                            <div class="testimonial--item">
                                <div class="testimonial--icon">
                                    <img src="<?php echo _THEME_URI; ?>/assets/img/icons/icon--quotes.png" alt="">
                                </div>
                                <div class="testimonial--text">
                                    <p><?php the_content(); ?></p>
                                    <span><?php the_title(); ?></span>
                                </div>
                            </div>
                        <?php 
                            endwhile;
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION ENDS -->