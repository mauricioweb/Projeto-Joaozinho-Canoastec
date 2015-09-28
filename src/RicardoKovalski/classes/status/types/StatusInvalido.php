<?php

namespace RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\interfaces\ControladorInterface;

class StatusInvalido implements ControladorInterface{

	public function getStatus(){
		return "Status inválido. Favor selecione um status.";
	}
}