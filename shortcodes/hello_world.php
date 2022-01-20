<?php
add_shortcode('affiliate_hello_world', 'affiliate_hello_world_shortcode');
function affiliate_hello_world_shortcode( $atts = [], $content = null) {
    // do something to $content
    // always return
    $content = '<p>Hello World</p>';
    return $content;
}

?>
