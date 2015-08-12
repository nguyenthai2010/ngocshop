<?php
/*
Plugin Name: Easy Digital Downloads - Sample Gateway
Plugin URL: http://easydigitaldownloads.com/extension/sample-gateway
Description: A sample gateway for Easy Digital Downloads
Version: 1.0
Author: Pippin Williamson
Author URI: http://pippinsplugins.com
Contributors: mordauk
*/

// Don't forget to load the text domain here. Sample text domain is pw_edd


// registers the gateway
function pw_edd_register_gateway( $gateways ) {
	$gateways['sample_gateway'] = array( 'admin_label' => 'Sample Gateway', 'checkout_label' => __( 'Sample Gateway', 'pw_edd' ) );
	return $gateways;
}
add_filter( 'edd_payment_gateways', 'pw_edd_register_gateway' );


// Remove this if you want a credit card form
add_action( 'edd_sample_gateway_cc_form', '__return_false' );


// processes the payment
function pw_edd_process_payment( $purchase_data ) {

	global $edd_options;

	/**********************************
	* set transaction mode
	**********************************/

	if ( edd_is_test_mode() ) {
		// set test credentials here
	} else {
		// set live credentials here
	}

	/**********************************
	* check for errors here
	**********************************/

	/*
	// errors can be set like this
	if( ! isset($_POST['card_number'] ) ) {
		// error code followed by error message
		edd_set_error('empty_card', __('You must enter a card number', 'edd'));
	}
	*/


	/**********************************
	* Purchase data comes in like this:

    $purchase_data = array(
        'downloads'     => array of download IDs,
        'tax' 			=> taxed amount on shopping cart
        'fees' 			=> array of arbitrary cart fees
        'discount' 		=> discounted amount, if any
        'subtotal'		=> total price before tax
        'price'         => total price of cart contents after taxes,
        'purchase_key'  =>  // Random key
        'user_email'    => $user_email,
        'date'          => date( 'Y-m-d H:i:s' ),
        'user_id'       => $user_id,
        'post_data'     => $_POST,
        'user_info'     => array of user's information and used discount code
        'cart_details'  => array of cart details,
     );
    */

	// check for any stored errors
	$errors = edd_get_errors();
	if ( ! $errors ) {

		$purchase_summary = edd_get_purchase_summary( $purchase_data );

		/****************************************
		* setup the payment details to be stored
		****************************************/

		$payment = array(
			'price'        => $purchase_data['price'],
			'date'         => $purchase_data['date'],
			'user_email'   => $purchase_data['user_email'],
			'purchase_key' => $purchase_data['purchase_key'],
			'currency'     => $edd_options['currency'],
			'downloads'    => $purchase_data['downloads'],
			'cart_details' => $purchase_data['cart_details'],
			'user_info'    => $purchase_data['user_info'],
			'status'       => 'pending'
		);

		// record the pending payment
		$payment = edd_insert_payment( $payment );

		$merchant_payment_confirmed = false;

		/**********************************
		* Process the credit card here.
		* If not using a credit card
		* then redirect to merchant
		* and verify payment with an IPN
		**********************************/

		// if the merchant payment is complete, set a flag
		$merchant_payment_confirmed = true;

		if ( $merchant_payment_confirmed ) { // this is used when processing credit cards on site

			// once a transaction is successful, set the purchase to complete
			edd_update_payment_status( $payment, 'complete' );

			// record transaction ID, or any other notes you need
			edd_insert_payment_note( $payment, 'Transaction ID: XXXXXXXXXXXXXXX' );

			// go to the success page
			edd_send_to_success_page();

		} else {
			$fail = true; // payment wasn't recorded
		}

	} else {
		$fail = true; // errors were detected
	}

	if ( $fail !== false ) {
		// if errors are present, send the user back to the purchase page so they can be corrected
		edd_send_back_to_checkout( '?payment-mode=' . $purchase_data['post_data']['edd-gateway'] );
	}
}
add_action( 'edd_gateway_sample_gateway', 'pw_edd_process_payment' );


