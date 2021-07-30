<?php

//https://codex.wordpress.org/Customizing_the_Login_Form

if(!function_exists('fwpt_login_scripts')):
    function fwpt_scripts(){

        wp_register_style('google-fonts','https://fonts.googleapis.com/css?family=Raleway:400,700',array(),'1.0.0', 'all');

        wp_register_style('custom-properties', get_stylesheet_directory_uri().'/css/custom_properties.css', array(),'1.0.0', 'all');

        wp_register_style('login-page-style', get_stylesheet_directory_uri().'/css/login_page.css', array('google-fonts','custom-propeties'),'1.0.0', 'all');


        wp_register_script('login-page-script', get_template_directory_uri().'/js/login_page.js',array('jquery'),'1.0.0',true); /* Nombre que le damos al script, ubicacion y nombre del archivo, jquery, version, true para que se ejecute en el footer y no en el head*/

        wp_enqueue_style('google-fonts'); /*Nombre con el que registramos la accion*/
        wp_enqueue_style('custom-properties');
        wp_enqueue_style('login-page-style');
        wp_enqueue_script('login-page-script'); 
        wp_enqueue_script('jquery'); /*jQuery viene registrado en wordpress*/
    }
    
endif;

    add_action('login_enqueue_scripts',"fwpt_login_scripts");