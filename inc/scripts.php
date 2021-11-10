<?php
function hampshire_register_styles()
{
    wp_enqueue_style('hampshire-owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('hampshire-owl-themecss', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
    wp_enqueue_style('hampshire-style', _THEME_URI . "/assets/css/style.css");
    wp_enqueue_style('hampshire-css', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'hampshire_register_styles');


function hampshire_register_scripts()
{
    wp_enqueue_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js", "3.6.0", true);
    wp_enqueue_script('owlcarousel-js', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array('jquery'), "2.3.4", true);
    wp_enqueue_script('custom-js', _THEME_URI . '/assets/js/app.js', array('jquery'), true, true);
}
add_action('wp_enqueue_scripts', 'hampshire_register_scripts');

add_theme_support('custom-logo');
