<?php
get_header();
if(is_home()){
    echo'<mark>Estoy en el home</mark>';
}else if(is_category()){
    echo'<mark>Estoy mostrando los resultados de las categorias</mark>';
}else if(is_category('Pequenos')){
    echo'<mark>Estoy mostrando la categoria pequeños</mark>';
}else if(is_tag()){
    echo'<mark>Estoy mostrando los resultados de las etiquetas</mark>';
}else if(is_page()){
    echo'<mark>Estoy mostrando los resultados de la página</mark>';
}else if(is_single()){
    echo'<mark>Estoy mostrando los resultados de una entrada</mark>';
}else if(is_search()){
    echo'<mark>Estoy mostrando los resultados de una busqueda</mark>';
}else if(is_author()){
    echo'<mark>Estoy mostrando los resultados del autor</mark>';
}else if(is_404()){
    echo'<mark>Estoy mostrando la página 404</mark>';
}
get_template_part('content');
get_sidebar();
get_footer();
