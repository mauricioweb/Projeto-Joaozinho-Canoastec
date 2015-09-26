<?php

namespace RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\interfaces\ControladorInterface;

class StatusEntregue implements ControladorInterface{

	public function getStatus(){
		return "Entregue";
	}
}