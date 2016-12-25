<?php

namespace WilSilva\Payment\Controllers;

/**
 *
 */

use WilSilva\Payment\Contracts\PaymentRequest;
use WilSilva\Payment\Contracts\PaymentResponse;
use WilSilva\Payment\Contracts\PaymentType;

class PagSeguroRequest implements PaymentRequest {

	private $paymentType;

	public function __construct(PaymentType $paymentType) {
		$this->paymentType = $paymentType;
	}

	public function makePayment(): PaymentResponse {

	}

	public function getPaymentType(): PaymentType {
		return $this->paymentType;
	}

	public function setPaymentType(PaymentType $paymentType) {
		$this->paymentType = $paymentType;
	}
}