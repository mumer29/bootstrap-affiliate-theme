<?php
/*
add_shortcode('aff_hello_world', 'aff_hello_world_shortcode');
function aff_hello_world_shortcode( $atts = [], $content = null) {
    // do something to $content
    // always return
    $content = '<p>Hello World</p>';
    return $content;
}
*/
/**
 * The [hello_world] shortcode.
 *
 * Accepts a title and will display a box.
 *
 * @param array  $atts    Shortcode attributes. Default empty.
 * @param string $content Shortcode content. Default null.
 * @param string $tag     Shortcode tag (name). Default empty.
 * @return string Shortcode output.
 */
function hello_world_shortcode( $atts = [], $content = null, $tag = '' ) {
    // normalize attribute keys, lowercase
    $atts = array_change_key_case( (array) $atts, CASE_LOWER );
 
    // override default attributes with user attributes
    $hello_world_atts = shortcode_atts(
        array(
            'title' => 'WordPress.org',
        ), $atts, $tag
    );
 
    // start box
    $o = '<div class="hello_world-box">';
 
    // title
    $o .= '<h2>' . esc_html__( $hello_world_atts['title'], 'hello_world' ) . '</h2>';
 
    // enclosing tags
    if ( ! is_null( $content ) ) {
        // secure output by executing the_content filter hook on $content
        $o .= apply_filters( 'the_content', $content );
 
        // run shortcode parser recursively
        $o .= do_shortcode( $content );
    }
 
    // end box
    $o .= '</div>';
 
    // return output
    return $o;
}
 
/**
 * Central location to create all shortcodes.
 */
function hello_world_shortcodes_init() {
    add_shortcode( 'hello_world', 'hello_world_shortcode' );
}
 
add_action( 'init', 'hello_world_shortcodes_init' );
?>
