<?php
add_shortcode('hello_world', 'hello_world_shortcode');
function hello_world_shortcode( $atts = [], $content = null) {
    // do something to $content
    // always return
   // return $content;
   echo 'Hello World';
}
?>