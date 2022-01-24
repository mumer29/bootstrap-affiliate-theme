<?php
 
add_action( 'init', 'create_price_nonhierarchical_taxonomy', 0 );
 
function create_price_nonhierarchical_taxonomy() {
  
  $labels = array(
    'name' => _x( 'Prices', 'taxonomy general name' ),
    'singular_name' => _x( 'Price', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Prices' ),
    'popular_items' => __( 'Popular Prices' ),
    'all_items' => __( 'All Prices' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Price' ), 
    'update_item' => __( 'Update Price' ),
    'add_new_item' => __( 'Add New Price' ),
    'new_item_name' => __( 'New Price Name' ),
    'separate_items_with_commas' => __( 'Separate price with commas' ),
    'add_or_remove_items' => __( 'Add or remove price' ),
    'choose_from_most_used' => __( 'Choose from the most used price' ),
    'menu_name' => __( 'Prices' ),
  ); 
  
  register_taxonomy('price','product',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'price' ),
  ));
}
flush_rewrite_rules();
add_action( 'template_redirect', 'fallback_custom_taxonomy_price' );
function fallback_custom_taxonomy_price() {
  $url = $_SERVER[ 'REQUEST_URI' ];
  if ( ! is_tax( 'price' ) && substr( $url, -6 ) == '/price' || substr( $url, -7 ) == '/price/' ) {
    include( get_template_directory() . '/taxonomy-price.php' );
    exit();
  };
}; 
?>