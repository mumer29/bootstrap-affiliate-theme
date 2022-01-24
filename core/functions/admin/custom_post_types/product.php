<?php

function custom_post_type_product() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Products', 'Post Type General Name', 'bootstrap-affiliate-theme' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'bootstrap-affiliate-theme' ),
        'menu_name'           => __( 'Products', 'bootstrap-affiliate-theme' ),
        'parent_item_colon'   => __( 'Parent Product', 'bootstrap-affiliate-theme' ),
        'all_items'           => __( 'All Products', 'bootstrap-affiliate-theme' ),
        'view_item'           => __( 'View Product', 'bootstrap-affiliate-theme' ),
        'add_new_item'        => __( 'Add New Product', 'bootstrap-affiliate-theme' ),
        'add_new'             => __( 'Add New', 'bootstrap-affiliate-theme' ),
        'edit_item'           => __( 'Edit Product', 'bootstrap-affiliate-theme' ),
        'update_item'         => __( 'Update Product', 'bootstrap-affiliate-theme' ),
        'search_items'        => __( 'Search Product', 'bootstrap-affiliate-theme' ),
        'not_found'           => __( 'Not Found', 'bootstrap-affiliate-theme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'bootstrap-affiliate-theme' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Products', 'bootstrap-affiliate-theme' ),
        'description'         => __( 'Product news and reviews', 'bootstrap-affiliate-theme' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', /*'comments', */'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array( 'genres' ),
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
        'menu_icon'           => 'dashicons-cart',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true, 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'product', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type_product', 0 );

?>