<?php

/**
 *
 */

namespace WilSilva\Payment\Contracts;

interface PaymentRequest {

	public function makePayment(): PaymentResponse;
}