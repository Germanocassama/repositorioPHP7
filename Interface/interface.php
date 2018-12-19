<?php 

/* Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe deve implementar, sem definir como esses métodos serão tratados tais como:
Métodos, tipos de declaração destes métodos, parâmetros e tem que ter um nome

*/

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}
/*
Para implementar uma interface, o operador implements é utilizado. Todos os métodos na interface devem ser implementados na classe; não fazê-lo resultará em um erro fatal. Classes podem implementar mais de uma interface se assim for desejado, separando cada interface com uma vírgula.
*/

class Civic implements Veiculo{

	public function acelerar($velocidade){

		echo "O veículo acelerou até " .$velocidade ." km/h";
	}
	public function frenar($velocidade){

		echo "O veículo frenou até " .$velocidade ." km/h";

	}
	public function trocarMarcha($marcha){

		echo "O veículo engatou a " .$marcha ."km/h";
	}
}

$carro = new Civic();
$carro->trocarMarcha(0);


 ?>