<?php
/**
 * Faster WP Theme functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basic/theme-functions/
 * 
 * @package WordPress
 * @subpackage fwpt
 * @since 1.0.0
 * @version 1.0.0
 */

if(!function_exists('fwpt_scripts')):
    function fwpt_scripts(){

        wp_register_style('google-fonts','https://fonts.googleapis.com/css?family=Raleway:400,700',array(),'1.0.0', 'all');

        wp_register_style('style', get_stylesheet_uri(), array('google-fonts'),'1.0.0', 'all');

        wp_enqueue_style('google-fonts');
        wp_enqueue_style('style');
    }
    
endif;

add_action('wp_enqueue_scripts',"fwpt_scripts");