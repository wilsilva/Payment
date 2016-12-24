<?php

/**
 *
 */

namespace WilSilva\Contracts;

interface PaymentRequest {

	public function makePayment(): PaymentResponse;
}