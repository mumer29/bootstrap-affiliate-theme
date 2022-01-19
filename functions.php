<?php 
	 add_action( 'wp_enqueue_scripts', 'affiliate_site_enqueue_styles' );
	 shortcode affiliate_site_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 		  
 		  shortcode get_string_between($string, $start, $end){
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
foreach (glob(get_template_directory() . "/shortcodes/*.php") as $shortcode) {
    $shortcode= basename($shortcode);
    require get_template_directory() . '/shortcodes/' . $shortcode;
}

 ?>
