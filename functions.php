<?php
/**
 * Faster WP Theme functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basic/theme-functions/
 * 
 * @package WordPress
 * @subpackage fwpt
 * @since 1.0.0
 * @version 3.0
 */

if(!function_exists('fwpt_scripts')):
    function fwpt_scripts(){

        wp_register_style('google-fonts','https://fonts.googleapis.com/css?family=Raleway:400,700',array(),'1.0.0', 'all');

        wp_register_style('style', get_stylesheet_uri(), array('google-fonts'),'1.0.0', 'all');

        wp_register_script('scripts', get_template_directory_uri().'/script.js',array('jquery'),'1.0.0',true); /* Nombre que le damos al script, ubicacion y nombre del archivo, jquery, version, true para que se ejecute en el footer y no en el head*/

        wp_enqueue_style('google-fonts'); /*Nombre con el que registramos la accion*/
        wp_enqueue_style('style');
        wp_enqueue_script('scripts'); 
        wp_enqueue_script('jquery'); /*jQuery viene registrado en wordpress*/
    }
    
endif;

    add_action('wp_enqueue_scripts',"fwpt_scripts");


if(!function_exists('fwpt_setup')):

    function fwpt_setup(){ //https://developer.wordpress.org/reference/functions/add_theme_support/

    //Activar distintos idiomas
        //Recursos
            //https://developer.wordpress.org/themes/functionality/internationalization/
            //https:make.wordpress.org/polyglots/handbook/
        //Herramientas
            //https://www.icanlocalize.com/tools/php_scanner
            //https://poedit.net/
    
    //imagen destacada de la entrada
    add_theme_support('post-thumbnails');

    add_theme_support('html5',array(
    'comment-list',
    'comment-form',
    'search-form',
    'gallery',
    'caption'
    ));

    //Logo personalizado
    add_theme_support('custom-logo',array(
        'height'=>100,
        'width' =>100,
        'flex-height' =>true,
        'flex-width'  =>true
    ));

    add_theme_support('custom-background',array(
        'default-color'=>'DDD',
        'default-image'=>get_template_directory_uri().
        '/img/background-image.png',
        'default-repeat'=>'repeat',
        'default-position-x'=>'',
        'default-position-y'=>'',
        'default-size'=>'',
        'default-attachment'=>'fixed'
    ));

    //Activa la actualización de widget en el personalizador
    add_theme_support('customize-selective-refresh-widgets');
    }

endif;

    add_action('after_setup_theme','fwpt_setup');


if(!function_exists('fwpt_menus')):    //Activamos menus
    function fwpt_menus(){

     register_nav_menus(array(
         'main_menu' =>__('Menú Principal', 'fwpt'),  //Añadimos los menus que querramos en el array
         'social_menu' =>__('Menú Redes Sociales','fwpt')  //Primer parametro el nombre, segundo parametro es para las traducciones, se pone el nombre que se ha puesto en el text Domain del style.css
     ));
    }

endif;

    add_action('init','fwpt_menus'); // Añadimos menus creados al cargar la pagina


if(!function_exists('fwpt_register_sidebars')):    //Activamos widgets
    function fwpt_register_sidebars(){

    register_sidebar (array(
        'name' =>__('Sidebar Principal','fwpt'),  //Añadimos los widgets que querramos en el array
        'id' =>'main_sidebar',
        'description' =>__('Este es el sidebar principal','fwpt'),
        'before_widget'=>'<article id="%1$s" class="Widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar (array(
        'name' =>__('Sidebar Pié de Página','fwpt'),
        'id' =>'footer_sidebar',
        'description' =>__('Este es el sidebar del pié de página','fwpt'),
        'before_widget'=>'<article id="%1$s" class="Widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    }

endif;

    add_action('widgets_init','fwpt_register_sidebars'); // Añadimos widgets creados al cargar la pagina

    require_once get_template_directory().
    '/inc/custom-header.php';

    require_once get_template_directory().
    '/inc/customizer.php';

    require_once get_template_directory().
    '/inc/custom-login.php';

    require_once get_template_directory().
    '/inc/custom-admin.php';
    
    require_once get_template_directory().
    '/inc/custom-post-types.php';
    
    require_once get_template_directory().
    '/inc/custom-taxonomies.php';

    require_once get_template_directory().
    '/inc/custom-metaboxes.php';

    require_once get_template_directory().
    '/inc/custom-pre-get-posts.php';

    require_once get_template_directory().
    '/inc/custom-theme-options.php';
    