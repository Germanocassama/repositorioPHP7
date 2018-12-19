<?php 

// Funçoes anonimas sem nome e return

function souAnonima($callback){

	$callback();
}






souAnonima(function(){

	$pessoas = array(
		'Jão',
		'Maria'
	);

	foreach ($pessoas as $valor) {
		
		echo $valor . "<br>";

	}
});

$souAnonima1 = function($a){

	echo $a;
};

$souAnonima1("Cassama");




 ?>