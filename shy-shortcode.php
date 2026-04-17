<?php
/*
 * Plugin Name:       [shy] Shortcode
 * Plugin URI:        https://github.com/aoshiftctrl/shy-shortcode
 * Description:       This plugin converts the shortcode [shy] in any content element into an HTML entity.
 * Version:           1.1.0
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

if (!shortcode_exists("shy")) {
    add_shortcode("shy", "shy_shortcode_output");
}

function shy_shortcode_output(): string
{
    return "&shy;";
}