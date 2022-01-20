<?php

function custom_post_type_products() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Products', 'Post Type General Name', 'affiliate-theme-bootstrap' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'affiliate-theme-bootstrap' ),
        'menu_name'           => __( 'Products', 'affiliate-theme-bootstrap' ),
        'parent_item_colon'   => __( 'Parent Product', 'affiliate-theme-bootstrap' ),
        'all_items'           => __( 'All Products', 'affiliate-theme-bootstrap' ),
        'view_item'           => __( 'View Product', 'affiliate-theme-bootstrap' ),
        'add_new_item'        => __( 'Add New Product', 'affiliate-theme-bootstrap' ),
        'add_new'             => __( 'Add New', 'affiliate-theme-bootstrap' ),
        'edit_item'           => __( 'Edit Product', 'affiliate-theme-bootstrap' ),
        'update_item'         => __( 'Update Product', 'affiliate-theme-bootstrap' ),
        'search_items'        => __( 'Search Product', 'affiliate-theme-bootstrap' ),
        'not_found'           => __( 'Not Found', 'affiliate-theme-bootstrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'affiliate-theme-bootstrap' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Products', 'affiliate-theme-bootstrap' ),
        'description'         => __( 'Product news and reviews', 'affiliate-theme-bootstrap' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Products', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type_products', 0 );

?>