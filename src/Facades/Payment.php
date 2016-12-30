<?php

namespace WilSilva\Payment\Facades;

/**
 *
 */
use Illuminate\Support\Facades\Facade;
use WilSilva\Payment\Payment as Pay;

class Payment extends Facade {

	protected static function getFacadeAccessor() {
		return Pay::class;
	}
}