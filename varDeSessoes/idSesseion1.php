<?php 
	session_id('a700sirsevfql04o90er79uo2darray');
	require_once("config.php");

	session_regenerate_id(); // Forçar criação de ID de seção

	echo session_id();

	var_dump($_SESSION);



 ?>