<?php
/*
Plugin Name: Artiss AdSense Insert
Plugin URI: http://www.artiss.co.uk/adsense-insert
Description: Displays an AdSense advert in your WordPress blog
Version: 1.3.1
Author: David Artiss
Author URI: http://www.artiss.co.uk
*/

/**
* Artiss AdSense Insert
*
* Display AdSense Advert
*
* @package	Artiss-AdSense-Insert
* @since	1.3
*/

define( 'artiss_adsense_insert', '1.3.1' );

$functions_dir = WP_PLUGIN_DIR . '/simple-adsense-insert/includes/';

if ( is_admin() ) {

	include_once( $functions_dir . 'aai-admin-config.php' );				// Administration config

} else {

    include_once( $functions_dir . 'aai-shared-functions.php' );			// Shared code

	include_once( $functions_dir . 'aai-generate-code.php' );				// Code to output AdSense

	include_once( $functions_dir . 'aai-deprecated.php' );					// Deprecated function

}
?>