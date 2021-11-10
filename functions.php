<?php

/**
 * Interia Systems functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gravitySolar
 * @version 1.0.0
 */

/**
 * Exception Handler
 */
function themeExceptionHandler($exception)
{
    themeExceptionSendEmail('Cool Worker Uncaught Exception', $exception);
}
set_exception_handler('themeExceptionHandler');
function themeExceptionSendEmail($subject, $message)
{
    $to      = array('shiva.aryal@webo.digital');
    $subject = $subject;
    $body    = $message;
    wp_mail($to, $subject, $body);
}

/**
 * Theme Dir
 */
if (!defined('_THEME_DIR')) {
    define('_THEME_DIR', untrailingslashit(get_template_directory()));
}

/**
 * Theme URI
 */
if (!defined('_THEME_URI')) {
    define('_THEME_URI', untrailingslashit(get_template_directory_uri()));
}

/**
 * Get the version number of the theme
 */
if (!defined('_THEME_VERSION')) {
    define('_THEME_VERSION', get_bloginfo('version'));
}

/**
 * Get Site url
 */
if (!defined('_SITE_URL')) {
    define('_SITE_URL', site_url());
}

add_filter('upload_mimes', 'coolworker_mime_types');
function coolworker_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mimes;
}

/**
 * Load an inline SVG.
 *
 * @param string $filename The filename of the SVG you want to load.
 * @return string The content of the SVG you want to load.
 */
function isLoadInlineSvg($filename, $upload = false)
{

    // Add the path to your SVG directory inside your theme.
    $svg_path =  _THEME_DIR . '/assets/img/' . $filename . '.svg';

    // Check the svg is uplaoded to wp media or on theme
    $svg_file = $upload ? $filename : $svg_path;


    // Check the SVG file exists
    if (file_exists($svg_file)) {

        // Load and return the contents of the file
        echo file_get_contents($svg_file);
    } else {

        // Return a blank string if we can't find the file.
        return '';
    }
}

/**
 * loading acf plugin
 */
require_once _THEME_DIR . '/inc/init.php';
require_once _THEME_DIR . '/inc/scripts.php';
require_once _THEME_DIR . '/inc/acfFunctions.php';	
require_once _THEME_DIR . '/inc/templateFunctions.php';
