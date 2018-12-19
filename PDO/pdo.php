<?php 

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "musquebalassana94");

// mysql --> Tipo de banca que quer conectar 
$stmt = $conn ->prepare("SELECT * FROM usuarios ORDER BY id ASC");

$stmt -> execute();

// Mostrar os dados 

$results = $stmt ->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC--> trezer dados associativos 

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
		
		echo "<strong> ". $key. ":  </strong>". $value ."<br/>";
	}

	echo "=================================================================================<br/>";
}






 ?>