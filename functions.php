<?php 
	 add_action( 'wp_enqueue_scripts', 'affiliate_site_enqueue_styles' );
	 function affiliate_site_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 		  
 		  function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

foreach (glob(get_stylesheet_directory() . "/shortcodes/*.php") as $shotcode) {
    $shotcode= basename($shotcode);
    require get_stylesheet_directory() . '/shortcodes/' . $shotcode;
}

foreach (glob(get_stylesheet_directory() . "/functions/admin/notifications/*.php") as $function) {
    $function= basename($function);
    require get_stylesheet_directory() . '/functions/admin/notifications/' . $function;
}
 
foreach (glob(get_stylesheet_directory() . "/functions/admin/custom_post_types/*.php") as $function) {
    $function= basename($function);
    require get_stylesheet_directory() . '/functions/admin/custom_post_types/' . $function;
}

foreach (glob(get_stylesheet_directory() . "/functions/admin/taxonomies/*.php") as $function) {
    $function= basename($function);
    require get_stylesheet_directory() . '/functions/admin/taxonomies/' . $function;
}

foreach (glob(get_stylesheet_directory() . "/functions/admin/custom_fields/*.php") as $function) {
    $function= basename($function);
   require get_stylesheet_directory() . '/functions/admin/custom_fields/' . $function;
}

foreach (glob(get_stylesheet_directory() . "/functions/admin/custom_fields/product_info/*.php") as $function) {
    $function= basename($function);
   require get_stylesheet_directory() . '/functions/admin/custom_fields/product_info/' . $function;
}

 ?>
