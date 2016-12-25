<?php

namespace WilSilva\Payment;

/**
 *
 */

use WilSilva\Contracts\PaymentRequest;
use WilSilva\Contracts\PaymentResponse;

class Payment {

	public function requestPayment(PaymentRequest $request): PaymentResponse {
		return $request->makePayment();
	}
}