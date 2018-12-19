<?php 

// Fuçoes anônimas são: funçoes que não tem nome e nem return

function test($callback){

	$callback();
}

// chamada da função
test(function(){

	echo "Terminou";

});

echo "<br><br> Exemplo 02 <br><br>";

$fn  = function($a){

	echo ($a);
};

$fn('oi');




 ?>