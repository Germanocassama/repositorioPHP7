<?php 


$frase = "pilar da vida, mae é muito importante!";

$palavra = "mae";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $palavra);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);


 ?>