<?php 

$name = "images";

// Se o diretório não existe cria 
if(!is_dir($name)){

	mkdir($name);
	echo " diretório criado com sucesso!";
}else{

	rmdir($name);
	echo "Já existe o diretório: $name foi removido";
}


 ?>