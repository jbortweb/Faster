<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', 'true', 'right');?></title>
    <?php wp_head();?>
</head>
<body>

    <?php get_header('wordpress');?>
    <header class="Header">

        <div class="Logo">

            <?php 
            if (has_custom_logo()):
                the_custom_logo();
            else:
                echo '<a href="'.esc_url(home_url('/')).'">'.get_bloginfo('name').'</a>';
            endif;
            ;?>

        </div>

        <?php 
        if(has_nav_menu('main_menu')): //Si tenemos un menu de navegacion
            wp_nav_menu(array(
                'theme_location'=>'main_menu', //El lugar
                'container'=> 'nav',    //Tipo de contenedor
                'container_class'=>'Menu' //Nombre de la clase que le ponemos
            ));
        else:
        ?>
        <nav class="Menu">

            <ul>

                <?php wp_list_pages('title_li');?> <!--Menu a partir de las paginas estaticas-->
            </ul>

        </nav>
        <?php endif;?>
        

    </header>

    <main class="Main">