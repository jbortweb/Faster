<article class="Content">

    <h1>Creación de Temas</h1>

        <h2>Contenido</h2>

            <?php if(have_posts()):while(have_posts()):the_post();?> <!--Si hay contenido en entradas, cuando haya contenido, publicar contenido-->

                <p>Contenido de la entrada</p>

            <?php endwhile;else:?>

                <p>El contenido solicitado no existe</p>

            <?php endif;?>

</article>