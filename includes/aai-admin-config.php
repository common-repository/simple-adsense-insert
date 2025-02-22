<?php
/**
* Admin Menu Functions
*
* Various functions relating to the various administration screens
*
* @package	Artiss-AdSense-Insert
*/

/**
* Add meta to plugin details
*
* Add options to plugin meta line
*
* @since	1.3
*
* @param	string  $links	Current links
* @param	string  $file	File in use
* @return   string			Links, now with settings added
*/

function aai_set_plugin_meta( $links, $file ) {

	if ( strpos( $file, 'simple-adsense-insert.php' ) !== false ) {
		$links = array_merge( $links, array( '<a href="http://www.artiss.co.uk/forum">' . __( 'Support' ) . '</a>' ) );
		$links = array_merge( $links, array( '<a href="http://www.artiss.co.uk/donate">' . __( 'Donate' ) . '</a>' ) );
	}

	return $links;
}
add_filter( 'plugin_row_meta', 'aai_set_plugin_meta', 10, 2 );
?>