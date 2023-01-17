<?php

class Documento{

	private $number;

	public function getNumber(){

		return $this->number;

	}

	public function setNumber($n){

		$this->number = $n;

	}

}

class CPF extends Documento{

	public function validar():bool{

		$numberCPF = $this->getNumber();
		//validação do CPF
		return true;

	}

}

$doc = new CPF();
$doc->setNumber("111222333-44");	public function verDados(){

		echo $this ->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";


	}


var_dump($doc->validar());

echo "<br>";

echo $doc-> getNumber();

?>