<?php
namespace WilSilva\Payment\Contracts;

interface Config {

	public function getAccountCredentials();

	/**
	 * @param array
	 */
	public function setAccountCredentials(array $credentials);
}