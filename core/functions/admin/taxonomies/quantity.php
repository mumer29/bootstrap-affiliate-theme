<?php
 
add_action( 'init', 'create_quantities_nonhierarchical_taxonomy', 0 );
 
function create_quantities_nonhierarchical_taxonomy() {
  
  $labels = array(
    'name' => _x( 'Quantities', 'taxonomy general name' ),
    'singular_name' => _x( 'Quantity', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Quantities' ),
    'popular_items' => __( 'Popular Quantities' ),
    'all_items' => __( 'All Quantities' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Quantity' ), 
    'update_item' => __( 'Update Quantity' ),
    'add_new_item' => __( 'Add New Quantity' ),
    'new_item_name' => __( 'New Quantity Name' ),
    'separate_items_with_commas' => __( 'Separate quantities with commas' ),
    'add_or_remove_items' => __( 'Add or remove quantities' ),
    'choose_from_most_used' => __( 'Choose from the most used quantities' ),
    'menu_name' => __( 'Quantities' ),
  ); 
  
  register_taxonomy('quantity','product',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'products/quantity' ),
  ));
}
flush_rewrite_rules();
add_action( 'template_redirect', 'fallback_custom_taxonomy_quantity' );
function fallback_custom_taxonomy_quantity() {
  $url = $_SERVER[ 'REQUEST_URI' ];
  if ( ! is_tax( 'quantity' ) && substr( $url, -9 ) == '/quantity' || substr( $url, -10 ) == '/quantity/' ) {
    include( get_template_directory() . '/taxonomy-quantity.php' );
    exit();
  };
}; 
?>