<?php 
 require_once("conexao.php");

 $result = $conn -> query("SELECT * FROM usuarios ORDER BY email"); // ler dados 

 // converter para um JSON
 $data = array();

 while($row = $result->fetch_assoc()){ // 

 	foreach ($row as $key => $value) {
 		
 		// obter o array
 		array_push($data, $row);
 	}
 }

echo json_encode($data);





 ?>