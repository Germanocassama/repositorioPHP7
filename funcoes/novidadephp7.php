<?php 

// Esta funcão permite nos passar varios valores para a nossa função soma
// este tipo de função são chamados de declaração de tipos escalares quer tipos recebidos

function soma(int ...$valores){

	return array_sum($valores);


}

echo soma(3, 3);
echo "<br>";
echo soma(10, 10);
echo "<br>";
echo soma(10, 10, 20);


 ?>