<?php 


require_once("config.php");

// usar NameSpace 
use cliente\cadastro; 

$cad = new cadastro();

$cad->setNome("Maria semedo");
$cad->setEmail("maria@glm.com");
$cad->setSenha("123456");

$cad->registrarVenda();

 ?>