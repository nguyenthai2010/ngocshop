<?php
// Link: http://docs.easydigitaldownloads.com/category/504-hooks
// output our custom field HTML :
function pippin_edd_custom_checkout_fields() {
    ?>
    <p id="edd-phone-wrap">
        <label class="edd-label" for="edd-phone"><?php _e('Contact Number', 'pippin_edd'); ?></label>
        <span class="edd-description"><?php _e( 'Enter your phone number so we can get in touch with you.', 'pippin_edd' ); ?></span>
        <input class="edd-input" type="text" name="edd_phone" id="edd-phone" placeholder="<?php _e('Contact Number', 'pippin_edd'); ?>" value=""/>
    </p>
    <p id="edd-phone-wrap">
        <label class="edd-label" for="edd-company"><?php _e('Company Name', 'pippin_edd'); ?></label>
        <span class="edd-description"><?php _e( 'Enter the name of your company.', 'pippin_edd' ); ?></span>
        <input class="edd-input" type="text" name="edd_company" id="edd-company" placeholder="<?php _e('Company Name', 'pippin_edd'); ?>" value=""/>
    </p>
<?php
}
add_action('edd_checks_cc_form', 'pippin_edd_custom_checkout_fields');

// check for errors with out custom fields
function pippin_edd_validate_custom_fields($valid_data, $data) {
   /* if( empty( $data['edd_phone'] ) ) {
        // check for a phone number
        edd_set_error( 'invalid_phone', __('Please provide your phone number.', 'pippin_edd') );
    }
    if( empty( $data['edd_company'] ) ) {
        // check for a phone number
        edd_set_error( 'invalid_company', __('Please provide a company name.', 'pippin_edd') );
    }*/
}
add_action('edd_checkout_error_checks', 'pippin_edd_validate_custom_fields', 10, 2);

// store the custom field data in the payment meta
function pippin_edd_store_custom_fields($payment_meta) {
    $payment_meta['phone']   = isset( $_POST['edd_phone'] ) ? sanitize_text_field( $_POST['edd_phone'] ) : '';
    $payment_meta['company'] = isset( $_POST['edd_company'] ) ? sanitize_text_field( $_POST['edd_company'] ) : '';
    return $payment_meta;
}
add_filter('edd_payment_meta', 'pippin_edd_store_custom_fields');

// show the custom fields in the "View Order Details" popup
function pippin_edd_purchase_details($payment_meta, $user_info) {
    $phone   = isset( $payment_meta['phone'] ) ? $payment_meta['phone'] : 'none';
    $company = isset( $payment_meta['company'] ) ? $payment_meta['company'] : 'none';
    ?>
    <li><?php echo __('Phone:', 'pippin_edd') . ' ' . $phone; ?></li>
    <li><?php echo __('Company:', 'pippin_edd') . ' ' . $company; ?></li>

<?php
}
add_action('edd_payment_personal_details_list', 'pippin_edd_purchase_details', 10, 2);