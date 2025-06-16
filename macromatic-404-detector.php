<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/Dnprz7
 * @since             1.0.0
 * @package           Macromatic_404_Detector
 *
 * @wordpress-plugin
 * Plugin Name:       Macromatic - 404 Detector
 * Plugin URI:        https://https://github.com/Dnprz7/macromatic-404-detector
 * Description:       Place holder for description
 * Version:           1.0.0
 * Author:            Daniel Perez
 * Author URI:        https://https://github.com/Dnprz7/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       macromatic-404-detector
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
define( 'MACROMATIC_404_DETECTOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-macromatic-404-detector-activator.php
 */
function activate_macromatic_404_detector() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-macromatic-404-detector-activator.php';
	Macromatic_404_Detector_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-macromatic-404-detector-deactivator.php
 */
function deactivate_macromatic_404_detector() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-macromatic-404-detector-deactivator.php';
	Macromatic_404_Detector_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_macromatic_404_detector' );
register_deactivation_hook( __FILE__, 'deactivate_macromatic_404_detector' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-macromatic-404-detector.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_macromatic_404_detector() {

	$plugin = new Macromatic_404_Detector();
	$plugin->run();

}
run_macromatic_404_detector();
