<?php 


interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}


// para instaciar uma classe abstrata precirá de criar uma outra classe para estender a sua classe abstrata
abstract class automovel implements Veiculo{

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

// extend de abstract - estendeu a classe abstrata 
class DelRey extends automovel{

	public function empurar(){

	}
}


$carro = new DelRey(); // instanciar a classe DelRey
$carro->acelerar(2000);
echo "<br>";
$carro ->frenar(10);
echo "<br>";
$carro->trocarMarcha(20);


 ?>