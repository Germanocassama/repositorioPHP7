<?php
require_once("config.php");
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM usuarios ORDER BY email");



$headers = array();
// obter so colunas no DB
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key)); // ucfirst --> começar o nome das colunas com letras Maiúsculas
}
$file = fopen("usuarios.csv", "w+");
// emplode espera dois parâmetros
// 1º parâmetro que quer aplicar no array
// 2º o próprio array
fwrite($file, implode(",", $headers) . "\r\n"); // Adicionar colunas dentro do arquivo 

foreach ($usuarios as $row) {// obter coluna
	
	$data = array();
	foreach ($row as $key => $value) {// obter campos da tabela
		
		array_push($data, $value);
	}// End Foreach de coluna

	fwrite($file, implode(",", $data) . "\r\n");// Adicionar os dados da linha dentro do arquivo
} // End Foreach de linha
fclose($file);
?>
