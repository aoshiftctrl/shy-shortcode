<?php
/*
 * Plugin Name:       [shy] Shortcode
 * Plugin URI:        https://github.com/aoshiftctrl/shy-shortcode
 * Description:       Wandelt den Shortcode [shy] in einen weichen Trennstrich (U+00AD) um.
 * Version:           1.1.1
 * Requires at least: 5.2
 * Requires PHP:      8.0
 * Author:            aoshiftctrl
 * Author URI:        https://github.com/aoshiftctrl
 * License:           CC BY-ND 4.0
 * License URI:       https://creativecommons.org/licenses/by-nd/4.0/
 * Text Domain:       shy-shortcode
 */

if (!defined("ABSPATH")) {
	exit;
}

if (!function_exists("shy_shortcode_output")) {
	function shy_shortcode_output(): string
	{
		return "&shy;";
	}
}

if (!shortcode_exists("shy")) {
	add_shortcode("shy", "shy_shortcode_output");
}
