<?php 

$filename = "alentejo.jpg";

/* file_get_contents --> lê conteúdo do arquivo e retorna em binário se quiser converter para String vais ter que suar a 
função: base64_encode() 
*/  
// file_get_contents — Lê todo o conteúdo de um arquivo para uma string
$base64 = base64_encode(file_get_contents($filename));

// Tipo de informação do arquivo
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

// O método file() recebe o caminho do arquivo ou referencia onde esta o arquivo
$mimetype = $fileinfo->file($filename);

$base64encode = "data:".$mimetype.";base64,".$base64;


 ?>

 
<a href="<?=$base64encode?>" target="_blank">link para imagem</a>
 <img src="<?=$base64encode?>">
