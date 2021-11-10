<?php 
$title = $args['title'];
$description = $args['description'];
$background_image = $args['background_image'];
?>


<!-- BANNER SECTION STARTS -->
    <section class="banner--section">
        <div class="banner--bg"><img src="<?php echo $background_image['url']; ?>"alt=""></div>
        <div class="container">
            <div class="banner--box">
                <div class="banner--text">
                    <div class="title">
                        <h1><?php echo $title; ?></h1>
                    </div>
                    <div class="text">
                        <p><?php echo $description; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION ENDS -->