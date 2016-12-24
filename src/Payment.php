<?php

namespace WilSilva\Payment;

/**
 *
 */

namespace WilSilva\Payment;

class Payment {

	public function requestPayment(PaymentRequest $request) {
		return $request->makePayment();
	}
}