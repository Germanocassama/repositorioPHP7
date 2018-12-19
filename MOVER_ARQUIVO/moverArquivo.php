<?php 

// Mover e renomear aquivos 

$pasta1 = "pasta1";
$pasta2 = "pasta2";

// Criar pastas 
if (!is_dir($pasta1)) mkdir($pasta1);
if (!is_dir($pasta2)) mkdir($pasta2);

//  criar arquivos
$filename = "arquivo.txt";

// Se o arquivo não existir cria este arquivo dentro da pasta1
if (!file_exists($pasta1. DIRECTORY_SEPARATOR. $filename)) {
	
	$file = fopen($pasta1. DIRECTORY_SEPARATOR. $filename, "w+");

	// Escreve dentro do arquivo
	fwrite($file, date("d/m/Y H:i:s"));

	fclose($file);
}

// rename — Renomeia um arquivo ou diretório
// Esta função recebe dois parâmetros: 
// 1º --> Nome do arquivo 
// 2º --> Novo nome do arquivo
// Também pode passar a pasta onde o arquivo vai ser criado
rename($pasta1. DIRECTORY_SEPARATOR. $filename, // Pasta de origem

 		$pasta2. DIRECTORY_SEPARATOR. $filename // Pasta de destino

 		// Se o arquivo ficar na mesma pasta a função RENAME renomea o arquivo
 );

	echo "Arquivo movido com sucesso!";
	
 ?>