<?php

namespace WilSilva\Payment\Controllers;

/**
 *
 */

use WilSilva\Payment\Contracts\PaymentRequest;
use WilSilva\Payment\Contracts\PaymentResponse;
use WilSilva\Payment\Contracts\PaymentType;

class RequestPagSeguro implements PaymentRequest {

	private $paymentType;

	/**
	 * @param PaymentType
	 */
	public function __construct(PaymentType $paymentType) {
		$this->paymentType = $paymentType;
	}

	/**
	 * @return PaymentResponse
	 */
	public function makePayment(): PaymentResponse{

		$pagSeguroResponse = $this->paymentType->pay();

		$response = new ResponsePagseguro();
		$response->setCodeTransaction($pagSeguroResponse->getCode());
		$response->setStatus($pagSeguroResponse->getStatus());

		return $response;
	}
	/**
	 * @return PaymentType
	 */
	public function getPaymentType(): PaymentType {
		return $this->paymentType;
	}

	/**
	 * @param PaymentType
	 */
	public function setPaymentType(PaymentType $paymentType) {
		$this->paymentType = $paymentType;
	}
}