<?php
/**
 * Plugin Name:     Hetas Gravity Forms Redirect
 * Plugin URI:      https://www.hetas.co.uk
 * Description:     Redirects for Gravity Forms
 * Author:          Elliott Richmond
 * Author URI:      https://squareone.software
 * Text Domain:     hetas-gravity-forms-redirect
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Hetas_Gravity_Forms_Redirect
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'gform_paypal_return_url', 'update_url', 10, 4 );
function update_url( $url, $form_id, $entry_id, $query ) {

    if($form_id == 27) {
        $url = trailingslashit( site_url() . '/thank-you-for-your-application/' ) . '?' . $query;
    }

    return $url;
 
}