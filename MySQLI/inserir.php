<?php 

	require_once("conexao.php");
	
	$stmt = $conn->prepare("INSERT INTO usuarios (email, senha) VALUES(?, ?)"); // prepare --> preparar envio de dados
	$stmt->bind_param("ss", $login, $pass); // ss --> significa que os dados são String 

	// ...............................................................................................................

	$login = "user";
	$pass = "12345";

	$stmt->execute();

	$login = "user1";
	$pass = "11111";
	$stmt->execute();

	$login = "root";
	$pass = "senha";
	$stmt->execute();

	


 ?>