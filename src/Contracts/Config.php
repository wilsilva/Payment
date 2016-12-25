<?php
namespace WilSilva\Payment\Contracts;

interface Config {

	public function getAccountCredentials();
	public function setAccountCredentials(array $credentials);
}