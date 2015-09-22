<?php

namespace RicardoKovalski\classes\status\types;
use \RicardoKovalski\classes\status\interfaces\ControladorInterface;

class StatusEnviado implements ControladorInterface{

public function getStatus(){
		return "ENVIADO A TRANSPORTADORA";
	}
}