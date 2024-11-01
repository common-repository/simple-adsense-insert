<?php
/**
* Shared Functions
*
* Assorted functions that are used throughout the code
*
* @package	Artiss-AdSense-Insert
*/

/**
* Original Adsense insert function
*
* Original function to generated Adsense code - now calls new function, but left
* for reasons of compatibility
*
* @deprecated	1.3		                Use artiss_adsense_insert() instead
* @since	    1.0
*
* @uses		    aai_get_parameters      Extract parameters
* @uses         adsense_insert          Generate Adsense insert
*
* @param        string      $paras_in   List of parameters OR advert client
* @param        string      $ad_slot    Advert slot
* @param        string      $ad_width   Width of advert
* @param        string      $ad_height  Height of advert
*/

function simple_adsense_insert( $paras_in = '', $ad_slot = '', $ad_width = '', $ad_height = '' ) {

    // Extract parameters
    
    $ad_client = aai_get_parameters( $paras_in, 'client' );
    if ( $ad_client == '' ) {
        $ad_client = $paras_in;
    } else {
        $ad_slot = aai_get_parameters( $paras_in, 'slot' );
        $ad_width = aai_get_parameters( $paras_in, 'width' );
        $ad_height = aai_get_parameters( $paras_in, 'height' );
    }

    // Combine all the parameters
    
    $paras_out = 'client=' . $ad_client . '&slot=' . $ad_slot . '&width=' . $ad_width . '&height=' . $ad_height;

    // Call the code creation routine, passing the combined parameters
    
    artiss_adsense_insert( $paras_out );
    return;
}
?>