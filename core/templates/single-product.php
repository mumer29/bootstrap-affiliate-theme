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
$array = json_decode($json,true);
$title=$array['title']['rendered'];
$price=$array['acf']['price'];
$long_desciption=$array['acf']['long_description'];
$amazon_url=$array['acf']['amazon_url'];
$brand_id= $array['brand']['0'];
$brand_name = do_shortcode('[aff_brand_name brand_id="'.$brand_id.'"]');
$brand_link = do_shortcode('[aff_brand_link brand_id="'.$brand_id.'"]');

$image_1_id = $array['acf']['image_1'];
$image_2_id = $array['acf']['image_2'];
$image_3_id = $array['acf']['image_3'];
$image_4_id = $array['acf']['image_4'];
$image_5_id = $array['acf']['image_5'];
$image_6_id = $array['acf']['image_6'];
$image_7_id = $array['acf']['image_7'];
$image_8_id = $array['acf']['image_8'];
$image_9_id = $array['acf']['image_9'];
$image_10_id = $array['acf']['image_10'];
 
$product_carousel = do_shortcode('[aff_product_carousel image_1_id="'.$image_1_id.'" image_2_id="'.$image_2_id.'" image_3_id="'.$image_3_id.'" image_4_id="'.$image_4_id.'" image_5_id="'.$image_5_id.'" image_6_id="'.$image_6_id.'" image_7_id="'.$image_7_id.'" image_8_id="'.$image_8_id.'" image_9_id="'.$image_9_id.'" image_10_id="'.$image_10_id.'"]');

$related_products = do_shortcode('[aff_products]');

 $content = '<div class="row m-0">
 <div class="col-12 col-md-4">
   <h1 class="text-center text-md-left d-block d-md-none">' .$title . '</h1>' . 
   $product_carousel . 
'</div>
 <div class="col-12 col-md-8 p-2">
 <a href="'.$brand_link.'"><p class="">Brand: ' .$brand_name . '</p></a>
 <h1 class="text-md-center text-md-left d-none d-md-block">' .$title . '</h1>
 <div class="row m-0">
   <div class="col-12">
     <p class="h3 text-center">' .$price . '</p>' . $long_desciption . 
  '</div>
   <div class="col-12">
     <div class="row m-0">
       <div class="col-12 pb-3">
         <a class="btn btn-warning btn-block" href="'.$amazon_url.'" role="button" target="_blank">View on Amazon</a>
       </div>
       <div class="col-12 pt-3 pt-md-0 pb-3">
         <a class="btn btn-danger btn-block" href="'.$amazon_url.'" role="button" target="_blank">Buy Now</a>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
<div class="row m-0">
 <div class="col-12">
   <h3 class="m-0 pt-3">Related Products</h3><br>' . $related_products . 
 '</div>
</div>
';

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
