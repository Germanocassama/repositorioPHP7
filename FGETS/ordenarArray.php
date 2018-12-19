<?php 


 $ordenar = array(3, 9, 10, 6, 1, 11, 14, 5, 4, 8);

  // ordenar array de form crescente 
  sort($ordenar);

// ordenar de forma decrescente 
  //rsort($ordenar);

	foreach ($ordenar as $key => $value) {
		
		echo "<br/>" .$value;
	}


 ?>