<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/peLuis123
 * @since             1.0.0
 * @package           Capacitacion_Lugin
 *
 * @wordpress-plugin
 * Plugin Name:       Capacitacion Plugin
 * Plugin URI:        https://github.com/peLuis123
 * Description:       esto es una alternativa open souce gratuita a ACFy gutember
 * Version:           1.0.0
 * Author:            Pedro Luis Ramos Calla
 * Author URI:        https://github.com/peLuis123
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       capacitacion-lugin
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
define( 'CAPACITACION_LUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-capacitacion-lugin-activator.php
 */
function activate_capacitacion_lugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-capacitacion-lugin-activator.php';
	Capacitacion_Lugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-capacitacion-lugin-deactivator.php
 */
function deactivate_capacitacion_lugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-capacitacion-lugin-deactivator.php';
	Capacitacion_Lugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_capacitacion_lugin' );
register_deactivation_hook( __FILE__, 'deactivate_capacitacion_lugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-capacitacion-lugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_capacitacion_lugin() {

	$plugin = new Capacitacion_Lugin();
	$plugin->run();

}
run_capacitacion_lugin();
