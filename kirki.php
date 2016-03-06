<?php
/**
 * Plugin Name:   Kirki Toolkit
 * Plugin URI:    http://kirki.org
 * Description:   The ultimate WordPress Customizer Toolkit
 * Author:        Aristeides Stathopoulos
 * Author URI:    http://aristeides.com
 * Version:       2.2.0.beta.3
 * Text Domain:   kirki
 *
 * GitHub Plugin URI: aristath/kirki
 * GitHub Plugin URI: https://github.com/aristath/kirki
 *
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include the autoloader
include_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'autoloader.php' );

if ( ! function_exists( 'Kirki' ) ) {
	/**
	 * Returns the Kirki object
	 */
	function Kirki() {
		// Make sure the class is instanciated
		$kirki = Kirki_Toolkit::get_instance();
		// The path of the current Kirki instance
		Kirki::$path = wp_normalize_path( dirname( __FILE__ ) );

		return $kirki;
	}

}
global $kirki;
$kirki = Kirki();

/**
 * Apply the filters to the Kirki::$url
 */
if ( ! function_exists( 'kirki_filtered_url' ) ) {
	function kirki_filtered_url() {
		$config = apply_filters( 'kirki/config', array() );
		if ( isset( $config['url_path'] ) ) {
			Kirki::$url = esc_url_raw( $config['url_path'] );
		}
	}
	add_action( 'after_setup_theme', 'kirki_filtered_url' );
}

include_once( Kirki::$path . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'deprecated.php' );
// Include the API class
include_once( Kirki::$path . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'class-kirki.php' );

if ( ! function_exists( 'kirki_load_textdomain' ) ) {
	/**
	 * Load plugin textdomain.
	 *
	 * @since 0.8.0
	 */
	function kirki_load_textdomain() {
		$textdomain = 'kirki';

		// Look for WP_LANG_DIR/{$domain}-{$locale}.mo
		if ( file_exists( WP_LANG_DIR . '/' . $textdomain . '-' . get_locale() . '.mo' ) ) {
			$file = WP_LANG_DIR . '/' . $textdomain . '-' . get_locale() . '.mo';
		}
		// Look for Kirki::$path/languages/{$domain}-{$locale}.mo
		if ( ! isset( $file ) && file_exists( Kirki::$path . DIRECTORY_SEPARATOR . 'languages' . DIRECTORY_SEPARATOR . $textdomain . '-' . get_locale() . '.mo' ) ) {
			$file = Kirki::$path . DIRECTORY_SEPARATOR . 'languages' . DIRECTORY_SEPARATOR . $textdomain . '-' . get_locale() . '.mo';
		}

		if ( isset( $file ) ) {
			load_textdomain( $textdomain, $file );
		}

		load_plugin_textdomain( $textdomain, false, Kirki::$path . DIRECTORY_SEPARATOR . 'languages' );
	}
	add_action( 'plugins_loaded', 'kirki_load_textdomain' );
}

// Include the ariColor library
include_once( wp_normalize_path( Kirki::$path . '/includes/lib/class-aricolor.php' ) );

// Add an empty config for global fields
Kirki::add_config( '' );
