<?php 

function tratarNome($nome){

	// criar uma condição
	if (!$nome) {

		throw new Exception("Nenhum nome foi informado <br/> Linha: ", 1);
		
	}
	// iniciar nome com letra maiúscula 
	echo ucfirst($nome)."<br/>";
}


try {
	tratarNome("mala silla");
	tratarNome("");
	
} catch (Exception $e) {
	echo $e->getMessage();
	echo $e->getLine();
	
}finally{

	echo "<br/> É necessário informa um nome na linha: ". $e->getLine();

}

 ?>