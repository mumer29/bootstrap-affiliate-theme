<?php
/**
 * @internal never define functions inside callbacks.
 * these functions could be run multiple times; this would result in a fatal error.
 */
 
/**
 * custom option and settings
 */
function affiliate_theme_settings_init() {
    // Register a new setting for "affiliate_theme" page.
    register_setting( 'affiliate_theme', 'affiliate_theme_options' );
 
    // Register a new section in the "affiliate_theme" page.
    add_settings_section(
        'affiliate_theme_section_developers',
        __( 'The Matrix has you.', 'affiliate_theme' ), 'affiliate_theme_section_developers_callback',
        'affiliate_theme'
    );
 
    // Register a new field in the "affiliate_theme_section_developers" section, inside the "affiliate_theme" page.
    add_settings_field(
        'affiliate_theme_field_pill', // As of WP 4.6 this value is used only internally.
                                // Use $args' label_for to populate the id inside the callback.
            __( 'Pill', 'affiliate_theme' ),
        'affiliate_theme_field_pill_cb',
        'affiliate_theme',
        'affiliate_theme_section_developers',
        array(
            'label_for'         => 'affiliate_theme_field_pill',
            'class'             => 'affiliate_theme_row',
            'affiliate_theme_custom_data' => 'custom',
        )
    );
}
 
/**
 * Register our affiliate_theme_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'affiliate_theme_settings_init' );
 
 
/**
 * Custom option and settings:
 *  - callback functions
 */
 
 
/**
 * Developers section callback function.
 *
 * @param array $args  The settings array, defining title, id, callback.
 */
function affiliate_theme_section_developers_callback( $args ) {
    ?>
    <p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Follow the white rabbit.', 'affiliate_theme' ); ?></p>
    <?php
}
 
/**
 * Pill field callbakc function.
 *
 * WordPress has magic interaction with the following keys: label_for, class.
 * - the "label_for" key value is used for the "for" attribute of the <label>.
 * - the "class" key value is used for the "class" attribute of the <tr> containing the field.
 * Note: you can add custom key value pairs to be used inside your callbacks.
 *
 * @param array $args
 */
function affiliate_theme_field_pill_cb( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( 'affiliate_theme_options' );
    ?>
    <select
            id="<?php echo esc_attr( $args['label_for'] ); ?>"
            data-custom="<?php echo esc_attr( $args['affiliate_theme_custom_data'] ); ?>"
            name="affiliate_theme_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="red" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'red', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'red pill', 'affiliate_theme' ); ?>
        </option>
        <option value="blue" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'blue', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'blue pill', 'affiliate_theme' ); ?>
        </option>
    </select>
    <p class="description">
        <?php esc_html_e( 'You take the blue pill and the story ends. You wake in your bed and you believe whatever you want to believe.', 'affiliate_theme' ); ?>
    </p>
    <p class="description">
        <?php esc_html_e( 'You take the red pill and you stay in Wonderland and I show you how deep the rabbit-hole goes.', 'affiliate_theme' ); ?>
    </p>
    <?php
}
 
/**
 * Add the top level menu page.
 */
function affiliate_theme_options_page() {
    add_menu_page(
        'Affiliate Theme',
        'Affiliate Theme Options',
        'manage_options',
        'affiliate_theme',
        'affiliate_theme_options_page_html'
    );
}
 
 
/**
 * Register our affiliate_theme_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'affiliate_theme_options_page' );
 
 
/**
 * Top level menu callback function
 */
function affiliate_theme_options_page_html() {
    // check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
 
    // add error/update messages
 
    // check if the user have submitted the settings
    // WordPress will add the "settings-updated" $_GET parameter to the url
    if ( isset( $_GET['settings-updated'] ) ) {
        // add settings saved message with the class of "updated"
        add_settings_error( 'affiliate_theme_messages', 'affiliate_theme_message', __( 'Settings Saved', 'affiliate_theme' ), 'updated' );
    }
 
    // show error/update messages
    settings_errors( 'affiliate_theme_messages' );
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "affiliate_theme"
            settings_fields( 'affiliate_theme' );
            // output setting sections and their fields
            // (sections are registered for "affiliate_theme", each field is registered to a specific section)
            do_settings_sections( 'affiliate_theme' );
            // output save settings button
            submit_button( 'Save Settings' );
            ?>
        </form>
    </div>
    <?php
}