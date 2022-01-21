<?php
add_shortcode('affiliate_brand_link', 'affiliate_brand_link_shortcode');
function affiliate_brand_link_shortcode( $atts = [], $content = null) {
    $atts = array_change_key_case( (array) $atts, CASE_LOWER );
	$affiliate_brand_link_atts = shortcode_atts(
        array(
            'brand_id' => '',
        ), $atts, $tag
    );
	$brand_id = esc_html__( $affiliate_brand_link_atts['brand_id'], 'affiliate_brand_link' );
	$uri = siteURL();
	$brand_content = file_get_contents($uri .'/wp-json/wp/v2/brand/'. $brand_id);
    $brand_array = json_decode($brand_content,true);
	$brand_link = $brand_array['link'];
    return $brand_link;
}
?>