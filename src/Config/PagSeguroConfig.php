<?php

namespace WilSilva\Payment\Config;

/**
 */
use PagSeguro\Configuration\Configure;
use PagSeguro\Library;
use PagSeguro\Services\Session;
use WilSilva\Contracts\Config;
use WilSilva\Exception\PagSeguroSessionException;

class PagSeguroConfig implements Config {

	public function __construct() {

		Library::initialize();
		Library::cmsVersion()
			->setName(config('payment.pagseguro.company_name'))
			->setRelease('1.0.0');

		Configure::setEnvironment(config('payment.pagseguro.environment'));
		Configure::setAccountCredentials(
			config('payment.pagseguro.email'),
			(config('payment.pagseguro.environment') == 'production')
			? config('payment.pagseguro.token_production')
			: config('token_sandbox'));
		Configure::setCharset(config('payment.pagseguro.charset')); // UTF-8 or ISO-8859-1
		Configure::setLog(config('payment.pagseguro.log_active'),
			config('payment.pagseguro.log_location'));
	}

	public function createSession() {
		try {
			return Session::create(Configure::getAccountCredentials());
		} catch (\Exception $erro) {
			throw new PagSeguroSessionException($erro->getMessage(), $erro->getCode());
		}
	}

	public function getAccountCredentials() {
		return Configure::getAccountCredentials();
	}

	public function setAccountCredentials(array $credentials) {
		if (array_key_exists('email', $credentials) && array_key_exists('token', $credentials)) {
			Configure::setAccountCredentials($credentials['email'], $credentials['token']);
		} else {
			throw new CredentialsInvalidException("Error sending credential parameters.");

		}
	}

}