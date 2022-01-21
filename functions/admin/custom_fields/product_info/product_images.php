<?php
include '/wp-content/plugins/advanced-custom-fields/includes/local-fields.php';

function my_acf_add_local_field_groups_product_images() {
	
	acf_add_local_field_group(array(
		'key' => 'product_images',
		'title' => 'Product Images',
		'fields' => array (
			array (
				'key' => 'image_1',
				'label' => 'Image 1',
				'name' => 'image_1',
				'type' => 'image',
			),
			array (
				'key' => 'image_2',
				'label' => 'Image 2',
				'name' => 'image_2',
				'type' => 'image',
			),
			array (
				'key' => 'image_3',
				'label' => 'Image 3',
				'name' => 'image_3',
				'type' => 'image',
			),
			array (
				'key' => 'image_4',
				'label' => 'Image 4',
				'name' => 'image_4',
				'type' => 'image',
			),
			array (
				'key' => 'image_5',
				'label' => 'Image 5',
				'name' => 'image_5',
				'type' => 'image',
			),
			array (
				'key' => 'image_6',
				'label' => 'Image 6',
				'name' => 'image_6',
				'type' => 'image',
			),
			array (
				'key' => 'image_7',
				'label' => 'Image 7',
				'name' => 'image_7',
				'type' => 'image',
			),
			array (
				'key' => 'image_8',
				'label' => 'Image 8',
				'name' => 'image_8',
				'type' => 'image',
			),
			array (
				'key' => 'image_9',
				'label' => 'Image 9',
				'name' => 'image_9',
				'type' => 'image',
			),
			array (
				'key' => 'image_10',
				'label' => 'Image 10',
				'name' => 'image_10',
				'type' => 'image',
			),
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
		'menu_order' => 3,
	));
	
}

add_action('acf/init', 'my_acf_add_local_field_groups_product_images');

?>