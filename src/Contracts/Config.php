<?php
namespace WilSilva\Contracts;

interface Config{
	
	public function getAccountCredentials();
	public function setAccountCredentials(string $email, string $token);
}