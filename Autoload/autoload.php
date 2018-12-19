<?php

/*
Serve para incluir muitos arquivos ou classes em diferentes arquivos mais só uma observação as classes devem ter o mesmo nome 
com os arquivos 
*/

function __autoload($nomeClasse){

	// var_dump($nomeClasse);
	require_once("$nomeClasse.php");
}

$carro = new DelRey();
$carro->acelerar(80);
?>