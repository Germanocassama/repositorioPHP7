<?php

class Pessoa {

	public $nome = "Rasmus Lerdorf"; // visto em todo lodo do nosso código 

	protected $idade = 48; // visto dentro da classe e classe extends 

	private $senha = "123456"; // visto só dentro da classe 


	public function verDados(){

		echo "Nome: ".$this->nome. "<br/>";

		echo "Idade: ".$this->idade. "<br/>";

		echo "Senha: ".$this->senha. "<br/>";

		
	}

}

$objeto = new Pessoa();
// echo $objeto->senha . "<br/>";
$objeto->verDados();
?>