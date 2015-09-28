<?php

namespace src\RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\types\StatusAusente as StatusAusente;
use \PHPUnit_Framework_TestCase;

class StatusAusenteTest extends PHPUnit_Framework_TestCase{

	public function testDeveRetornarStatusAusente(){

		$statusAusente = new StatusAusente();
		$this->assertEquals("Destinatário ausente", $statusAusente->getStatus());
	}

}