<?php
/**
 * Plugin Name: Disable Animated Subsizes
 * Plugin URI:  https://github.com/adamsilverstein/disable-animated-subsizes
 * Description: Generates static first-frame sub-sizes for animated image uploads.
 * Version:     1.0.0
 * Requires at least: 7.2
 * Requires PHP: 7.4
 * Author:      Adam Silverstein
 * Author URI:  https://profiles.wordpress.org/adamsilverstein/
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: disable-animated-subsizes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'wp_generate_animated_image_subsizes', '__return_false' );
