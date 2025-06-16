<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://github.com/Dnprz7
 * @since      1.0.0
 *
 * @package    Macromatic_404_Detector
 * @subpackage Macromatic_404_Detector/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Macromatic_404_Detector
 * @subpackage Macromatic_404_Detector/includes
 * @author     Daniel Perez <ddaprr@gmail.com>
 */
class Macromatic_404_Detector_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'macromatic-404-detector',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
