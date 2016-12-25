<?php

namespace WilSilva\Payment;

/**
 *
 */

use WilSilva\Payment\Contracts\PaymentRequest;
use WilSilva\Payment\Contracts\PaymentResponse;

class Payment {

	public function requestPayment(PaymentRequest $request): PaymentResponse {
		return $request->makePayment();
	}
}