<?php 
/*
Polimorfismo é a capacidade que uma classe tem de sobrepor métodos da classe abstrata, modificando-os. Para tanto, é necessário que ela possua a mesma assinatura de método.
*/

abstract class Animal{
	public function falar(){
		return "Som";
	}
	public function mover(){
		return "Andar";
	}
}

class Cachorro extends Animal{
	public function falar(){
		return "Late";

	}
	
}

class Gato extends Animal{
	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal{
	function falar(){
		return "canta";
	}
	public function mover(){
		return "Voa e ". parent::mover();// Eestamos chamando o método mover da classe Animal
	}
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";
echo "--------------------------<br/>";
$garfield = new Gato();
echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";
echo "--------------------------<br/>";
$ave = new Passaro();
echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";




 ?>