<?php

namespace RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\interfaces\ControladorInterface;

class StatusAusente implements ControladorInterface{

	public function getStatus(){
		return "DESTINATARIO AUSENTE";
	}
}