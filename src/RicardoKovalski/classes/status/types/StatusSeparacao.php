<?php

namespace RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\interfaces\ControladorInterface;

class StatusSeparacao implements ControladorInterface{

	public function getStatus(){
		return "Em separacao";
	}
}