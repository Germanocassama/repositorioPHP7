<?php 

// Getter e setters

/**
 * 
 */
class Carro{
	private $modelo;
	private $motor;
	private $ano;
    
    // Modelo
	public function getModelo(){
		return $this->modelo;
	}
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

    // Motor
	public function getMotor():float{

		return $this->motor;
	}
	public function setMotor($motor){
		$this->motor = $motor;
	}
     // Ano
	public function getAno():int{
		return $this->ano;
	}
	public function setAno($ano){
		$this->ano = $ano;
	}
    

    // Obter as informçoes da classe 
    public function exibir(){
    	return array(
    		"modelo"=>$this->getModelo(),
    		"motor"=>$this->getMotor(),
    		"ano"=>$this->getAno()
    	);
    }
  }

    // Instanciar 
    $golfo = new Carro();
    $golfo->setModelo("Gol GT"); // os metodos privados são acessados desta maneira 
    $golfo->setMotor("1.6");
    $golfo->setAno("2018");

    var_dump($golfo->exibir());

   

 ?>