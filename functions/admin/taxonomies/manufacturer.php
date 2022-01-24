<?php
 
add_action( 'init', 'create_manufacturers_nonhierarchical_taxonomy', 0 );
 
function create_manufacturers_nonhierarchical_taxonomy() {
  
  $labels = array(
    'name' => _x( 'Manufacturers', 'taxonomy general name' ),
    'singular_name' => _x( 'Manufacturer', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Manufacturers' ),
    'popular_items' => __( 'Popular Manufacturers' ),
    'all_items' => __( 'All Manufacturers' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Manufacturer' ), 
    'update_item' => __( 'Update Manufacturer' ),
    'add_new_item' => __( 'Add New Manufacturer' ),
    'new_item_name' => __( 'New Manufacturer Name' ),
    'separate_items_with_commas' => __( 'Separate manufacturers with commas' ),
    'add_or_remove_items' => __( 'Add or remove manufacturers' ),
    'choose_from_most_used' => __( 'Choose from the most used manufacturers' ),
    'menu_name' => __( 'Manufacturers' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('manufacturer','product',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'products/manufacturer' ),
  ));
}
flush_rewrite_rules();
add_action( 'template_redirect', 'fallback_custom_taxonomy_manufacturers' );
function fallback_custom_taxonomy_manufacturers() {
  $url = $_SERVER[ 'REQUEST_URI' ];
  if ( ! is_tax( 'manufacturer' ) && substr( $url, -13 ) == '/manufacturer' || substr( $url, -14 ) == '/manufacturer/' ) {
    include( get_template_directory() . '/taxonomy-manufacturer.php' );
    exit();
  };
}; 
?>