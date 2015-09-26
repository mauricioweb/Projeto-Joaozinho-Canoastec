<?php

namespace RicardoKovalski\classes\status\tests\types;
use \RicardoKovalski\classes\status\types\StatusAguardando;


class StatusAguardandoTest extends \PHPUnit_Framework_TestCase{

    public function testDeveRetornarStatusAguardando(){

        $statusAguardando = new StatusAguardando();
        $status = "AGUARDANDO APROVAÇÃO";
        $this->assertEquals($status, $statusAguardando->getStatus());
    }

}