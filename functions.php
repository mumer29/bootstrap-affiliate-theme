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
 * Functions
 * Require all PHP files in the /functions/ directory
 */
foreach (glob(get_stylesheet_directory() . "/shortcodes/*.php") as $function) {
    $function= basename($function);
    require get_stylesheet_directory() . '/shortcodes/' . $function;
}

 ?>
