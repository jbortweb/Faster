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

        wp_register_script('scripts', get_template_directory_uri().'/script.js',array('jquery'),'1.0.0',true); /* Nombre que le damos al script, ubicacion y nombre del archivo, jquery, version, true para que se ejecute en el footer y no en el head*/

        wp_enqueue_style('google-fonts'); /*Nombre con el que registramos la accion*/
        wp_enqueue_style('style');
        wp_enqueue_script('scripts'); 
        wp_enqueue_script('jquery');

    }
    
endif;

add_action('wp_enqueue_scripts',"fwpt_scripts");