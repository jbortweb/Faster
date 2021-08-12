<?php 
function custom_taxonomy(){

    $labels = array(
        'name'=>_x('Taxonomias','Taxonomy General Name','fwpt'),
        'singular_name'=>_x('Taxonomy','Taxonomy Singular Name','fwpt'),
        'menu_name'=>__('Taxonomias','fwpt'),
        'parent_item_colon'=>__('Parent item','fwpt'),
        'all_items'=>__('All items','fwpt'),
        'add_new_item'=>__('Add New item','fwpt'),
        'new_item_name'=>__('New item Name','fwpt'),
        'edit_item'=>__('Edit item','fwpt'),
        'update_item'=>__('Update item','fwpt'),
        'view_items'=>__('View item','fwpt'),
        'separate_items_with_commas'=>__('Separate items with commas','fwpt'),
        'add_or_remove_items'=>__('Add or remove items','fwpt'),
        'choose_from_most_used'=>__('Choose from the most used','fwpt'),
        'popular_items'=>__('Popular items','fwpt'),
        'search_items'=>__('Search items','fwpt'),
        'not_found'=>__('Not found','fwpt'),
        'no_terms'=>__('No items','fwpt'),
	    'items_list' => __( 'Item list', 'fwpt' ),
	    'items_list_navigation' => __( 'Item list navigation', 'fwpt' )

        
    );
    $args = array(
        'labels'=> $labels,
        //hierarchical true se comporta como categoria, false se comporta como etiqueta
        'hierarchical'=> false,
        'public'=> true,
        'show_ui'=> true,
        'show_in_admin_column'=> true,
        'show_in_nav_menus'=> true,
        'show_tagcloud'=> true,
    );
    register_taxonomy('a_taxonomy',array('a_post_type'),$args);
}

add_action('init','custom_taxonomy',0);
;?>