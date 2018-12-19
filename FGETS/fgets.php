<?php
$filename = "usuarios.csv";

if (file_exists($filename)) {
	// Criar arquivo
	$file = fopen($filename, "r");
	// fgets — Lê uma linha de um ponteiro de arquivo
	$headers = explode(",", fgets($file));

	$data = array();

	// O whie faz as linhas 
	while ($row = fgets($file)) {

		$rowData = explode(",", $row);

		$linha = array();

		// count() --> conta itens de um array
		for ($i=0; $i < count($headers); $i++) { 
			
			// $linha[$headers[$i]] -- > estou capturar posição 0 do $headers que é id
			// $rowData[$i] --> pegamos os dados coomeçando em posição zero atribuindo ao $headers
			$linha[$headers[$i]] = $rowData[$i];
		}
		array_push($data, $linha);
	}
	fclose($file);

 		echo json_encode($data);
	
	

	/*
 		$linhas = count(file('usuarios.csv') );

 		$numLinhas = $linhas - 1; 

 		echo $numLinhas;
 		*/
	
} 
?>