<?php
function add_image_sizes() {
    add_image_size( 'affiliate-theme-landscape-large', 1200, 900, true );
    add_image_size( 'affiliate-theme-portrait-large', 900, 1200, true );
    add_image_size( 'affiliate-theme-square-large', 1200, 1200, true );

    add_image_size( 'affiliate-theme-landscape-medium', 800, 600, true );
    add_image_size( 'affiliate-theme-portrait-medium', 600, 800, true );
    add_image_size( 'affiliate-theme-square-medium', 800, 800, true );

    add_image_size( 'affiliate-theme-landscape-small', 400, 300, true );
    add_image_size( 'affiliate-theme-portrait-small', 300, 400, true );
    add_image_size( 'affiliate-theme-square-small', 400, 400, true );

    add_image_size( 'affiliate-theme-landscape-tiny', 200, 150, true );
    add_image_size( 'affiliate-theme-portrait-tiny', 150, 200, true );
    add_image_size( 'affiliate-theme-square-tiny', 200, 200, true );

    add_image_size( 'affiliate-theme-uncropped', 1200, 9999, false );
}
add_image_sizes();
?>