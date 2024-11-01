<?php
/**
* Generated code
*
* Create the AdSense code from passed parameters
*
* @package	Artiss-AdSense-Insert
*/

/**
* Adsense Insert
*
* Generate adsense code, based on passed parameters
*
* @since	1.3
*
* @uses		aai_get_parameters      Extract parameters
* @uses     aai_report_error        Display an error
*
* @param    string  $paras_in       List of parameters, ampersand seperated
*/

function artiss_adsense_insert( $paras_in = '' ) {

    $plugin_name = 'Artiss Adsense Insert';

    // Extract the parameters

    $ad_client = aai_get_parameters( $paras_in, 'client' );
    $ad_slot   = aai_get_parameters( $paras_in, 'slot' );
    $ad_width  = aai_get_parameters( $paras_in, 'width' );
    $ad_height = aai_get_parameters( $paras_in, 'height' );

    // Report an error if parameters are missing

    if ( ( $ad_client == '' ) or ( $ad_slot == '' ) or ( $ad_width == '' ) or ( $ad_height == '' ) ) {
        echo aai_report_error( 'Missing AdSense Data', $plugin_name, false );
    } else {

        // Output Adsense code

        $newline = "\n";
        echo $newline . '<!-- ' . $plugin_name . ' v' . artiss_adsense_insert_version . ' | http://www.artiss.co.uk/adsense-insert -->' . $newline;
        echo '<script type="text/javascript"><!--' . $newline;
        echo 'google_ad_client="' . $ad_client . '"; ';
        echo 'google_ad_slot="' . $ad_slot . '"; ';
        echo 'google_ad_width=' . $ad_width . '; ';
        echo 'google_ad_height=' . $ad_height . ';' . $newline;
        echo '//-->' . $newline;
        echo '</script>' . $newline;
        echo '<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>' . $newline;
        echo '<!-- End of ' . $plugin_name . ' -->' . $newline;
    }
    return;
}
?>