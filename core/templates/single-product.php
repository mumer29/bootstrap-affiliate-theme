<?php get_header(); 
?>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
<?php

// Start the loop.
while ( have_posts() ) : the_post();

$postid = get_the_ID();
$uri = siteURL(); 
$url = $uri . '/wp-json/wp/v2/product/'. $postid ;
$json = file_get_contents($url);
$product = json_decode($json,true);
$title=$product['title']['rendered'];
$price=$product['acf']['price'];
$short_desciption=$product['acf']['short_description'];
$long_desciption=$product['acf']['long_description'];
$pros_desciption=$product['acf']['pros_description'];
$cons_desciption=$product['acf']['cons_description'];
$amazon_url=$product['acf']['amazon_url'];
$ebay_url=$product['acf']['ebay_url'];
if ($ebay_url){
$ebay_url=$product['acf']['ebay_url'] . '#LeftSummaryPanel';
}
$walmart_url=$product['acf']['walmart_url'];
$video_1_url=$product['acf']['video_1_url'];
if (strpos($video_1_url,'youtube.com') !== false) {
  if (strpos($video_1_url,'watch') !== false) {
    $video_1_url_components = parse_url($video_1_url);
    parse_str($video_1_url_components['query'], $video_1_params);
    $video_1_url = 'https://www.youtube.com/embed/' . $video_1_params['v'];
  }
}
if (strpos($video_1_url,'https://youtu.be') !== false) {
  $video_1_url_components = parse_url($video_1_url);
  $video_1_url_components_parts= explode('/', $video_1_url_components['path']);
  $video_1_url = 'https://www.youtube.com/embed/' . $video_1_url_components_parts[1];
}
$video_2_url=$product['acf']['video_2_url'];
if (strpos($video_2_url,'youtube.com') !== false) {
  if (strpos($video_2_url,'watch') !== false) {
    $video_2_url_components = parse_url($video_2_url);
    parse_str($video_2_url_components['query'], $video_2_params);
    $video_2_url = 'https://www.youtube.com/embed/' . $video_2_params['v'];
  }
}
if (strpos($video_2_url,'https://youtu.be') !== false) {
  $video_2_url_components = parse_url($video_2_url);
  $video_2_url_components_parts= explode('/', $video_2_url_components['path']);
  $video_2_url = 'https://www.youtube.com/embed/' . $video_2_url_components_parts[1];
}
$video_3_url=$product['acf']['video_3_url'];
if (strpos($video_3_url,'youtube.com') !== false) {
  if (strpos($video_3_url,'watch') !== false) {
    $video_3_url_components = parse_url($video_3_url);
    parse_str($video_3_url_components['query'], $video_3_params);
    $video_3_url = 'https://www.youtube.com/embed/' . $video_3_params['v'];
  }
}
if (strpos($video_3_url,'https://youtu.be') !== false) {
  $video_3_url_components = parse_url($video_3_url);
  $video_3_url_components_parts= explode('/', $video_3_url_components['path']);
  $video_3_url = 'https://www.youtube.com/embed/' . $video_3_url_components_parts[1];
}
$video_4_url=$product['acf']['video_4_url'];
if (strpos($video_4_url,'youtube.com') !== false) {
  if (strpos($video_4_url,'watch') !== false) {
    $video_4_url_components = parse_url($video_4_url);
    parse_str($video_4_url_components['query'], $video_4_params);
    $video_4_url = 'https://www.youtube.com/embed/' . $video_4_params['v'];
  }
}
if (strpos($video_4_url,'https://youtu.be') !== false) {
  $video_4_url_components = parse_url($video_4_url);
  $video_4_url_components_parts= explode('/', $video_4_url_components['path']);
  $video_4_url = 'https://www.youtube.com/embed/' . $video_4_url_components_parts[1];
}
$brand_id= $product['brand']['0'];
$brand_name = do_shortcode('[aff_brand_name brand_id="'.$brand_id.'"]');
$brand_link = do_shortcode('[aff_brand_link brand_id="'.$brand_id.'"]');

$manufacturer_id= $product['manufacturer']['0'];
$manufacturer_name = do_shortcode('[aff_manufacturer_name manufacturer_id="'.$manufacturer_id.'"]');

$image_1_id = $product['acf']['image_1'];
$image_2_id = $product['acf']['image_2'];
$image_3_id = $product['acf']['image_3'];
$image_4_id = $product['acf']['image_4'];
$image_5_id = $product['acf']['image_5'];
$image_6_id = $product['acf']['image_6'];
$image_7_id = $product['acf']['image_7'];
$image_8_id = $product['acf']['image_8'];
$image_9_id = $product['acf']['image_9'];
$image_10_id = $product['acf']['image_10'];
 
$product_carousel = do_shortcode('[aff_product_carousel image_1_id="'.$image_1_id.'" image_2_id="'.$image_2_id.'" image_3_id="'.$image_3_id.'" image_4_id="'.$image_4_id.'" image_5_id="'.$image_5_id.'" image_6_id="'.$image_6_id.'" image_7_id="'.$image_7_id.'" image_8_id="'.$image_8_id.'" image_9_id="'.$image_9_id.'" image_10_id="'.$image_10_id.'"]');

$related_products = do_shortcode('[aff_products taxonomy_slug="manufacturer" taxonomy_id="'.$manufacturer_id.'"]');


 $content = '<div class="row m-0">';
 $content .= '<div class="col-12 col-md-4">';
 $content .= '<h1 class="text-center text-md-left d-block d-md-none">' .$title . '</h1>'; 
 $content .= $product_carousel; 
 if ($video_1_url || $video_2_url || $video_3_url || $video_4_url){
  $content .= '<div class="row d-none d-md-block m-0">';
  $content .= '<h3 class="pt-4">Product Videos</h3>';
 }
 if ($video_1_url){
  $content .= '<div class="embed-responsive embed-responsive-16by9">';
  $content .= '<iframe class="pt-2 embed-responsive-item" src="'.$video_1_url.'?rel=0" allowfullscreen></iframe>';
  $content .= '</div>';
 }
 if ($video_2_url){
  $content .= '<div class="embed-responsive embed-responsive-16by9">';
  $content .= '<iframe class="pt-4 embed-responsive-item" src="'.$video_2_url.'?rel=0" allowfullscreen></iframe>';
  $content .= '</div>';
 }
 if ($video_3_url){
  $content .= '<div class="embed-responsive embed-responsive-16by9">';
  $content .= '<iframe class="pt-4 embed-responsive-item" src="'.$video_3_url.'?rel=0" allowfullscreen></iframe>';
  $content .= '</div>';
 }
 if ($video_4_url){
  $content .= '<div class="pt-4 embed-responsive embed-responsive-16by9">';
  $content .= '<iframe class="pt-4 embed-responsive-item" src="'.$video_4_url.'?rel=0" allowfullscreen></iframe>';
  $content .= '</div>';
 }
 if ($video_1_url || $video_2_url || $video_3_url || $video_4_url){
  $content .= '</div>';
 }
 $content .= '</div>';
 $content .= '<div class="col-12 col-md-8 p-2">';
 $content .= '<a href="'.$brand_link.'"><p class="">Brand: ' .$brand_name . '</p></a>';
 $content .= '<h1 class="text-md-center text-md-left d-none d-md-block">' .$title . '</h1>';
 $content .= '<div class="row m-0">';
 $content .= '<div class="col-12">';
 $content .= '<p class="h3 text-center">' .$price . '</p>';
 $content .= $short_desciption;
 if ($long_desciption){
 $content .= '<h3>Product Details</h3>';
 $content .= $long_desciption;
 }
 if ($pros_desciption){
  $content .= '<h3>What Users Like</h3>';
  $content .= $pros_desciption;
  }
  if ($cons_desciption){
  $content .= '<h3>Opportunities for Growth</h3>';
  $content .= $cons_desciption;
  }
 $content .= '</div>';
 $content .= '<div class="col-12">';
 $content .= '<div class="row m-0">';
 if ($amazon_url){
 $content .= '<div class="pt-3 col-12 pb-3">';
 $content .= '<a class="btn btn-warning btn-block" href="'.$amazon_url.'" role="button" target="_blank">View on Amazon</a>';
 $content .= '</div>';
 }
 if ($ebay_url){
  $content .= '<div class="col-12 pb-3">';
  $content .= '<a class="btn btn-secondary btn-block" href="'.$ebay_url.'" role="button" target="_blank">View on Ebay</a>';
  $content .= '</div>';
  }
  if ($walmart_url){
    $content .= '<div class="col-12 pb-3">';
    $content .= '<a class="btn btn-info btn-block" href="'.$walmart_url.'" role="button" target="_blank">View on Walmart</a>';
    $content .= '</div>';
    }
 
 if ($video_1_url || $video_2_url || $video_3_url || $video_4_url){
  $content .= '<div class="col-12 d-block d-md-none">';
  $content .= '<h3 class="pt-4">Product Videos</h3>';
 }
 if ($video_1_url){
  $content .= '<div class="embed-responsive embed-responsive-16by9">';
  $content .= '<iframe class="embed-responsive-item" src="'.$video_1_url.'?rel=0" allowfullscreen></iframe>';
  $content .= '</div>';
 }
 if ($video_2_url){
  $content .= '<div class="pt-4 embed-responsive embed-responsive-16by9">';
  $content .= '<iframe class="embed-responsive-item" src="'.$video_2_url.'?rel=0" allowfullscreen></iframe>';
  $content .= '</div>';
 }
 if ($video_3_url){
  $content .= '<div class="pt-4 embed-responsive embed-responsive-16by9">';
  $content .= '<iframe class="embed-responsive-item" src="'.$video_3_url.'?rel=0" allowfullscreen></iframe>';
  $content .= '</div>';
 }
 if ($video_4_url){
  $content .= '<div class="pt-4 embed-responsive embed-responsive-16by9">';
  $content .= '<iframe class="embed-responsive-item" src="'.$video_4_url.'?rel=0" allowfullscreen></iframe>';
  $content .= '</div>';
 }
 if ($video_1_url || $video_2_url || $video_3_url || $video_4_url){
  $content .= '</div>';
 }
 

 $content .= '</div>';
 $content .= '</div>';
 $content .= '</div>';
 $content .= '</div>';
 $content .= '</div>';
 if ($manufacturer_name){
 $content .= '<div class="row m-0">';
 $content .= '<div class="col-12">';
 $content .= '<h3 class="m-0 pt-3">More Products from '.$manufacturer_name.'</h3>';
 $content .= '<br>';
 $content .= $related_products;
 $content .= '</div>';
 $content .= '</div>';
 }
 echo $content;
 // If comments are open or we have at least one comment, load up the comment template.
 if ( comments_open() || get_comments_number() ) {
 comments_template();
 }
 // End of the loop.
endwhile;
?>
</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); 
