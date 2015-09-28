<?php

namespace src\RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\types\StatusEntregue as StatusEntregue;
use \PHPUnit_Framework_TestCase;

class StatusEntregueTest extends PHPUnit_Framework_TestCase{

	public function testDeveRetornarStatusEntregue(){

		$statusEntregue = new StatusEntregue();
		$this->assertEquals("Entregue", $statusEntregue->getStatus());
	}

}