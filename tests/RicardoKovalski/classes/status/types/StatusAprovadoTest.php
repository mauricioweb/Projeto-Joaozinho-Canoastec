<?php

namespace src\RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\types\StatusAprovado as StatusAprovado;
use \PHPUnit_Framework_TestCase;

class StatusAprovadoTest extends PHPUnit_Framework_TestCase{

	public function testDeveRetornarStatusAprovado(){

		$statusAprovado = new StatusAprovado();
		$this->assertEquals("Aprovada", $statusAprovado->getStatus());
	}

}