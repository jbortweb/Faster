<?php 
//Ver los custom types creados en el loop
if(!function_exists('fwpt_show_post_types_in_loop')):
    function fwpt_show_post_types_in_loop($query){    
    //Que no sea el admin y sea el query principal
    if(!is_admin()&& $query->is_main_query()):
        $query->set('post_type', array('post','page','consejos','mascotas'));
    endif;
}
endif;

add_action('pre_get_posts','fwpt_show_post_types_in_loop')
;?>