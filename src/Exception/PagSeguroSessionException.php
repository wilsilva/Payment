<?php

namespace WilSilva\Payment\Exception;
/**
 *
 */
class PagSeguroSessionException extends \Exception {

	public function __construct(string $mensagem, int $codigo = null) {
		parent::__construct($mensagem, $codigo);
	}
}