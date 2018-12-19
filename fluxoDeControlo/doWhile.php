<?php 
// Do while executa o codigo só uma vez mesmo com erro e sem erro.
$total = 150;

$desconto = 0.9;

do {
	$total *= $desconto;

} while ($total > 100);

	echo $total;

 ?>