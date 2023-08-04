<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/peLuis123
 * @since      1.0.0
 *
 * @package    Capacitacion_Lugin
 * @subpackage Capacitacion_Lugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Capacitacion_Lugin
 * @subpackage Capacitacion_Lugin/includes
 * @author     Pedro Luis Ramos Calla <pedrorc2018@gmail.com>
 */
class Capacitacion_Lugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'capacitacion-lugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
