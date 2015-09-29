<?php

namespace src\RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\types\StatusAguardando as StatusAguardando;
use \PHPUnit_Framework_TestCase;

class StatusAguardandoTest extends PHPUnit_Framework_TestCase{

	public function testDeveRetornarStatusAguardandoAprovacao(){

		$statusAguardando = new StatusAguardando();
		$this->assertEquals("Aguardando aprovação", $statusAguardando->getStatus());
	}

}