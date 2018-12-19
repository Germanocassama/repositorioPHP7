
<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpload">

	<button type="submit">Enviar</button>
</form>


<?php 

	if($_SERVER["REQUEST_METHOD"] === "POST"){

		$file = $_FILES["fileUpload"];

		if ($file["error"]) {
			throw new Exception("error". $file["error"] );
			
		}

		// Variável para criar nome do nosso diretório
		$dirUploads = "uploads";

		if(!is_dir($dirUploads)){
			mkdir($dirUploads);
		}
		//O "tmp_name"  indica que ele está resgatando o valor do array $file onde a chave é tmp_name
		 // o "name" está resgatando o valor da chave name do array $file
		if (move_uploaded_file($file["tmp_name"], $dirUploads. DIRECTORY_SEPARATOR . $file["name"])) {/* name -> propriedade do arquivo */
			// Neste momento podia enviar os dados para base de dados 
			echo " Upload realizado com sucesso!";

		}else{
			throw new Exception("Não é possível realizar uploads");
			
		}
	}


?>
