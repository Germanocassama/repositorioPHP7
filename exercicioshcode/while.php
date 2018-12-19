<?php 

$condicao = true;

while ($condicao) {
	
	// Em quanto condição é verdadeira faz 
	$aleatorio = rand(1 , 20);

	// Se os numeros gerados por rand() encontrou o valor 6 que retorna false e pare execução 
	if ($aleatorio === 10) {
		
		echo " <br> Dez: ";

		$condicao = false;
	}
	echo $aleatorio . " ";

}

 ?>