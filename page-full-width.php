<?php /*Template name:Página de ancho completo*/;?>
<?php get_header();?>
<?php while(have_posts()):the_post();?>
<section>
    <?php the_title();?>
    <?php the_content();?>
</section>
<?php endwhile;?>
<?php get_footer();?>