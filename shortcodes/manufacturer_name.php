<?php
add_shortcode('affiliate_manufacturer_name', 'affiliate_manufacturer_name_shortcode');
function affiliate_manufacturer_name_shortcode( $atts = [], $content = null) {
	$affiliate_manufacturer_name_atts = shortcode_atts(
        array(
            'manufacturer_id' => '',
        ), $atts, $tag
    );
	$manufacturer_id = esc_html__( $affiliate_manufacturer_name_atts['manufacturer_id'], 'affiliate_manufacturer_name' );
	$uri = siteURL();
	$manufacturer_content = file_get_contents($uri .'/wp-json/wp/v2/manufacturer/'. $manufacturer_id);
    $manufacturer_array = json_decode($manufacturer_content,true);
	$manufacturer_name = $manufacturer_array['name'];
    echo $manufacturer_name;
}
?>