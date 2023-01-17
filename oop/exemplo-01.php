<?php

class Pessoa{

	public $nome;//atributo

	public function falar(){//método

		return "O meu nome é " . $this->nome;

	}

}

$marco = new Pessoa(); 
$marco->nome = "Marco Tulio Ferreira";
echo $marco->falar();

?>