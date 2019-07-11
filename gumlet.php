<?php
/**
 * WordPress plugin for gumlet service.
 *
 * @package gumlet-wordpress
 * @author adityapatadia
 * @license BSD-2
 *
 * @wordpress-plugin
 *
 * Plugin Name: Gumlet
 * Plugin URI:  https://github.com/gumlet/wordpress-plugin
 * Description: A WordPress plugin to automatically use your existing (and future) WordPress images from <a href="http://www.gumlet.com" target="_blank">Gumlet</a> for smaller, faster, and better looking images. <a href="https://github.com/gumlet/wordpress-plugin" target="_blank">Learn more</a>.
 * Version:     1.0.0
 * Author:      Aditya Patadia
 * Author URI:  http://github.com/adityapatadia
 */

include( 'includes/compability.php' );
include( 'includes/class-gumlet.php' );
include( 'includes/options-page.php' );

function gumlet_plugin_admin_action_links( $links, $file ) {
	if ( $file === plugin_basename( __FILE__ ) ) {
		$settings_link = '<a href="options-general.php?page=gumlet-options">Settings</a>';
		array_unshift( $links, $settings_link );
	}

	return $links;
}

add_filter( 'plugin_action_links', 'gumlet_plugin_admin_action_links', 10, 2 );
