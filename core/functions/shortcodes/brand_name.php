<?php
add_shortcode('aff_brand_name', 'aff_brand_name_shortcode');
function aff_brand_name_shortcode( $atts = [], $content = null) {
	$aff_brand_name_atts = shortcode_atts(
        array(
            'brand_id' => '',
        ), $atts, $tag
    );
	$brand_id = esc_html__( $aff_brand_name_atts['brand_id'], 'aff_brand_name' );
	$uri = siteURL();
	$brand_content = file_get_contents($uri .'/wp-json/wp/v2/brand/'. $brand_id);
    $brand_array = json_decode($brand_content,true);
	$brand_name = $brand_array['name'];
    return $brand_name;
}
?>