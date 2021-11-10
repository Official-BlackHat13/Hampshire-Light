<?php
// Get the taxonomy's terms
$faqs_categories = get_terms(
    array(
        'taxonomy'   => 'faqs-category',
        'hide_empty' => false,
        'order'      => 'DESC'
    )
);

$hampshire_faqs = array(
    'post_type' => 'faqs',
    'post_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => -1,
);

$faqs = new WP_Query($hampshire_faqs);
?>


<!-- FAQ SECTION STARTS -->
<section class="faq--section" id="faqs-section">
    <div class="container">
        <div class="faq--box">
            <div class="faq--textbox">
                <div class="section--box">
                    <div class="section--title">
                        <div class="main--title title--line">
                            <h2><?php echo $args['title']; ?></h2>
                        </div>
                    </div>
                    <div class="section--text">
                        <p><?php echo $args['description']; ?></p>
                    </div>
                </div>
                <div class="faq--list">
                    <ul id="faq--links">

                        <?php

                        if ($faqs_categories) :
                            foreach ($faqs_categories as $key => $faqs_category) : ?>
                                <li>
                                    <a href="#faq" data-filter="<?php echo $faqs_category->slug; ?>" <?php if ($key == 0) : echo 'class="is--active"';
                                                                                                    endif; ?>><?php echo $faqs_category->name; ?></a>
                                </li>

                        <?php
                            endforeach;
                        endif;

                        ?>

                    </ul>


                </div>
                <div class="faq--note">
                    Can't find your question? <a href="#contact-section" class="col--yellow" title="">Ask Us Directly Here</a>
                </div>
            </div>
            <div class="faq--detailbox">
                <div class="faq--databox" id="faq--detailbox">
                    <?php while ($faqs->have_posts()) :
                    $faqs->the_post();
                    $faqCats = get_the_terms(get_the_ID(), 'faqs-category');

                    $faqCategories = [];

                    foreach ($faqCats as $key => $faqCat) {
                    $faqCategories[$key] = $faqCat->slug;
                    }
                    $faqCategories = implode(' ', $faqCategories);


                    ?>
                    <div class="faq--item " data-category="<?php echo $faqCategories; ?>">
                            <div class="title">
                                <h6><?php the_title(); ?></h6>
                            </div>
                            <div class="text">
                                <p> <?php the_content(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ SECTION ENDS -->