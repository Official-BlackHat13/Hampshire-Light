<?php
	$professional = $args['professional'];
	$features = $args['features'];
?>

 <!-- ABOUT SECTION STARTS -->
    <section class="about--section" id="about-section">
        <div class="container">
            <div class="about--box">
            	<?php if($professional){ ?>
                <div class="about--journey">

                    <ul>
                    	<?php foreach($professional['certificates'] as $certificate ): ?>
                        <li>
                            <figure><img src="<?php echo $certificate['image']['url']; ?>" alt=""></figure>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="title">
                        <h2><?php echo $professional['title']; ?></h2>
                    </div>
                </div>
            	<?php 
            		}
            		if($features)
            		{ 

            	?>

                <div class="about--detail">
                	<?php foreach($features as $feature):  ?>
                    <div class="about--item">
                        <div class="title">
                            <h6><?php echo $feature['title']; ?></h6>
                        </div>
                        <div class="text">
                            <p><?php echo $feature['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION ENDS -->