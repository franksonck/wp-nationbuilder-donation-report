<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://blog.guilro.com
 * @since      1.0.0
 *
 * @package    Nationbuilder_Donation_Report
 * @subpackage Nationbuilder_Donation_Report/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Nationbuilder_Donation_Report
 * @subpackage Nationbuilder_Donation_Report/includes
 * @author     Guillaume Royer <perso@guilro.com>
 */
class Nationbuilder_Donation_Report_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'nationbuilder-donation-report',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
