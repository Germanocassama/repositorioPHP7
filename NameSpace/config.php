<?php 

spl_autoload_register(function($nameClass){

	var_dump($nameClass); // Serve para verificar arquivos estendidos 

	$dirClass = "class"; // Pasta onde vai procurar classe

	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
	// .php --> para obter extensão de arquivo
	
	if(file_exists($filename)){
		require_once($filename); // incluir arquivo

	}
});


 ?>