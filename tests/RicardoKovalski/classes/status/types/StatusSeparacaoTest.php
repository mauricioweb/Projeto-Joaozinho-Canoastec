<?php

namespace src\RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\types\StatusSeparacao as StatusSeparacao;
use \PHPUnit_Framework_TestCase;

class StatusSeparacaoTest extends PHPUnit_Framework_TestCase{

	public function testDeveRetornarStatusSeparacao(){

		$statusSeparacao = new StatusSeparacao();
		$this->assertEquals("Em separação", $statusSeparacao->getStatus());
	}

}