<?php
/*
 * Plugin Name:       >Shy<
 * Plugin URI:        https://github.com/aoshiftctrl/shy-shortcode
 * Description:       Wandelt den Shortcode [shy] in einen weichen Trennstrich (U+00AD) um.
 * Version:           1.1.3
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

// Erst auf init und nach allen anderen: Plugins und Themes registrieren ihre
// Shortcodes meist dort, vorher findet shortcode_exists() nichts.
add_action("init", static function (): void {
	if (!shortcode_exists("shy")) {
		add_shortcode("shy", static fn(): string => "&#173;");
	}
}, PHP_INT_MAX);
