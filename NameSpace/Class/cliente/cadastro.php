<?php 

// Cadastro do clente 

namespace cliente; // pasta onde estamos estender os nossos registros 

class cadastro extends \cadastro{ // \--> quer dizer pasta raiz que esta dentro da pasta cliente

	public function registrarVenda(){

		echo " Foi registrado uma venda para cliente ".$this->getNome();
		echo "<br> Foi registrado nova venda para cliente <strong>".$this->getNome()."</strong> com  email <strong>".$this->getEmail()."</strong>";

	}
}


 ?>