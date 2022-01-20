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
/**
 * Shortcodes
 * Require all PHP files in the /shortcodes/ directory
 */
foreach (glob(get_stylesheet_directory() . "/shortcodes/*.php") as $shotcode) {
    $shotcode= basename($shotcode);
    require get_stylesheet_directory() . '/shortcodes/' . $shotcode;
}
/**
 * Functions
 * Require all PHP files in the /functions/admin/notifications/ directory
 */
foreach (glob(get_stylesheet_directory() . "/functions/admin/notifications/*.php") as $function) {
    $function= basename($function);
    require get_stylesheet_directory() . '/functions/admin/notifications/' . $function;
}
 
/**
 * Custom Post Types
 * Require all PHP files in the /functions/admin/custom_post_types/ directory
 */
foreach (glob(get_stylesheet_directory() . "/functions/admin/custom_post_types/*.php") as $function) {
    $function= basename($function);
    require get_stylesheet_directory() . '/functions/admin/custom_post_types/' . $function;
}

 ?>

 
