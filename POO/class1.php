<?php 

/**
 * 
 */
class pessoa{
	
	public $nome; // Atributo 

	public function falar(){ // Método

		return " O meu nome é " .$this->nome;


	}

}

$germano = new pessoa();
$germano -> nome = "Germano cassamá"; // Referenciar variável
echo $germano -> falar(); // Invocar o Método 


 ?>
 