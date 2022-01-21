<?php
include '/wp-content/plugins/advanced-custom-fields/includes/local-fields.php';

function my_acf_add_local_field_groups_description() {
	
	acf_add_local_field_group(array(
		'key' => 'description',
		'title' => 'Descriptions',
		'fields' => array (
			array (
				'key' => 'short_description',
				'label' => 'Short Description',
				'name' => 'short_description',
				'type' => 'wysiwyg',
			),
			array (
				'key' => 'long_description',
				'label' => 'Long Description',
				'name' => 'long_description',
				'type' => 'wysiwyg',
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
		'menu_order' => 2,
	));
	
}

add_action('acf/init', 'my_acf_add_local_field_groups_description');

?>