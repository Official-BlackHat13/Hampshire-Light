<?php 
/**
 * ACF Functions
 * 
 * @package Gravity_Solar
 * @version 1.0.0
 */

/**
 * Include ACF
 */
require_once( _THEME_DIR . '/inc/acf/acf.php' );

class Gravity_Solar_Acf_Functions {

    public function __construct(){
        $this->setup_hooks();
    }

    // add Hooks and filters
    protected function setup_hooks(){
        add_filter('acf/settings/show_admin', [$this, 'show_admin_menu' ] );
        add_filter('acf/settings/path', [$this, 'settings_path' ] );
        add_filter('acf/settings/dir', [$this, 'settings_dir' ] );
        add_action( 'after_setup_theme', [ $this, 'create_option_pages' ] );
        add_filter('wpcf7_validate_text*',[$this,'custom_validation_text_field'],10,2);
    }

    
    /**
     * Show/Hide ACF Custom Fields menu on admin area
     */
    public function show_admin_menu(){
        return true;
    }

    /**
     * Define path
     */
    public function settings_path( $path ){
        $path = _THEME_DIR . '/inc/acf/';
        return $path;
    }

    /**
     *  ACF directory
     */
    public function settings_dir( $dir ) {
        $dir = _THEME_URI . '/inc/acf/';
        return $dir;
    }

    /**
     * Create Option Pages
     */
    function create_option_pages(){
        $option_pages = [
            'global' => [ 
                'menu_title'  => 'Global Options',
                'page_title'  => 'Global Options',
                'menu_slug'   => 'global_options',
                'capability'  => 'edit_posts',
                'parent_slug' => '',
                'redirect'    => false,
                'position'    => 2
            ]
        ];

        foreach( $option_pages as $key => $pages ){
            acf_add_options_page( $pages );
        }
    }


    /**
     * Validating Your Name text field from Contact Us form
     */

    public function custom_validation_text_field($result, $tag){

            if('full-name'== $tag->name){
                $re= '/^[a-zA-Z\s]+$/';

                if (!preg_match($re, $_POST['full-name'])) {
                    $result->invalidate($tag, "This is not a valid name!" );
                }
            }

            return $result;
    }

}

new Gravity_Solar_Acf_Functions();



