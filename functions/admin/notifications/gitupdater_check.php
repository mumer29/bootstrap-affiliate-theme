<?php
$path_to_gitupdater = WP_PLUGIN_DIR . '/git-updater/github-updater.php';
$is_installed_gitupdater = file_exists( $path_to_gitupdater );
if ( !$is_installed_gitupdater ) {

    function admin_notice__gitupdater_not_installed() {
        ?>
        <div class="notice notice-info is-dismissible">
            <p><?php _e( 'Affiliate Theme: We recomend installing <a target="_blank" href="https://git-updater.com/">Git Updater</a> to austomatically recieve theme updates. You only need the free version. You can find <a target="_blank" href="https://www.github.com/bcorlett201660/affiliate-theme-bootstrap/">install instructions here</a>.', 'sample-text-domain' ); ?></p>
        </div>
        <?php
    }
    add_action( 'admin_notices', 'admin_notice__gitupdater_not_installed' );} 
?>