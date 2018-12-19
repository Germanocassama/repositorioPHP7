<?php 
// scandir --> permite scanear um diretório
$images = scandir("images");

$data = array(); // Array de dados 

foreach ($images as $img) {
	// Se existe . e .. na variável $img do array ignora estes pontos 
	if(!in_array($img, array(".", ".."))){

		$filename = "images". DIRECTORY_SEPARATOR.$img; /* procura a pasta imagens com suas informaçoes e guarda em $filename */

		// pathinfo --> serve para obter informaçoes de arquivo 
		$info = pathinfo($filename); // pathinfo ele retorna nome do arquivo quer dizir a pasta
		// filesize --> obter tamanho do arquivo
		$info['size'] = filesize($filename); // Retorna nome do arquivo
		// filemtime --> Retorna data de modificação do arquivo 
		$info['modified'] = date("d/m/Y H:i:s", filemtime($filename)); // Retorna nome do arquivo
		// url --> visuar lizar arquivo por ulr precisa passar url do arqui, caminho do arquivo 
		$info['url'] = "http://localhost/DIR/". str_replace("\\", "/", $filename);

		// Adicionar $info em array $data
		array_push($data, $info);

	}
}

	echo json_encode($data);

 ?>