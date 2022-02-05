<?php
include '/wp-content/plugins/advanced-custom-fields/includes/local-fields.php';

function my_acf_add_local_field_groups_aff_videos() {
	
	acf_add_local_field_group(array(
		'key' => 'videos',
		'title' => 'Videos',
		'fields' => array (
			array (
				'key' => 'video_1_url',
				'label' => 'Video 1 URL',
				'name' => 'video_1_url',
				'type' => 'url',
			),
			array (
				'key' => 'video_2_url',
				'label' => 'Video 2 URL',
				'name' => 'video_2_url',
				'type' => 'url',
			),
			array (
				'key' => 'video_3_url',
				'label' => 'Video 3 URL',
				'name' => 'video_3_url',
				'type' => 'url',
			),
			array (
				'key' => 'video_4_url',
				'label' => 'Video 4 URL',
				'name' => 'video_4_url',
				'type' => 'url',
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
		'menu_order' => 1,
	));
	
}

add_action('acf/init', 'my_acf_add_local_field_groups_aff_videos');

?>