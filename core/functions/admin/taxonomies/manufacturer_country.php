<?php
 
add_action( 'init', 'create_manufacturing_country_nonhierarchical_taxonomy', 0 );
 
function create_manufacturing_country_nonhierarchical_taxonomy() {
  
  $labels = array(
    'name' => _x( 'Manufacturering Country', 'taxonomy general name' ),
    'singular_name' => _x( 'Manufacturer Country', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Manufacturering Country' ),
    'popular_items' => __( 'Popular Manufacturering Countries' ),
    'all_items' => __( 'All Manufacturering Countries' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Manufacturing Country' ), 
    'update_item' => __( 'Update Manufacturing Country' ),
    'add_new_item' => __( 'Add New Manufacturing Country' ),
    'new_item_name' => __( 'New Manufacturing Country Name' ),
    'separate_items_with_commas' => __( 'Separate manufacturers with commas' ),
    'add_or_remove_items' => __( 'Add or remove manufacturers' ),
    'choose_from_most_used' => __( 'Choose from the most used Manufacturing Country' ),
    'menu_name' => __( 'Manufacturing Country' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('manufacturing-country','product',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'products/manufacturing-country' ),
  ));
}
flush_rewrite_rules();
add_action( 'template_redirect', 'fallback_custom_taxonomy_manufacturing_country' );
function fallback_custom_taxonomy_manufacturing_country() {
  $url = $_SERVER[ 'REQUEST_URI' ];
  if ( ! is_tax( 'manufacturing-country' ) && substr( $url, -13 ) == '/manufacturing-country' || substr( $url, -14 ) == '/manufacturing-country/' ) {
    include( get_template_directory() . '/taxonomy-manufacturing-country.php' );
    exit();
  };
}; 
?>