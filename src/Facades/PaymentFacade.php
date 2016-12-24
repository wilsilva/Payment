<?php

namespace WilSilva\Payment\Facades;

/**
 *
 */
use Illuminate\Support\Facades\Facade;
use WilSilva\Payment\Payment;

class PaymentFacade extends Facade {

	protected static function getFacadeAccessor() {
		return Payment::class;
	}
}