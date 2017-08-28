<?php
<<<<<<< HEAD
# WP SUPER CACHE 1.2
function wpcache_broken_message() {
	global $wp_cache_config_file;
	if ( isset( $wp_cache_config_file ) == false )
		return '';

	$doing_ajax =     defined( 'DOING_AJAX' ) && DOING_AJAX;
	$xmlrpc_request = defined( 'XMLRPC_REQUEST' ) && XMLRPC_REQUEST;
	$rest_request =   defined( 'REST_REQUEST' ) && REST_REQUEST;

	$skip_output = ( $doing_ajax || $xmlrpc_request || $rest_request );
	if ( false == strpos( $_SERVER[ 'REQUEST_URI' ], 'wp-admin' ) && !$skip_output ) {
		echo "<!-- WP Super Cache is installed but broken. The constant WPCACHEHOME must be set in the file wp-config.php and point at the WP Super Cache plugin directory. -->";
	}
}

if ( false == defined( 'WPCACHEHOME' ) ) {
	define( 'ADVANCEDCACHEPROBLEM', 1 );
} elseif ( !include_once( WPCACHEHOME . 'wp-cache-phase1.php' ) ) {
	if ( !@is_file( WPCACHEHOME . 'wp-cache-phase1.php' ) ) {
		define( 'ADVANCEDCACHEPROBLEM', 1 );
	}
}
if ( defined( 'ADVANCEDCACHEPROBLEM' ) )
	register_shutdown_function( 'wpcache_broken_message' );
?>
=======

/**
 * W3 Total Cache advanced cache module
 */
if ( !defined( 'ABSPATH' ) ) {
	die();
}

global $w3tc_start_microtime;
$w3tc_start_microtime = microtime( true );

/**
 * Abort W3TC loading if WordPress is upgrading
 */
if ( defined( 'WP_INSTALLING' ) && WP_INSTALLING )
	return;

if ( !defined( 'W3TC_IN_MINIFY' ) ) {
	if ( !defined( 'W3TC_DIR' ) ) {
		define( 'W3TC_DIR', ( defined( 'WP_PLUGIN_DIR' ) ? WP_PLUGIN_DIR : WP_CONTENT_DIR . '/plugins' ) . '/w3-total-cache' );
	}

	if ( !@is_dir( W3TC_DIR ) || !file_exists( W3TC_DIR . '/w3-total-cache-api.php' ) ) {
		if ( defined( 'WP_ADMIN' ) ) { // lets don't show error on front end
			echo sprintf( '<strong>W3 Total Cache Error:</strong> some files appear to be missing or out of place. Please re-install plugin or remove <strong>%s</strong>. <br />', __FILE__ );
		}
	} else {
		require_once W3TC_DIR . '/w3-total-cache-api.php';

		$w3tc_redirect = \W3TC\Dispatcher::component( 'Mobile_Redirect' );
		$w3tc_redirect->process();

		$w3tc_config = \W3TC\Dispatcher::config();
		if ( $w3tc_config->get_boolean( 'pgcache.enabled' ) ) {
			$o = \W3TC\Dispatcher::component( 'PgCache_ContentGrabber' );
			$o->process();
		}
	}
}
>>>>>>> 4809a21c72510ce8807f00ea8debf5f7e9af63ca
