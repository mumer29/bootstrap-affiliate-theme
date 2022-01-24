<?php
add_shortcode('aff_media_url', 'aff_media_url_shortcode');
function aff_media_url_shortcode( $atts = [], $content = null) {
	$aff_media_url_atts = shortcode_atts(
        array(
            'media_id' => '',
        ), $atts, $tag
    );
	$media_id = esc_html__( $aff_media_url_atts['media_id'], 'aff_media_url' );
	$uri = siteURL();
	$media_content = file_get_contents($uri .'/wp-json/wp/v2/media/'. $media_id);
    $media_array = json_decode($media_content,true);
	$media_url = $media_array['guid']['rendered'];
    return $media_url;
}
?> 
