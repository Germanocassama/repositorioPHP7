<?php

function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse. ".php") === true){ // verificar se o arquivo existe 

        require_once($nomeClasse. ".php");
    }
}
 /*  Serve para evitar de troca de pastas da classe abstratas */
spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse){

	if(file_exists("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse. ".php") === true){
		// DIRECTORY_SEPARATOR --> serve para evitar problemas de barras de diretorio 
		

        require_once("Abstratas". DIRECTORY_SEPARATOR . $nomeClasse. ".php");
    }
});

$carro = new DelRey();
$carro->acelerar(80);
?>