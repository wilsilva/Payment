<?php

/**
 *
 */

namespace WilSilva\Payment\Contracts;

interface PaymentRequest {

	/**
	 * @return PaymentResponse
	 */
	public function makePayment(): PaymentResponse;
}