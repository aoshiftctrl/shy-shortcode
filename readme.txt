=== [shy] Shortcode ===
Contributors: aoshiftctrl
Tags: shortcode, typography, shy, hyphenation
Requires at least: 5.2
Tested up to: 6.8
Stable tag: 1.1.0
Requires PHP: 8.0
License: CC BY-ND 4.0
License URI: https://creativecommons.org/licenses/by-nd/4.0/

This plugin converts the shortcode [shy] in any content element into an HTML entity.

== Description ==

This ultra lightweight plugin registers a single shortcode [shy] that outputs the soft hyphen HTML entity "&shy;". Useful for controlling line breaks in long words within block editors.

**Usage:**

Add [shy] anywhere in your content where you want a soft hyphen:
Donau[shy]dampf[shy]schiff[shy]fahrts[shy]gesellschaft

== Installation ==

1. Upload the plugin folder to `/wp-content/plugins/`
2. Activate the plugin via `Plugins` in WordPress admin
3. Use `[shy]` in any post or page content

== Frequently Asked Questions ==

= Does this work with the Block Editor (Gutenberg)? =

Yes. Use, Gutenberg is the best.

= Does it affect SEO? =

No. Soft hyphens are invisible to search engines and screen readers.

== Changelog ==

= 1.1.0 =
* Added ABSPATH guard
* Added shortcode_exists() check to prevent conflicts

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.1.0 =
Minor hardening update. Safe to upgrade.