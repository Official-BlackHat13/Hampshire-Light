<?php

add_action('after_setup_theme', 'hampshire_setup_theme');
function hampshire_setup_theme()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

register_nav_menus(
    array('primary-menu' => 'Top Menu')
);


/**
 *******************************************Creating Custom Post type for FAQ
 **/

function hampshire_custom_post_faq()
{

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('FAQs', 'plural'),
        'singular_name' => _x('FAQs', 'singular'),
        'menu_name' => _x('FAQs', 'admin menu'),
        'name_admin_bar' => _x('FAQs', 'admin bar'),
        'add_new' => _x('Add New FAQs', 'add new'),
        'add_new_item' => __('Add New FAQs'),
        'new_item' => __('New FAQs'),
        'edit_item' => __('Edit FAQs'),
        'view_item' => __('View FAQs'),
        'all_items' => __('All FAQs'),
        'search_items' => __('Search FAQs'),
        'not_found' => __('Not found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'description' => 'All the frequently asked questions',
        'public' => true,
        'taxonomies' => array( 'FAQs-category'),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'faqs'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-megaphone',
    );

    register_post_type('faqs', $args); // Register Post type
}

//Init Hook for the custom post type faq

add_action('init', 'hampshire_custom_post_faq');



/**
 ****Creating Custom Taxonomy for Custom Post FAQs
 **/


function hampshire_custom_taxonomy_faqs()
{

    $labels = array(
        'name' => _x('FAQs Category', 'taxonomy general name'),
        'singular_name' => _x('FAQs Category', 'taxonomy singular name'),
        'search_items' =>  __('FAQs Category'),
        'all_items' => __('All FAQs Category'),
        'parent_item' => __('Parent FAQs Category'),
        'parent_item_colon' => __('Parent FAQs Category:'),
        'edit_item' => __('Edit FAQ Category'),
        'update_item' => __('Update FAQ Category'),
        'add_new_item' => __('Add New FAQs Category'),
        'new_item_name' => __('New FAQs Category Name'),
        'menu_name' => __('FAQs Category'),
    );

    // Now register the taxonomy
    register_taxonomy('faqs-category', 'faqs', array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'faqs-category'),
    ));
}

add_action('init', 'hampshire_custom_taxonomy_faqs');






/**
 ****************************************Creating Custom Post type for Services
 **/
function hampshire_custom_post_services()
{

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('Services', 'plural'),
        'singular_name' => _x('Service', 'singular'),
        'menu_name' => _x('Services', 'admin menu'),
        'name_admin_bar' => _x('Services', 'admin bar'),
        'add_new' => _x('Add New Service', 'add new'),
        'add_new_item' => __('Add New Service'),
        'new_item' => __('New Service'),
        'edit_item' => __('Edit Service'),
        'view_item' => __('View Services'),
        'all_items' => __('All Services'),
        'search_items' => __('Search Services'),
        'not_found' => __('Not found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'description' => 'Our Services',
        'public' => true,
        'taxonomies' => array('services-category'),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-products',
    );

    register_post_type('services', $args); // Register Post type
}

//Init Hook for the custom post type

add_action('init', 'hampshire_custom_post_services');



/**
 ****Creating Custom Taxonomy for Custom Post Services
 **/


function hampshire_custom_taxonomy_services()
{

    $labels = array(
        'name' => _x('Services Category', 'taxonomy general name'),
        'singular_name' => _x('Services Category', 'taxonomy singular name'),
        'search_items' =>  __('Search Services Category'),
        'all_items' => __('All Services Category'),
        'parent_item' => __('Parent Services Category'),
        'parent_item_colon' => __('Parent Services Category:'),
        'edit_item' => __('Edit Service Category'),
        'update_item' => __('Update Service Category'),
        'add_new_item' => __('Add New Service Category'),
        'new_item_name' => __('New Service Category Name'),
        'menu_name' => __('Services Category'),
    );

    // Now register the taxonomy
    register_taxonomy('services-category', 'services', array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'services-category'),
    ));
}

add_action('init', 'hampshire_custom_taxonomy_services');








/**
 *****************************************Creating Custom Post type for Testimonial
 **/
function hampshire_custom_post_testimonial()
{

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('Testimonials', 'plural'),
        'singular_name' => _x('Testimonial', 'singular'),
        'menu_name' => _x('Testimonials', 'admin menu'),
        'name_admin_bar' => _x('Testimonials', 'admin bar'),
        'add_new' => _x('Add New Testimonial', 'add new'),
        'add_new_item' => __('Add New Testimonial'),
        'new_item' => __('New Testimonial'),
        'edit_item' => __('Edit Testimonial'),
        'view_item' => __('View Testimonials'),
        'all_items' => __('All Testimonials'),
        'search_items' => __('Search Testimonials'),
        'not_found' => __('Testimonial Not found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'description' => 'All the testimonials',
        'public' => true,
        // 'taxonomies' => array( '' ),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'testimonials'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 8,
        'menu_icon' => 'dashicons-testimonial',
    );

    register_post_type('testimonials', $args); // Register Post type
}

//Init Hook for the custom post type

add_action('init', 'hampshire_custom_post_testimonial');
