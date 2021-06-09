<article class="Content">

    <h1>Creación de Temas</h1>        

        <?php if(have_posts()):while(have_posts()):the_post();?> <!--Si hay contenido en entradas, cuando haya contenido, publicar contenido-->

            <article>

                <h2><?php the_title();?></h2>
                
            </article>
            
            <hr>

        <?php endwhile;else:?>

            <p>El contenido solicitado no existe</p>

        <?php endif;?>
        

</article>