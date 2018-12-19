<?php 

// error_reporting — Define quais erros serão reportados
error_reporting(E_ALL & ~E_NOTICE);
// E_ALL -> todos erros 
// ~E_NOTICE --> Não mestre as mensagens
$nome = $_GET["nome"];

echo $nome;




 ?>