<?php 

class pessoa{

	public $nome; // Atributo 

	public function falar(){ // Método 

		return " O meu nome é " .$this->nome; 

	}
}

$germano = new pessoa(); // Instancia a classe pessoa
$germano -> nome = "<strong> Germano cassamá </strong>"; // Referenciar o nosso atributo
echo $germano -> falar(); // Executar o método 



 ?>