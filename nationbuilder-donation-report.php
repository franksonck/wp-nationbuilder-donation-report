<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://blog.guilro.com
 * @since             1.0.0
 * @package           Nationbuilder_Donation_Report
 *
 * @wordpress-plugin
 * Plugin Name:       NationBuidler Donation Report
 * Plugin URI:        https://
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Guillaume Royer
 * Author URI:        http://blog.guilro.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nationbuilder-donation-report
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nationbuilder-donation-report-activator.php
 */
function activate_nationbuilder_donation_report() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nationbuilder-donation-report-activator.php';
	Nationbuilder_Donation_Report_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nationbuilder-donation-report-deactivator.php
 */
function deactivate_nationbuilder_donation_report() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nationbuilder-donation-report-deactivator.php';
	Nationbuilder_Donation_Report_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nationbuilder_donation_report' );
register_deactivation_hook( __FILE__, 'deactivate_nationbuilder_donation_report' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nationbuilder-donation-report.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nationbuilder_donation_report() {

	$plugin = new Nationbuilder_Donation_Report();
	$plugin->run();

}
run_nationbuilder_donation_report();
