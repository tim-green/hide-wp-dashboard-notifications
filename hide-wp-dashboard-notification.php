<?php
/**
 * Plugin Name: Hide WP Dashboard Notifications
 * Plugin URI:  https://github.com/buddhikaperera/Hide-WordPress-Dashboard-Notifications
 * Description: A plugin to remove Core, Theme and Plugin Notifications from the WordPress Dashboard
 * Author:      Tim Green
 * Author URI:  https://www.timgreen.ws
 * Version:     1.0
 * Text Domain: hwpdn
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

 // If this file is called directly, abort.
 if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }

// hide update notifications
function remove_core_updates () {
     global $wp_version;
     return(object) array(
          'last_checked'=> time(),
          'version_checked'=> $wp_version,
          'updates' => array()
     );
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');
