<?php

namespace RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\interfaces\ControladorInterface;

class StatusAguardando implements ControladorInterface{

	public function getStatus(){
		return "Aguardando aprovacao";
	}
}