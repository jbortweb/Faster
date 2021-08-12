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

if (!function_exists('fwpt_add_editor_styles')):

    function fwpt_add_editor_styles(){
        add_editor_style('https://fonts.googleapis.com/css?family=Raleway:400,700');
        add_editor_style('css/custom_properties.css');
        add_editor_style('css/custom_editor_style.css');
    }

endif;

add_action('admin_init','fwpt_add_editor_styles');


//Administrar menu de escritorio

if(!function_exists('fwpt_admin_menu')):

    function fwpt_admin_menu(){
        //remove_menu_page('edit.php');//Entradas
        //remove_menu_page('upload.php');//Multimedia
        //remove_menu_page('link-manager.php');//Enlaces
        //remove_menu_page('edit.php?post_type=page');//Paginas
        //remove_menu_page('edit-comments.php');//Comentarios
        //remove_menu_page('themes.php');//Apariencia
        //remove_menu_page('plugins.php');//Plugins
        //remove_menu_page('users.php')://Usuarios
        //remove_menu_page('tools')://Herramientas
        //remove_menu_page('options-general')://Ajustes
    }
endif;

add_action('admin_menu','fwpt_admin_menu'); 

//Administrar opciones del menu de arriba

if (!function_exists('fwpt_before_admin_bar')):

    function fwpt_before_admin_bar(){
        global $wp_admin_bar;

        /*
        search: Elimina caja de busqueda
        comments: Elimina aviso de comentarios
        updates: Elimina aviso de actualizaciones
        edit: Elimina editar entradas y páginas
        get-shortlink: Proporciona un enlace corto a esa página/entrada
        my-sites: Elimina el menu mis sitios, si utiliza la funcion multisitios de wordpress
        site-name: Elimina el nombre de la web
        wp-logo: Elimina el logo (y el submenu)
        my-account: Elimina los enlaces a su cuenta. El ID depende de si usted tiene el Avatar habilitado o no
        view-sites: Elimina el submenu que aparece al pasar el cursor sobre el nombre de la web
        about:Elimina el enlace "Sobre WordPress"
        wporg:Elimina el enlace a wordpress.org
        documentation: Elimina el enlace a la documentacion oficial (Codex)
        support:Elimina el enlace a los foros de ayuda
        feedback:Elimina el enlace sugerencias
        */

        $wp_admin_bar->remove_menu('wp-logo');
        //$wp_admin_bar->remove_menu('new-content');
        $wp_admin_bar->remove_menu('comments');        
    }
endif;

add_action('wp_before_admin_bar_render','fwpt_before_admin_bar');


//Añadir opciones menu

if (!function_exists('fwpt_admin_bar_menu')):

    function fwpt_admin_bar_menu(){
        global $wp_admin_bar;

        $wp_admin_bar->add_menu(array(
            'id' => 'mi_menu',
            'title' => __('My menu','fwpt'),
            'href' => false
        ));

        $wp_admin_bar->add_menu(array(
            'parent' => 'mi_menu',
            'id' => 'link-entrelineas',
            'title' => __('Entrelineas de codigo','fwpt'),
            'href' => __('https://tuwebentrelineas.es')
        ));

        $wp_admin_bar->add_menu(array(
            'parent' => 'mi_menu',
            'id' => 'link-twitter',
            'title' => __('Twitter','fwpt'),
            'href' => __('https://twitter.com/EntreCodigo')
        ));
    }
endif;

add_action('admin_bar_menu','fwpt_admin_bar_menu');

//Añadir caja de redes sociales en la administracion de usuarios

if(!function_exists('fwpt_user_contactmethods')):

    function fwpt_user_contactmethods(){
        $data_user['facebook']=__('Facebook');
        $data_user['twitter']=__('Twitter');

        return $data_user;
    }
endif;

add_filter('user_contactmethods','fwpt_user_contactmethods');


//Cambiar texto del footer de la administracion de wordpress

if (!function_exists('fwpt_admin_footer_text')):

    function fwpt_admin_footer_text(){
    return '<i>
    Sitio creado por
    <a href="https://tuwebentrelineas.es" target="_blank">@jbortweb</a>.
    </i>';
    }
endif;

add_filter('admin_footer_text','fwpt_admin_footer_text');

//Eliminar metaboxes del panel de escritorio

if (!function_exists('fwpt_wp_dashboard_setup')):

    function fwpt_wp_dashboard_setup(){

        //Actividad
        remove_meta_box('dashboard_activity','dashboard','normal');
        //De un vistazo
        remove_meta_box('dashboard_right_now','dashboard','normal');
        //Comentarios recientes
        remove_meta_box('dashboard_recent_comments','dashboard','normal');
        //Enlaces entrantes
        remove_meta_box('dashboard_incoming_links','dashboard','normal');
        //Plugins
        remove_meta_box('dashboard_plugins','dashboard','normal');
        //Publicacion rapida
        remove_meta_box('dashboard_quick_press','dashboard','side');
        //Borradores recientes
        remove_meta_box('dashboard_recent_drafts','dashboard','side');
        //Noticias del blog de WordPress
        remove_meta_box('dashboard_primary','dashboard','side');
        //Otras noticias de WordPress
        remove_meta_box('dashboard_secondary','dashboard','side');
    }
endif;

add_action('wp_dashboard_setup','fwpt_wp_dashboard_setup');