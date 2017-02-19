<?php

namespace WilSilva\Payment\Configs;

/**
 */
use PagSeguro\Configuration\Configure;
use PagSeguro\Library;
use PagSeguro\Services\Session;
use WilSilva\Payment\Contracts\Config;
use WilSilva\Payment\Exception\PagSeguroSessionException;

class PagSeguroConfig implements Config {

	public static $companyName;
	public static $release;
	public static $environment;
	public static $email;
	public static $token;
	public static $charset;
	public static $logActive;
	public static $logLocation;

	public function __construct() {

		if (!$this->attributesIsLoaded()) {
			$this->loadAttributesConfig();
		}

		$this->loadPagSeguroSDK();
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
	/**
	 * @param array
	 */
	public function setAccountCredentials(array $credentials) {
		if (array_key_exists('email', $credentials) && array_key_exists('token', $credentials)) {
			Configure::setAccountCredentials($credentials['email'], $credentials['token']);
		} else {
			throw new CredentialsInvalidException("Error sending credential parameters.");

		}
	}

	public function loadPagSeguroSDK() {
		Library::initialize();
		Library::cmsVersion()
			->setName(self::$companyName)
			->setRelease(self::$release);

		Configure::setEnvironment(self::$environment);
		Configure::setAccountCredentials(self::$email, self::$token);
		Configure::setCharset(self::$charset); // UTF-8 or ISO-8859-1
		Configure::setLog(self::$logActive, self::$logLocation);
	}

	/**
	 * @return boolean
	 */
	public function attributesIsLoaded() {

		if (empty(self::$companyName) || empty(self::$release) || empty(self::$environment) || empty(self::$email)
			|| empty(self::$token) || empty(self::$charset) || empty(self::$logActive) || empty(self::$logLocationg)) {
			return false;
		}

		return true;
	}

	public function loadAttributesConfig() {

		self::$companyName = config('payment.pagseguro.company_name');
		self::$release = config('payment.pagseguro.release');
		self::$environment = config('payment.pagseguro.environment');
		self::$email = config('payment.pagseguro.email');
		self::$token = (config('payment.pagseguro.environment') == 'production')
		? config('payment.pagseguro.token_production')
		: config('token_sandbox');
		self::$charset = config('payment.pagseguro.charset'); // UTF-8 or ISO-8859-1
		self::$logActive = config('payment.pagseguro.log_active');
		self::$logLocation = config('payment.pagseguro.log_location');
	}

}