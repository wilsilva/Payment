<?php

namespace WilSilva\Payment;

/**
 *
 */

use WilSilva\Payment\Contracts\PaymentRequest;
use WilSilva\Payment\Contracts\PaymentResponse;

class Payment {

	/**
	 * @param  PaymentRequest
	 * @return PaymentResponse
	 */
	public function requestPayment(PaymentRequest $request): PaymentResponse {
		return $request->makePayment();
	}
}