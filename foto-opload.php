<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.darriusserrant.com
 * @since             1.0.0
 * @package           Foto_Opload
 *
 * @wordpress-plugin
 * Plugin Name:       FotoOpload
 * Plugin URI:        https://www.fotopload.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Darrius Serrant
 * Author URI:        https://www.darriusserrant.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       foto-opload
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FOTO_OPLOAD_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-foto-opload-activator.php
 */
function activate_foto_opload() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-foto-opload-activator.php';
	Foto_Opload_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-foto-opload-deactivator.php
 */
function deactivate_foto_opload() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-foto-opload-deactivator.php';
	Foto_Opload_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_foto_opload' );
register_deactivation_hook( __FILE__, 'deactivate_foto_opload' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-foto-opload.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_foto_opload() {

	$plugin = new Foto_Opload();
	$plugin->run();

}
run_foto_opload();
