<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Bancontact Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Boleto extends WC_Stripe_UPE_Payment_Method {

	const STRIPE_ID = 'boleto';

	const LPM_GATEWAY_CLASS = WC_Gateway_Stripe_Boleto::class;

	/**
	 * Constructor for Boleto payment method
	 */
	public function __construct() {
		parent::__construct();
		$this->stripe_id            = self::STRIPE_ID;
		$this->title                = 'Pay with Boleto';
		$this->is_reusable          = true;
		$this->supported_currencies = [ 'BRL' ];
		$this->label                = __( 'Boleto', 'woocommerce-gateway-stripe' );
		$this->description          = __(
			'Boleto is one of the most popular payment method in Brazil',
			'woocommerce-gateway-stripe'
		);
	}
}
