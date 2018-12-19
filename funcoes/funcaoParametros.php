<?php 

// Parametros de função ou argumentos

function ola($teste){

	return " Olá $teste";
}

	echo ola("João");
	echo "<br>";
	echo ola("Malam");

	// Função que retona mais do que um parametro
	echo "<br>";
	function ola1($teste1, $teste2){

		return "$teste1 $teste2"; // Se não retornar os valores entre aspas vai gerar erro
	}

	echo ola1("Maria", "Miguel");
	echo "<br>";
	echo ola1("Marcio", "Mirna");

	// Nota: parâmetros que não tem valor padrão são sempre colocados a direita
 ?>

