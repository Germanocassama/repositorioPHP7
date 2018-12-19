<?php 
# O while ele faz o lupi infinito se quiser parar o lupi tens de declar uma condição onde deve parar
$condicao = true;

while ($condicao) {

	$numeno = rand(1, 10);

		if ($numeno === 3) {

			echo "<br> Três ";
 
			$condicao = false; // Condição onde deve parar 

		}
		echo $numeno ." ";
}

 ?>