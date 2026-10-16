=== Disable Animated Subsizes ===
Contributors: adamsilverstein
Tags: media, images, animation, uploads
Requires at least: 7.2
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Generates static first-frame sub-sizes for animated image uploads.

== Description ==

Prefer static thumbnails and other sub-sizes for animated images? Activate this plugin to opt out of animated sub-size generation. New sub-sizes use the first frame while the original image keeps its animation.

There are no settings. Deactivate the plugin to restore the default behavior. Existing media files are not modified.

This plugin uses the wp_generate_animated_image_subsizes filter introduced in [WordPress core PR #12572](https://github.com/WordPress/wordpress-develop/pull/12572) and [Gutenberg PR #80385](https://github.com/WordPress/gutenberg/pull/80385). It takes effect only in versions that include support for this filter and animated sub-size processing. On older versions it has no effect.

== Installation ==

1. Upload the plugin folder to /wp-content/plugins/disable-animated-subsizes/.
2. Activate the plugin through the Plugins screen in WordPress.
3. Reload any open editors before uploading images.

== Changelog ==

= 1.0.0 =
* Initial release.
