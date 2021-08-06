<?php

//https://codex.wordpress.org/Dashboard_Widgets_API
//https://codex.wordpress.org/Plugin_API/admin_Screen_Reference
//https://codex.wordpress.org/Administration_Screens
//https://codex.wordpress.org/Adding_Administration_Menus

if(!function_exists('fwpt_admin_scripts')):
    function fwpt_admin_scripts(){

        wp_register_style('custom-properties', get_stylesheet_directory_uri().'/css/custom_properties.css', array(),'1.0.0', 'all');

        wp_register_style('admin-page-style', get_stylesheet_directory_uri().'/css/admin_page.css', array(),'1.0.0', 'all');


        wp_register_script('admin-page-script', get_template_directory_uri().'/js/admin_page.js',array('jquery'),'1.0.0',true); 

        
        wp_enqueue_style('custom-properties');
        wp_enqueue_style('admin-page-style');
        wp_enqueue_script('admin-page-script'); 
        wp_enqueue_script('jquery');
    }
    
endif;

    add_action('admin_enqueue_scripts',"fwpt_admin_scripts");

//Añadimos los mismos estilos de escritura del thema al editor de wordpress

