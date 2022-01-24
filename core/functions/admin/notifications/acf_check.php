<?php
$path_to_gitupdater = WP_PLUGIN_DIR . '/advanced-custom-fields/acf.php';
$is_installed_gitupdater = file_exists( $path_to_gitupdater );
if ( !$is_installed_gitupdater ) {

    function admin_notice__gitupdater_not_installed() {
        ?>
        <div class="notice notice-error is-dismissible">
            <p><?php _e( 'Affiliate Theme: This theme requires the Free version of the Advanced Custom Fields Plugin.  You can install the plugin <a href="/wp-admin/plugin-install.php?s=advanced%20custom%20fields&tab=search&type=term">directly though the wordpress plugins dashboard</a>.', 'sample-text-domain' ); ?></p>
        </div>
        <?php
    }
    add_action( 'admin_notices', 'admin_notice__gitupdater_not_installed' );} 
?>