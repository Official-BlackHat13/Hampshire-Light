
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hampshire Light</title>
    <?php wp_head(); ?>
</head>

<body>

<?php
	$logo = get_field('logo', 'option');
?>

    <!-- HEADER SECTION STARTS -->
    <header class="header--section">
        <div class="container">
            <div class="header--box">
                <div class="header--logo">
                    <a href="<?php echo _SITE_URL; ?>" class="main--logo" title="Hampshire Light">
                        <figure><img src="<?php echo $logo['url']; ?>" alt=""></figure>
                    </a>
                    <a href="/" title="Hampshire Light" class="scroll--header">
                        <figure><img src="<?php echo getSmallLogoUrl(); ?>" alt=""></figure>
                    </a>
                </div>
                <nav class="header--nav">
                    <div class="header--nav-list" id="navList">
                        <?php
                        	wp_nav_menu( array(
							    'menu'   => 'top-menu',
							    'container' => 'ul',
							) );
                        ?>
                    </div>
                </nav>
                <div class="header--itembox">
                    <div class="header--contact">
                        <a href="tel:<?php echo getPhoneNumber(); ?>" title="Call Now">
                            <div class="header--contact-icon">
                                <img src="<?php echo _THEME_URI; ?>/assets/img/icons/icon--phone.svg" alt="">
                            </div>
                            <div class="header--contact-text">
                                <span><?php echo getPhoneNumber(); ?></span>
                            </div>
                        </a>
                    </div>
                    <div class="header--btn scroll--header">
                        <a href="#contact-section" class="btn btn--yellow" title="Get In Touch">Get In Touch</a>
                    </div>
                    <div class="header--nav-bar">
                        <div class="nav--bar" id="navBar">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION ENDS -->