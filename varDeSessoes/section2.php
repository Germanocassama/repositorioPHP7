<?php 

	require_once("config.php");
	
	
	session_unset($_SESSION['nome']); // session_unset() --> serve para apagar seção
	echo $_SESSION['nome'];

	session_destroy(); // Limpa a variável de secção e remove o usuário da página 
	
 ?>