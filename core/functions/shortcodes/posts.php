<?php
add_shortcode('aff_posts', 'aff_posts_shortcode');
function aff_posts_shortcode( $atts = [], $content = null) {
	$aff_posts_atts = shortcode_atts(
        array(
            'category_id;' => '',
        ), $atts, $tag
    );
	$category_id = esc_html__( $aff_posts_atts['category_id'], 'aff_posts' );
	$uri = siteURL();
	$json_url = $uri .'/wp-json/wp/v2/posts/?orderby=date';
	if($category_id){
		$json_url .= '&categories=' . $category_id;
	}
	$json = file_get_contents($json_url);
	$array = json_decode($json,true);
    
	$content = '<div class="row m-0">';
	
	foreach($array as $item) {
		$url=$item['link'];
		 $title=$item['title']['rendered'];
		$excerpt=$item['excerpt']['rendered'];
		$media_id = $item['featured_media'];
		$image_url = do_shortcode('[aff_media_url media_id="'.$media_id.'"]');
		$content .= '<div class="card mb-3">';
		if($image_url){  
		$content .= '<img class="card-img-top" src="'.$image_url.'" alt="">';
		}
		  $content .= '
			  <div class="card-body">
			<h5 class="card-title">'.$title.'</h5>
			<p class="card-text">'.$excerpt.'</p>
			<a class="btn btn-primary" href='.$url.'>Read More</a>
		  </div>
		</div>';
	
	}
	$content .= '</div>';
	return $content;
}

?>