<?php 

/* 
O PHP 5 possui um modelo de exceções similar ao de outras linguagens de programação. Uma exceção pode ser lançada (throw) e capturada (catch). Código pode ser envolvido por um bloco try para facilitar a captura de exceções potenciais. Cada bloco try precisa ter ao menos um bloco catch ou finally correspondente.

O objeto lançado precisa ser uma instância da classe Exception ou uma subclasse de Exception. Tentar lançar um objeto sem essa ascendência resultará em um erro fatal.

*/

try {

	throw new Exception("Houve um erro", 400);
	
	
} catch (Exception $e) {

	echo json_encode(array(

		// Tipos de erros 
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));
	
}


 ?>