</main>

<footer class="Footer">

<?php 
wp_nav_menu(array(
    'theme_location'=>'social_menu', //El lugar
    'container'=> 'nav',    //Tipo de contenedor
    'container_class'=>'SocialMedia' //Nombre de la clase que le ponemos
));
;?>

    <div>
        <small>&copy,<?php echo date('Y');?> by tuwebentrelineas.es</small>
    </div>

</footer>
 <?php wp_footer();?>

</body>
</html>