</main>

<footer class="Footer">

<?php 

wp_nav_menu(array(
    'theme_location'=>'social_menu', //El lugar
    'container'=> 'nav',    //Tipo de contenedor
    'container_class'=>'SocialMedia' //Nombre de la clase que le ponemos
));
;?>
<?php 
    if (is_active_sidebar('footer_sidebar')):
    dynamic_sidebar('footer_sidebar');
    else:
    ?>
    <li class="Widget">
        <h3><?php _e('Buscar','fwpt');?></h3>
        <?php get_search_form();?>
    </li>
    <?php endif;?>

    <div>
        <p>
            <small>
            <?php if(get_option('fwpt_footer_text')!==''):
                echo esc_html(get_option('fwpt_footer_text'));
            else:
            ?>
            
            &copy,<?php echo date('Y');?> by tuwebentrelineas.es

            <?php 
                endif;
            ?>
            </small>
        </p>
    </div>

</footer>

 <?php wp_footer();?>

</body>
</html>