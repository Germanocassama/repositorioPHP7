<?php 

// Passagem de parametro por valores e por referencia 

// Por referencia 
$valor = 10;
function trocarValor($valor){

	$valor = 50;

	return $valor;
}

echo trocarValor($valor);

echo "<br>";

// Passagem de parametro por referencia colocar & comercial antes do nosso parametro

$pessoa = array(
	'nome: '=>'João',
    'idade: ' => 20 );
	foreach ($pessoa as &$valor) {
		// Fazer um teste se o valor é igual um tipo integer soma + 10

	if(gettype($valor) == 'integer')$valor += 10;
		
		echo $valor. "<br>";
	}
	
	print_r($pessoa);
	// Nota: Se não colocar & comercial ele vai alterar só enquanto estiver dentro do for


 ?>