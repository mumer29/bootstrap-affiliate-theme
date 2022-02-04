<?php
include '/wp-content/plugins/advanced-custom-fields/includes/local-fields.php';

function my_acf_add_local_field_groups_aff_urls() {
	
	acf_add_local_field_group(array(
		'key' => 'aff_urls',
		'title' => 'Affiliate URLs',
		'fields' => array (
			array (
				'key' => 'buy_now_url',
				'label' => 'Buy Now URL',
				'name' => 'buy_now_url',
				'type' => 'url',
			),
			array (
				'key' => 'amazon_url',
				'label' => 'Amazon URL',
				'name' => 'amazon_url',
				'type' => 'url',
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
		'menu_order' => 1,
	));
	
}

add_action('acf/init', 'my_acf_add_local_field_groups_aff_urls');

?>