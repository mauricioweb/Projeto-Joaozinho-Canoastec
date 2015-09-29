<?php

namespace src\RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\types\StatusEnviado as StatusEnviado;
use \PHPUnit_Framework_TestCase;

class StatusEnviadoTest extends PHPUnit_Framework_TestCase{

	public function testDeveRetornarStatusEnviado(){

		$statusEnviado = new StatusEnviado();
		$this->assertEquals("Enviado a transportadora", $statusEnviado->getStatus());
	}

}