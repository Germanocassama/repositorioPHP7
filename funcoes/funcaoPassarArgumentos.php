<?php 
		
	// Passar argumentos
	function passarArgumetos(){

		$argumentos = func_get_args();
		return $argumentos;

	}

	var_dump(passarArgumetos("Bom dia"));


 ?>