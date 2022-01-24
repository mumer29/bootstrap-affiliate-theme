<?php
add_shortcode('aff_brand_link', 'aff_brand_link_shortcode');
function aff_brand_link_shortcode( $atts = [], $content = null) {
	$aff_brand_link_atts = shortcode_atts(
        array(
            'brand_id' => '',
        ), $atts, $tag
    );
	$brand_id = esc_html__( $aff_brand_link_atts['brand_id'], 'aff_brand_link' );
	$uri = siteURL();
	$brand_content = file_get_contents($uri .'/wp-json/wp/v2/brand/'. $brand_id);
    $brand_array = json_decode($brand_content,true);
	$brand_link = $brand_array['link'];
    return $brand_link;
}
?>