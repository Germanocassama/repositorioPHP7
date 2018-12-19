<?php 

// A função define ela recebe dois parametros 

define("Funcionarios", [

	" 1 - João",
	" 2 - Yanick",
	" 3 - Momi",
	" 4 - Germano",
	" 5 - Venancio"

]);

print_r(Funcionarios);

echo "<br>";

foreach (Funcionarios as $valores) {
	
	echo $valores . " <br> ";
}




 ?>