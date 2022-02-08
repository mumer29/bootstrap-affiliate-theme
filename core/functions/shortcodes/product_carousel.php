<?php
add_shortcode('aff_product_carousel', 'aff_product_carousel_shortcode');
function aff_product_carousel_shortcode( $atts = [], $content = null) {
	$aff_product_carousel_atts = shortcode_atts(
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
$image_1_id = esc_html__( $aff_product_carousel_atts['image_1_id'], 'aff_product_carousel' );
$image_2_id = esc_html__( $aff_product_carousel_atts['image_2_id'], 'aff_product_carousel' );
$image_3_id = esc_html__( $aff_product_carousel_atts['image_3_id'], 'aff_product_carousel' );
$image_4_id = esc_html__( $aff_product_carousel_atts['image_4_id'], 'aff_product_carousel' );
$image_5_id = esc_html__( $aff_product_carousel_atts['image_5_id'], 'aff_product_carousel' );
$image_6_id = esc_html__( $aff_product_carousel_atts['image_6_id'], 'aff_product_carousel' );
$image_7_id = esc_html__( $aff_product_carousel_atts['image_7_id'], 'aff_product_carousel' );
$image_8_id = esc_html__( $aff_product_carousel_atts['image_8_id'], 'aff_product_carousel' );
$image_9_id = esc_html__( $aff_product_carousel_atts['image_9_id'], 'aff_product_carousel' );
$image_10_id = esc_html__( $aff_product_carousel_atts['image_10_id'], 'aff_product_carousel' );


$uri = siteURL();
if($image_1_id){
  $img_1_main = wp_get_attachment_image_src($image_1_id, 'medium');
  $img_1_thumb = wp_get_attachment_image_src($image_1_id, 'affiliate-theme-square-tiny');
  $image_1_url = $img_1_main[0];
  $image_1_thumb_url = $img_1_thumb[0];
}

if($image_2_id){
  $img_2_main = wp_get_attachment_image_src($image_2_id, 'medium');
  $img_2_thumb = wp_get_attachment_image_src($image_2_id, 'affiliate-theme-square-tiny');
  $image_2_url = $img_2_main[0];
  $image_2_thumb_url = $img_2_thumb[0];
}

if($image_3_id){
  $img_3_main = wp_get_attachment_image_src($image_3_id, 'medium');
  $img_3_thumb = wp_get_attachment_image_src($image_3_id, 'affiliate-theme-square-tiny');
  $image_3_url = $img_3_main[0];
  $image_3_thumb_url = $img_3_thumb[0];
}

if($image_4_id){
  $img_4_main = wp_get_attachment_image_src($image_4_id, 'medium');
  $img_4_thumb = wp_get_attachment_image_src($image_4_id, 'affiliate-theme-square-tiny');
  $image_4_url = $img_4_main[0];
  $image_4_thumb_url = $img_4_thumb[0];
}

if($image_5_id){
  $img_5_main = wp_get_attachment_image_src($image_5_id, 'medium');
  $img_5_thumb = wp_get_attachment_image_src($image_5_id, 'affiliate-theme-square-tiny');
  $image_5_url = $img_5_main[0];
  $image_5_thumb_url = $img_5_thumb[0];                                             
} 

if($image_6_id){
  $img_6_main = wp_get_attachment_image_src($image_6_id, 'medium');
  $img_6_thumb = wp_get_attachment_image_src($image_6_id, 'affiliate-theme-square-tiny');
  $image_6_url = $img_6_main[0];
  $image_6_thumb_url = $img_6_thumb[0];                                            
} 

if($image_7_id){
  $img_7_main = wp_get_attachment_image_src($image_7_id, 'medium');
  $img_7_thumb = wp_get_attachment_image_src($image_7_id, 'affiliate-theme-square-tiny');
  $image_7_url = $img_7_main[0];
  $image_7_thumb_url = $img_7_thumb[0];                                             
} 

if($image_8_id){
  $img_8_main = wp_get_attachment_image_src($image_8_id, 'medium');
  $img_8_thumb = wp_get_attachment_image_src($image_8_id, 'affiliate-theme-square-tiny');
  $image_8_url = $img_8_main[0];
  $image_8_thumb_url = $img_8_thumb[0];                                           
}

if($image_9_id){
  $img_9_main = wp_get_attachment_image_src($image_9_id, 'medium');
  $img_9_thumb = wp_get_attachment_image_src($image_9_id, 'affiliate-theme-square-tiny');
  $image_9_url = $img_9_main[0];
  $image_9_thumb_url = $img_9_thumb[0];                                             
}

if($image_10_id){
  $img_10_main = wp_get_attachment_image_src($image_10_id, 'medium');
  $img_10_thumb = wp_get_attachment_image_src($image_10_id, 'affiliate-theme-square-tiny');
  $image_10_url = $img_10_main[0];
  $image_10_thumb_url = $img_10_thumb[0];                                            
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