<?php
/*
$uri = $_SERVER['HTTP_HOST'];
$json_url = 'https://'.$uri.'/wp-json/wp/v2/posts/?orderby=date';
if($category_id){
	$json_url .= '&categories=' . $category_id;
}
$json = file_get_contents($json_url);
$array = json_decode($json,true);
echo '  <div class="row m-0">';
foreach($array as $item) {
    $url=$item['link'];
	 $title=$item['title']['rendered'];
	$excerpt=$item['excerpt']['rendered'];
	$media_id = $item['featured_media'];
	$image_url = do_shortcode('[wbcr_snippet id="135" media_id="'.$media_id.'"]');
	echo '<div class="card mb-3">';
    if($image_url){  
	echo '<img class="card-img-top" src="'.$image_url.'" alt="">';
	}
      echo '
		  <div class="card-body">
        <h5 class="card-title">'.$title.'</h5>
        <p class="card-text">'.$excerpt.'</p>
		<a class="btn btn-primary" href='.$url.'>Read More</a>
      </div>
    </div>';

}
echo '</div>';
*/
?>