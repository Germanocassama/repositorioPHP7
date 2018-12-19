<?php 

// Metodo static --> permite nos ter acesso as classes ou metodos sem necessidade de fazer uma instancia do objecto

class Documento{
	public $numero; // Atributo

	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($numero){
		// Validadar codigo postal
		$resultado = Documento::validarCodigoPostal($numero);
		// :: --> Serve para acessar metodos STATIC 
		if ($resultado === false) {
			
			throw new Exception("O código postal indicado não é válido!", 1); // forçar erro
			
		}
		$this->numero = $numero;
	}

	public static function validarCodigoPostal($codigoPostal):bool{

		if(empty($codigoPostal)) {

        return false;
    }
 
    $codigoPostal = preg_match('/[0-9]/', $codigoPostal)?$codigoPostal:0;
    // PREG_MATCH --> usado para substituir uma string

    $codigoPostal = str_pad($codigoPostal, 11, '0', STR_PAD_LEFT);
    // STR_PAD --> preenche uma string para um certo tamanho com outra string 
    //  STR_PAD_LEFTb --> Preencher para esquerda  
     
    
    if (strlen($codigoPostal) != 11) {
        echo "length";
        return false;
    }
    
    else if ($codigoPostal == '00000000000'|| 
	        $codigoPostal == '11111111111' || 
	        $codigoPostal == '22222222222' || 
	        $codigoPostal == '33333333333' || 
	        $codigoPostal == '44444444444' || 
	        $codigoPostal == '55555555555' || 
	        $codigoPostal == '66666666666' || 
	        $codigoPostal == '77777777777' || 
	        $codigoPostal == '88888888888' || 
	        $codigoPostal == '99999999999') {
	        return false;
	    // Calcula os digitos verificados para verificar se o código postal esta certo 

     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $codigoPostal{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($codigoPostal{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
	}

}

	/*$codigoPostal = new Documento();
	$codigoPostal->setNumero("90933791003");
	var_dump($codigoPostal->getNumero());*/

	# com static não precisamos criar um objeto instanciarmos a nossa classe 
	var_dump(Documento::validarCodigoPostal());


 ?>