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
        <small>&copy,<?php echo date('Y');?> by tuwebentrelineas.es</small>
    </div>

</footer>

 <?php wp_footer();?>

</body>
</html>