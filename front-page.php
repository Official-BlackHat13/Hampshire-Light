<?php
get_header();

$homepage = get_field('homepage');
if ($homepage) {
    foreach ($homepage as $section) {
        switch ($section['acf_fc_layout']) {
            case 'banner':
                get_template_part(
                    'template-parts/home/banner',
                    NULL,
                    $section
                );
                break;

            case 'about':
                get_template_part(
                    'template-parts/home/about',
                    NULL,
                    $section
                );
                break;

            case 'services':
                get_template_part(
                    'template-parts/home/services',
                    NULL,
                    $section
                );
                break;

            case 'brands':
                get_template_part(
                    'template-parts/home/brands',
                    NULL,
                    $section
                );
                break;

            case 'display':
                get_template_part(
                    'template-parts/home/display',
                    NULL,
                    $section
                );
                break;

            case 'testimonials':
                get_template_part(
                    'template-parts/home/testimonials',
                    NULL,
                    $section
                );
                break;

            case 'faqs':
                get_template_part(
                    'template-parts/home/faqs',
                    NULL,
                    $section
                );
                break;

            case 'contact':
                get_template_part(
                    'template-parts/home/contact',
                    NULL,
                    $section
                );
                break;

            default:
                break;
        }
    }
}

get_template_part('template-parts/book', 'now');

get_footer();
