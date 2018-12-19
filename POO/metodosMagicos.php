<?php 

/**
 * 
 */
class Endereco{

	private $odivelas;
	private $numero;
	private $cidade;
	
	public function __construct($a, $b, $c) // os argumentos de __construct podem ser qualquer valor 
	{
		$this->odivelas = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){
		// Usado para libertar a memória 
		//var_dump("Destruir");
	}

	public function __toString(){
		return $this->odivelas. ", ".$this->numero. " - ".$this->cidade;
		// É usado para quando quisermos imprimir valores do nosso objecto, dar um echo 
	}
}

$meuEndereco = new Endereco("Av. Prof. Dr. Augusto A. Lopes", "Nº 26", "odivelas");
//var_dump($meuEndereco);
// unset($meuEndereco);
echo $meuEndereco;


 ?>