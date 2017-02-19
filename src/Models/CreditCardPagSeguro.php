<?php
namespace WilSilva\Payment\Models;
/**
 *
 */

use WilSilva\Payment\Contracts\PaymentType;
use WilSilva\Payment\Models\PagSeguroPay;

class CreditCardPagSeguro extends PaymentType {

	private $nameCard;
	private $numberCreditCard;
	private $cvv;
	private $expirationDateCard;
	private $pagSeguroPay;

	function __construct(PagSeguroPay $pagSeguroPay) {
		$this->pagSeguroPay = $pagSeguroPay;
	}

	public function setNameCard(string $nameCard) {
		$this->nameCard = $nameCard;
	}

	public function getNameCard(): string {
		return $this->nameCard;
	}

	public function setNumberCredirCard(string $numberCreditCard) {
		$this->numberCreditCard = $numberCreditCard;
	}

	public function getNumberCreditCard(): string {
		return $this->numberCreditCard;
	}

	public function setCvv(int $cvv) {
		$this->cvv = $cvv;
	}

	public function getCvv(): int {
		return $this->cvv;
	}

	public function setExpirationDateCard(\DateTime $expirationDateCard) {
		$this->expirationDateCard = $expirationDateCard;
	}

	public function getExpirationDateCard(): \DateTime {
		return $this->expirationDateCard;
	}

	public function pay() {

	}
}