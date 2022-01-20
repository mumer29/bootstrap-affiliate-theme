<?php
 
add_action( 'init', 'create_brands_nonhierarchical_taxonomy', 0 );
 
function create_brands_nonhierarchical_taxonomy() {
  
  $labels = array(
    'name' => _x( 'Brands', 'taxonomy general name' ),
    'singular_name' => _x( 'Brand', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Brands' ),
    'popular_items' => __( 'Popular Brands' ),
    'all_items' => __( 'All Brands' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Brand' ), 
    'update_item' => __( 'Update Brand' ),
    'add_new_item' => __( 'Add New Brand' ),
    'new_item_name' => __( 'New Brand Name' ),
    'separate_items_with_commas' => __( 'Separate brands with commas' ),
    'add_or_remove_items' => __( 'Add or remove brands' ),
    'choose_from_most_used' => __( 'Choose from the most used brands' ),
    'menu_name' => __( 'Brands' ),
  ); 
  
  register_taxonomy('brands','products',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
  ));
}

?>