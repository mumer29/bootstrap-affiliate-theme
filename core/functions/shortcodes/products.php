<?php
add_shortcode('aff_products', 'aff_products_shortcode');
function aff_products_shortcode( $atts = [], $content = null, $tag = '' ) {
	$atts = array_change_key_case( (array) $atts, CASE_LOWER );

	$aff_products_atts = shortcode_atts(
        array(
            'taxonomy_slug' => '',
			'taxonomy_id' => '',
        ), $atts, $tag
    );
	$taxonomy_slug = esc_html__( $aff_products_atts['taxonomy_slug'], 'aff_products' );
	$taxonomy_id = esc_html__( $aff_products_atts['taxonomy_id'], 'aff_products' );
	$uri = siteURL();
	$json_url = $uri.'/wp-json/wp/v2/product/?orderby=date&per_page=100&order=asc';
	if($taxonomy_slug){
		$json_url .= '&'.$taxonomy_slug.'=';
	}
	if($taxonomy_id && $taxonomy_slug){
		$json_url .= $taxonomy_id;
	}
	
	$json = file_get_contents($json_url);
	$array = json_decode($json,true);
	$content = '  <div class="row m-0">';
	foreach($array as $item) {
		$learn_url=$item['link'];
		$amazon_url=$item['acf']['amazon_url'];
		$ebay_url=$item['acf']['ebay_url'];
		if ($ebay_url){
			$ebay_url=$item['acf']['ebay_url'] . '#LeftSummaryPanel';
			}
		$walmart_url=$item['acf']['walmart_url'];
		$title=$item['title']['rendered'];
		$modal_id = str_replace(" ", "-", $title);
		$modal_id = RemoveSpecialChar($modal_id);
		$price=$item['acf']['price'];
		// $price= do_shortcode( '[wbcr_snippet id="187" url="'.$url.'"]' );
		$image_1_id = $item['acf']['image_1'];
		$image_1_array = file_get_contents($uri.'/wp-json/wp/v2/media/'. $image_1_id);
		$image_1_array = json_decode($image_1_array,true);
		//$image_1_url = $image_1_array['guid']['rendered'];
		$image_1_url = $image_1_array['media_details']['sizes']['affiliate-theme-square-small']['source_url'];
		$manufacturer_id = $item['manufacturer'][0];
		$content .='<div class="col-sm-12 col-md-6 col-lg-4">';
		$content .= '<div class="card mt-3">';
		$content .= '<a class="" href="'.$learn_url.'" role="button"><img class="card-img-top p-1" src="'.$image_1_url.'" alt="" /></a>';
		$content .= '<div class="card-body"><a class="" href="'.$learn_url.'" role="button"><h5 class="card-title">' .   $title . '</h5></a>';
		$content .= '    <p class="card-text"><small class="text-muted">by '.do_shortcode('[aff_manufacturer_name manufacturer_id="'.$manufacturer_id.'"]').'</small></p>';
		$content .='<p class="font-weight-bold">'.$price .'</p>';
		$content .= '<a class="btn btn-warning btn-block" href="'.$learn_url.'" role="button">Learn More</a>';
		$content .= '<a class="btn btn-danger btn-block" href="javascriptVoid(0);" role="button"  data-toggle="modal" data-target="#'.$modal_id.'">Buy Now</a>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '</div>';

		$content .= '<div class="modal fade" id="'.$modal_id.'" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">';
		$content .= '<div class="modal-dialog" role="document">';
		$content .= '<div class="modal-content">';
		$content .= '<div class="modal-header">';
        $content .= '<h5 class="modal-title" id="">'.$title.' - '.$price.'</h5>';
        $content .= '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
		$content .= '<span aria-hidden="true">&times;</span>';
        $content .= '</button>';
		$content .= '</div>';
		$content .= '<div class="modal-body">';
        if ($amazon_url){
			$content .= '<a class="btn btn-warning btn-block" href="'.$amazon_url.'" role="button" target="_blank">View on Amazon</a>';
			}
			if ($ebay_url){
			 $content .= '<a class="btn btn-secondary btn-block" href="'.$ebay_url.'" role="button" target="_blank">View on Ebay</a>';
			 }
			 if ($walmart_url){
			   $content .= '<a class="btn btn-info btn-block" href="'.$walmart_url.'" role="button" target="_blank">View on Walmart</a>';
			   }
		$content .= '</div>';
		$content .= '</div>';
		$content .= '</div>';
		$content .= '</div>';
	}
	$content .= '</div>';
	return $content;
}
?>