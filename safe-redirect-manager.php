<?php
/**
 * Plugin Name: Bestwebsite Redirect URL
 * Plugin URI: https://github.com/bestwebsite/redirect-url
 * Description: Easily and safely manage HTTP redirects.
 * Author: Bestwebsite
 * Version: 1.0
 * Text Domain: redirect-url
 * Author URI: https://bestwebsite.com
 */
function bestwebsite_textdomain() {
	load_plugin_textdomain( 'redirect-url', false, dirname( __FILE__ ) . '/lang' );
}
add_action( 'plugins_loaded', 'bestwebsite_textdomain' );

require_once dirname( __FILE__ ) . '/inc/functions.php';
require_once dirname( __FILE__ ) . '/inc/classes/class-bestwebsite-post-type.php';
require_once dirname( __FILE__ ) . '/inc/classes/class-bestwebsite-redirect.php';


if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once dirname( __FILE__ ) . '/inc/classes/class-bestwebsite-wp-cli.php';
	WP_CLI::add_command( 'redirect-url', 'bestwebsite_WP_CLI' );
}

bestwebsite_Post_Type::factory();
bestwebsite_Redirect::factory();
