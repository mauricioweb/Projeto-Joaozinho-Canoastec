<?php

namespace RicardoKovalski\classes\status\factory;

use \RicardoKovalski\classes\status\types\StatusAguardando as StatusAguardando;
use \RicardoKovalski\classes\status\types\StatusAprovado as StatusAprovado;
use \RicardoKovalski\classes\status\types\StatusAusente as StatusAusente;
use \RicardoKovalski\classes\status\types\StatusEntregue as StatusEntregue;
use \RicardoKovalski\classes\status\types\StatusEnviado as StatusEnviado;
use \RicardoKovalski\classes\status\types\StatusSeparacao as StatusSeparacao;
use \RicardoKovalski\classes\status\types\StatusInvalido;

class FactoryStatus{

	public static function create($param){

		switch($param){

			case 'A':
				return new StatusAguardando();
				break;
			case 'B':
				return new StatusAprovado();
				break;
			case 'C':
				return new StatusSeparacao();
				break;
			case 'D':
				return new StatusEnviado();
				break;
			case 'E':
				return new StatusEntregue();
				break;
			case 'F':
				return new StatusAusente();
				break;
			default:
				return new StatusInvalido();
				break;
		}
	}

}