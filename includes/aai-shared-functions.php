<?php
/**
* Shared Functions
*
* Assorted functions that are used throughout the code
*
* @package	Artiss-AdSense-Insert
*/

/**
* Extract Parameters
*
* Function to extract parameters from an input string
*
* @since	1.3
*
* @param	string      $input	        Input string
* @param	string      $para           Parameter to find
* @return	string                      Parameter value
*/

function aai_get_parameters( $input, $para, $divider = '=', $seperator = '&' ) {

    $start = strpos( strtolower( $input ), $para . $divider);
    $content = '';

    if ( $start !== false ) {
        $start = $start + strlen( $para ) + 1;
        $end = strpos( strtolower( $input ), $seperator, $start );
        if ( $end !== false ) { $end = $end - 1; } else { $end = strlen( $input ); }
        $content = substr( $input, $start, $end - $start + 1 );
    }

    return $content;
}

/**
* Report an error
*
* Function to report an error
*
* @since	1.3
*
* @param	string      $error		    Error message
* @param	string      $plugin_name    The name of the plugin
* @param	string      $echo			True or false, depending on whether you wish to return or echo the results
* @return	string	                    True
*/

function aai_report_error( $error, $plugin_name, $echo = true ) {

	$output = '<p style="color: #f00; font-weight: bold;">' . $plugin_name . ': ' . __( $error ) . "</p>\n";

	if ( $echo ) {
		echo $output;
		return true;
	} else {
		return $output;
	}
}
?>