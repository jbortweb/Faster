<?php 
function custom_post_type(){

    $labels = array(
        'name'=>_x('Post Types','Post type General Name','fwpt'),
        'singular_name'=>_x('Post Type','Post type Singular Name','fwpt'),
        'menu_name'=>__('Post Types','fwpt'),
        'name_admin_bar'=>__('Post Type','fwpt'),
        'archives'=>__('item Archives','fwpt'),
        'parent_item_colon'=>__('Parent item','fwpt'),
        'all_items'=>__('All items','fwpt'),
        'add_new_item'=>__('Add New item','fwpt'),
        'new_item'=>__('New item','fwpt'),
        'edit_item'=>__('Edit item','fwpt'),
        'update_item'=>__('Update item','fwpt'),
        'view_items'=>__('View items','fwpt'),
        'search_items'=>__('Search items','fwpt'),
        'not_found'=>__('Not found','fwpt'),
        'not_found_in_trash'=>__('Not found in Trash','fwpt'),
        'featured_image'=>__('Featured image','fwpt'),
        'remove_featured_image' => __( 'Remove featured image', 'fwpt' ),
	    'use_featured_image'=> __( 'Use featured image', 'fwpt' ),
	    'insert_into_item'=> __( 'Insert into item', 'fwpt' ),
	    'uploaded_to_this_item' => __( 'Uploaded to this item', 'fwpt' ),
	    'items_list' => __( 'Item list', 'fwpt' )

        
    );
    $args = array(
        'label'=>__('Post Type','fwpt'),
        'description'=>__('Post Type Description','fwpt'),
        'labels'=> $labels,
        //Las taxonomias que soportara
        'taxonomies'=>array('category','post_tag'),
        'supports'=>array('title','editor','excerpt','author','thumbnail','comments','revisions','custom-fields'),
        //hierarchical true se comporta como pagina, false se comporta como entrada
        'hierarchical'=> false,
        'public'=> true,
        'show_ui'=> true,
        'show_in_menu'=> true,
        'menu_position'=> 5,
        //El icono que tendra https://developer.wordpress.org/resource/dashicons
        'menu_icon'=>'dashicons-welcome-view-site',
        'show_in_admin_bar'=> true,
        'show_in_nav_menus'=> true,
        'can_export'=> true,
        'has_archive'=> true,
        'exclude_from_search'=> false,
        'publicly_queryable'=> true,
        'capability_type'=>'page',
    );
    register_post_type('a_post_type',$args);
}

add_action('init','custom_post_type',0);
;?>