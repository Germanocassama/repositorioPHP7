<?php 

class Documentos{

	private $numero;

	public function getNumero(){

		return $this->numero;

	}

	public function setNumero($n){

		$this->numero = $n;
	}
}

/**
 * 
 */
class cPostal extends Documentos // extend --> é uma classe filha da classe pai 
{
	public function validarCodigoPostal():bool{

		$postalNumero = $this->getNumero();

		return true;
	}
}

$obterDoc = new cPostal();
$obterDoc -> setNumero("2675-289");
var_dump($obterDoc->validarCodigoPostal());

echo "<br>";

echo $obterDoc->getNumero();



 ?>