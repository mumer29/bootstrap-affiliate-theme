<?php
add_shortcode('affiliate_brand_name', 'affiliate_brand_name_shortcode');
function affiliate_brand_name_shortcode( $atts = [], $content = null) {
	$affiliate_brand_name_atts = shortcode_atts(
        array(
            'brand_id' => '',
        ), $atts, $tag
    );
	$brand_id = esc_html__( $affiliate_brand_name_atts['brand_id'], 'affiliate_brand_name' );
	$uri = siteURL();
	$brand_content = file_get_contents($uri .'/wp-json/wp/v2/brand/'. $brand_id);
    $brand_array = json_decode($brand_content,true);
	$brand_name = $brand_array['name'];
    echo $brand_name;
}
?>