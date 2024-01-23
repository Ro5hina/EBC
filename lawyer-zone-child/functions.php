<?php
/**
 * Lawyer Zone functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */

 function sf_child_theme_dequeue_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css',"",time());
    wp_enqueue_style( 'wpb-google-fonts', '//fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700;800&display=swap', false );
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/wow.js',"",time());
    wp_enqueue_script( 'script', get_stylesheet_directory_uri().'/script.js',array("jquery"),time());
}

add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style');

add_action('admin_footer','paste_following_css');

function paste_following_css(){
    if(is_admin()){
        ?>
        <style>
            .so-switch-to-standard{
                display:none;
            }            
        </style>
        <?php
    }
}