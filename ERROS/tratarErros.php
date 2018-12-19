<?php 

// Manipular cabeçalho de erros em php 
// Função error_handler
function manipularErros($code, $message, $file, $line){

	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"file"=>$file,
		"line"=>$line
	));
}

set_error_handler("manipularErros");

// forçar um erro 

echo 100 / 0;


 ?>