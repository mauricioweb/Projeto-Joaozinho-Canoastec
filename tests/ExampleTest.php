<?php
//namespace tests;

use \RicardoKovalski\classes\status\factory\FactoryStatus;

class ExampleTest extends PHPUnit_Framework_TestCase{

    public function testDeveRetornarStatusAguardandoAprovacao(){

        $statusAguandando = FactoryStatus::create('A');
        $this->assertEquals("Aguardando aprovacao", $statusAguandando->getStatus());
    }

    public function testDeveRetornarStatusAprovado(){

        $statusAprovado = FactoryStatus::create('B');
        $this->assertEquals("Aprovada", $statusAprovado->getStatus());
    }

    public function testDeveRetornarStatusEmSeparacao(){

        $statusSeparacao = FactoryStatus::create('C');
        $this->assertEquals("Em separacao", $statusSeparacao->getStatus());
    }

    public function testDeveRetornarStatusEnviado(){

        $statusEnviado = FactoryStatus::create('D');
        $this->assertEquals("Enviado a transportadora", $statusEnviado->getStatus());
    }

    public function testDeveRetornarStatusEntregue(){

        $statusEntregue = FactoryStatus::create('E');
        $this->assertEquals("Entregue", $statusEntregue->getStatus());
    }

    public function testDeveRetornarStatusAusente(){

        $statusAusente = FactoryStatus::create('F');
        $this->assertEquals("Destinatario ausente", $statusAusente->getStatus());
    }

}