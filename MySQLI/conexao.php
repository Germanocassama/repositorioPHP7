<?php 

$conn = new mysqli("localhost", "root", "musquebalassana94", "dbphp7");

	// Vereficar se a conexão foi realizada 
	if($conn->connect_error){

		echo " Erro ao conectar com banco de dados".$conn->connect_error ;
	}

 ?>