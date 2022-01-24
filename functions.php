<?php 
	 add_action( 'wp_enqueue_scripts', 'affiliate_site_enqueue_styles' );
	 function affiliate_site_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 		  
           function require_all_files($dir) {
            foreach( glob( "$dir/*" ) as $path ){
                if ( preg_match( '/\.php$/', $path ) ) {
                    require_once $path;  // it's a PHP file so just require it
                } elseif ( is_dir( $path ) ) {
                    require_all_files( $path );  // it's a subdir, so call the same function for this subdir
                }
            }
        }
        
        require_all_files( get_stylesheet_directory() . "/core/functions" );

?>