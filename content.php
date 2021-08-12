<article class="Content">
    
        <!--Loop o contenido, en este caso para entradas -->

        <?php

        //query_posts(null); --Anula el query post, pero lo tenemos activado
        
        if(have_posts()):
        while(have_posts()):
        the_post();?> <!--Si hay contenido en entradas (have_post), cuando haya contenido, publicar contenido-->

            <article>

               <!-- <h2><?php //the_title();?></h2> --> <!--Funcion que llama al titulo y lo imprime directamente-->
                
                <?php 
                
                // $titulo= 'Titulo: '.get_the_title();
                // echo $titulo;   
                    //En esta opcion colocamos y concatenamos cadena de texto

                    //Otras opciones serian:

                //echo get_the_title(); Si el objeto no esta definido en wordpress lo imprimimos a traves de echo

                //the_title('After','Before',echo); Antes del titulo, despues y echo si fuera necesario. Un ejemplo añadiendo clases seria asi:('<h3 class="TitlePost">','</h3>',echo);
                ?>

                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">

                <br>

                <h2>
                    <a href="<?php the_permalink();?>"><?php the_title();?></a> <!-- Enlace permanente -->
                    
                </h2>            


                <?php the_excerpt();?>  <!--Muestra el extracto del articulo -->

                <p><?php the_category(', ');?></p>  <!--  Las categorias, separadas por comas, si no le pasas parametros, te hace una lista, ver documentacion para ver más parametros  --> 

                <p><?php the_tags();?></p>  <!--Las etiquetas-->

                <p> <?php the_time(get_option('date_format'));?></p> <!--Fecha con el formato elegido en los ajustes de wordpress -->

                <p><?php the_author_posts_link();?></p>

                <!--Añadimos metadatos-->
                <div>
                    <h3>Custom Fields</h3> 
                    <?php the_meta();?>
                    <p><?php echo get_post_meta(get_the_ID(),'Origen',true);?>
                    </p>  
                    <p><?php echo get_post_meta(get_the_ID(),'Actividad',true);?>
                    </p>
                    <p><?php echo get_post_meta(get_the_ID(),'mb_origen_raza',true);?>
                    </p>
                    <p><?php echo get_post_meta(get_the_ID(),'mb_esperanza_vida',true);?>
                    </p>
                </div>
            
            </article>
 
            <hr>

        <?php endwhile;else:?>

            <p>El contenido solicitado no existe</p>

        <?php endif; wp_reset_postdata();
        wp_reset_query();
        ?>
        
</article>

<section class="Pagination Other">
    
    <?php //previous_post_link();?> 
    <?php //next_post_link();?> <!--Flechas de paginacion-->

    <?php echo paginate_links();?> <!--Numeracion de las paginas-->

</section>
