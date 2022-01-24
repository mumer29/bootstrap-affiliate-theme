<?php
add_shortcode('affiliate_product_carousel', 'affiliate_product_carousel_shortcode');
function affiliate_product_carousel_shortcode( $atts = [], $content = null) {
	$affiliate_product_carousel_atts = shortcode_atts(
    array(
        'image_1_id' => '',
        'image_2_id' => '',
        'image_3_id' => '',
        'image_4_id' => '',
        'image_5_id' => '',
        'image_6_id' => '',
        'image_7_id' => '',
        'image_8_id' => '',
        'image_9_id' => '',
        'image_10_id' => '',
    ), $atts, $tag
);
$image_1_id = esc_html__( $affiliate_product_carousel_atts['image_1_id'], 'affiliate_product_carousel' );
$image_2_id = esc_html__( $affiliate_product_carousel_atts['image_2_id'], 'affiliate_product_carousel' );
$image_3_id = esc_html__( $affiliate_product_carousel_atts['image_3_id'], 'affiliate_product_carousel' );
$image_4_id = esc_html__( $affiliate_product_carousel_atts['image_4_id'], 'affiliate_product_carousel' );
$image_5_id = esc_html__( $affiliate_product_carousel_atts['image_5_id'], 'affiliate_product_carousel' );
$image_6_id = esc_html__( $affiliate_product_carousel_atts['image_6_id'], 'affiliate_product_carousel' );
$image_7_id = esc_html__( $affiliate_product_carousel_atts['image_7_id'], 'affiliate_product_carousel' );
$image_8_id = esc_html__( $affiliate_product_carousel_atts['image_8_id'], 'affiliate_product_carousel' );
$image_9_id = esc_html__( $affiliate_product_carousel_atts['image_9_id'], 'affiliate_product_carousel' );
$image_10_id = esc_html__( $affiliate_product_carousel_atts['image_10_id'], 'affiliate_product_carousel' );


$uri = siteURL();
if($image_1_id){
$image_1_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_1_id);
$image_1_array = json_decode($image_1_array,true);
$image_1_url = $image_1_array['guid']['rendered'];
  $image_1_thumb_url = $image_1_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
}

if($image_2_id){
$image_2_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_2_id);
$image_2_array = json_decode($image_2_array,true);
$image_2_url = $image_2_array['guid']['rendered'];
$image_2_thumb_url = $image_2_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
}

if($image_3_id){
$image_3_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_3_id);
$image_3_array = json_decode($image_3_array,true);
$image_3_url = $image_3_array['guid']['rendered'];
$image_3_thumb_url = $image_3_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
}

if($image_4_id){
$image_4_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_4_id);
$image_4_array = json_decode($image_4_array,true);
$image_4_url = $image_4_array['guid']['rendered'];
$image_4_thumb_url = $image_4_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
}

if($image_5_id){
$image_5_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_5_id);
$image_5_array = json_decode($image_5_array,true);
$image_5_url = $image_5_array['guid']['rendered'];                                              
$image_5_thumb_url = $image_5_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
} 

if($image_6_id){
$image_6_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_6_id);
$image_6_array = json_decode($image_6_array,true);
$image_6_url = $image_6_array['guid']['rendered'];                                              
$image_6_thumb_url = $image_6_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
} 

if($image_7_id){
$image_7_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_7_id);
$image_7_array = json_decode($image_7_array,true);
$image_7_url = $image_7_array['guid']['rendered'];                                              
$image_7_thumb_url = $image_7_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
} 

if($image_8_id){
$image_8_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_8_id);
$image_8_array = json_decode($image_8_array,true);
$image_8_url = $image_8_array['guid']['rendered'];                                              
$image_8_thumb_url = $image_8_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
}

if($image_9_id){
$image_9_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_9_id);
$image_9_array = json_decode($image_9_array,true);
$image_9_url = $image_9_array['guid']['rendered'];                                              
$image_9_thumb_url = $image_9_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
}

if($image_10_id){
  $image_10_array = file_get_contents($uri . '/wp-json/wp/v2/media/'. $image_10_id);
  $image_10_array = json_decode($image_10_array,true);
  $image_10_url = $image_10_array['guid']['rendered'];                                              
  $image_10_thumb_url = $image_10_array['media_details']['sizes']['affiliate-theme-square-tiny']['source_url'];
  }
  
$content = '<div id="carouselProduct" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators">';

if($image_2_id){ 
  $content .= '<li data-target="#carouselProduct" data-slide-to="0" class="active"></li>';
}
if($image_2_id){
  $content .= '<li data-target="#carouselProduct" data-slide-to="1"></li>';
}
if($image_3_id){
  $content .= '<li data-target="#carouselProduct" data-slide-to="2"></li>';
}
if($image_4_id){
  $content .= '<li data-target="#carouselProduct" data-slide-to="3"></li>';
}
if($image_5_id){
  $content .= '<li data-target="#carouselProduct" data-slide-to="4"></li>';
}
if($image_6_id){
  $content .= '<li data-target="#carouselProduct" data-slide-to="5"></li>';
}
if($image_7_id){
  $content .= '<li data-target="#carouselProduct" data-slide-to="6"></li>';
}
if($image_8_id){
  $content .= '<li data-target="#carouselProduct" data-slide-to="7"></li>';
}
if($image_9_id){
  $content .= '<li data-target="#carouselProduct" data-slide-to="8"></li>';
}
if($image_10_id){
  $content .= '<li data-target="#carouselProduct" data-slide-to="9"></li>';
}
$content .= '</ol>';
$content .= '<div class="carousel-inner">';

if($image_1_id){
  $content .= '<div class="carousel-item active"><img src="'.$image_1_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_2_id){
  $content .= '<div class="carousel-item"><img src="'.$image_2_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_3_id){
  $content .= '<div class="carousel-item"><img src="'.$image_3_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_4_id){
  $content .= '<div class="carousel-item"><img src="'.$image_4_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_5_id){
  $content .= '<div class="carousel-item"><img src="'.$image_5_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_6_id){
  $content .= '<div class="carousel-item"><img src="'.$image_6_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_7_id){
  $content .= '<div class="carousel-item"><img src="'.$image_7_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_8_id){
  $content .= '<div class="carousel-item"><img src="'.$image_8_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_9_id){
  $content .= '<div class="carousel-item"><img src="'.$image_9_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_10_id){
  $content .= '<div class="carousel-item"><img src="'.$image_10_url.'" class="d-block w-100" alt="..."></div>';
}
if($image_2_id){
  $content .= '<a class="carousel-control-prev" href="#carouselProduct" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselProduct" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
}
$content .= '</div>';
$content .= '<div class="row m-0 pt-3">';
if($image_2_id){
$content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="0" href="#"><img src="'.$image_1_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
}
if($image_2_id){
  $content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="1" href="#"><img src="'.$image_2_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
}
if($image_3_id){
  $content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="2" href="#"><img src="'.$image_3_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
}
if($image_4_id){
  $content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="3" href="#"><img src="'.$image_4_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
}
if($image_5_id){
  $content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="4" href="#"><img src="'.$image_5_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
  }
if($image_6_id){
  $content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="5" href="#"><img src="'.$image_6_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
}
if($image_7_id){
  $content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="6" href="#"><img src="'.$image_7_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
}
if($image_8_id){
  $content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="7" href="#"><img src="'.$image_8_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
}
if($image_9_id){
  $content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="8" href="#"><img src="'.$image_9_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
}
if($image_10_id){
  $content .= '<div class="col-3"><a data-target="#carouselProduct" data-slide-to="9" href="#"><img src="'.$image_10_thumb_url.'" class="d-block w-100 mb-3" alt="..."></a></div>';
}  
$content .= '</div></div>';
return $content;
}
?>