<?php
include '/wp-content/plugins/advanced-custom-fields/includes/local-fields.php';

function my_acf_add_local_field_groups_price() {
	
	acf_add_local_field_group(array(
		'key' => 'price',
		'title' => 'Price',
		'fields' => array (
			array (
				'key' => 'price',
				'label' => 'Price/Range',
				'name' => 'price',
				'type' => 'text',
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
		),
		'show_in_rest' => true,
		'menu_order' => 0,
	));
	
}

add_action('acf/init', 'my_acf_add_local_field_groups_price');

?>