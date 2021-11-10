<?php
$header = $args['header'];
$title = $args['title'];
$description = $args['description'];

// $title_fields = $args['title_field'];
$image_fields = $args['image_field'];


$services_args = array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'order' => 'ASC',
);

$services = new WP_Query($services_args);

?>



<!-- SERVICE SECTION STARTS -->
<section class="service--section" id="service-section">
    <div class="container">
        <div class="service--box">
            <div class="service--detailbox">
                <div class="section--box">
                    <div class="section--title">
                        <div class="sub--title">
                            <span><?php echo $header; ?></span>
                        </div>
                        <div class="main--title">
                            <h2><?php echo $title; ?></h2>
                        </div>
                    </div>
                    <div class="section--text">
                        <p><?php echo $description; ?></p>
                    </div>
                </div>
            </div>

            <?php
            // foreach($image_fields as $image_field):

            //     echo "<pre>";
            //     echo print_r($image_field);
            //     echo "</pre>";

            // endforeach;
            ?>

            <div class="service--databox">
                <div class="sliderbox">
                    <div class="service--slider owl-theme owl-carousel" id="service--slider">
                        <?php
                        if ($services->have_posts()) {
                            while ($services->have_posts()) :
                                $services->the_post();
                        ?>
                            <div class="service--img" data-dot="<button class='service--list'><?php the_title(); ?></button>">
                                <figure><img src="<?php the_post_thumbnail_url(); ?>" alt=""></figure>
                            </div>
                        <?php
                            endwhile;
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SERVICE SECTION ENDS -->