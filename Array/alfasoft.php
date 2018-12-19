<?php

$teste2 = array(

"a Array0", array("aa1","aa2", "Array1"),
			"b",
			array( "bb1","Array2",
			array("sub bb 1",
				"sub bb 2",
				"sub2", "Array3"),
		));


function printRecursive($teste2){
 
    foreach ($teste2 as $dados) {
 
        if (gettype($dados) == 'array') {
         // se tipo  de dados é um array Obtenha o tipo da variável como pode usar também a função -- is_array
 
	    printRecursive($dados);
 
        } else {
 
	    echo $dados . "<br>";
 
        }
 
    }
}

 printRecursive($teste2);



?>

