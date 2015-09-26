<?php

namespace RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\interfaces\ControladorInterface;

class StatusAprovado implements ControladorInterface{

	public function getStatus(){
		return "Aprovada";
	}
}