<?php 

if(!function_exists('fwpt_custom_header')):

    function fwpt_custom_header(){

        //Activamos la cabecera configurable
        // Más informacion en https://developer.wordpress.org/themes/functionality/custom-headers/

            add_theme_support('custom-header', apply_filters('fwpt_custom_header_args',
            array(
                'default-image'=>get_template_directory_uri().'/img/header-image.jpg',
                'default-text-color'=>'F60',
                'width'=>1200,
                'height'=>720,
                'flex-width'=>true,
                'flex-height'=>true,
                'video'=>true,
                'wp-head-callback'=>'fwpt_wp_header_style'
            )));
    }
endif;
