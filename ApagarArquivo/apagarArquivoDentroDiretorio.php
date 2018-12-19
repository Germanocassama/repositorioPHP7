<?php 

	if(!is_dir("images")) mkdir("images"); // Se não existe diretório images então cria


	foreach (scandir("images") as $item) {	 // scanear a minha paste images 
	if(!in_array($item, array(".", ".."))) {// ignora ponto e dois ontos
		unlink("images/".$item); // apagar todos os itens que estão dentro da pasta images 
	}
}
			




 ?>