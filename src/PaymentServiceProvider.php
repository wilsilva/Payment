<?php

namespace WilSilva\Payment;

use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->publishes([
			__DIR__ . '/Config/payment.php' => config_path('payment.php'),
		], 'config');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->mergeConfigFrom(__DIR__ . '/Config/payment.php', 'payment');

		$this->app->singleton(Payment::class, function ($app) {
			return new Payment;
		});
	}
}
