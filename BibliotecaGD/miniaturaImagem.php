<?php 

header("Content-type: image/jpeg");
$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;
// Visualizar informçoes do arquivo 
//var_dump(getimagesize($file));

// getimagesize --> obter informçoes do arquivo  


// informaçoes de largura e altura da imagem capturado por: getimagesize
list($old_width, $old_height) = getimagesize($file);
/* a função list() do php lista todas as informaçoes do arquivo e a função getimagesize() captura as inforções, 
neste caso a função getimagesize() capturou a largura da imagem na posição zero e altura da imagem na posição 1 e guarda nas variaveis $old_width para largura e $old_height para altura 
*/ 

// carregar paleta de cores são 10 mil cores
$new_image = imagecreatetruecolor($new_width, $new_height);
// cria uma imagem a partir de jpeg
$old_image = imagecreatefromjpeg($file);

// Precisamos mmsclar a imagem com a função imagecopyresampled() está espera 10 parâmetros:
/* 1º imagem de destino, 2º imagem de origem, imagem destino x, imagem desino y, imagem origem x, imagem origem y,
 estes parâmetros 4 são pontos de destino de imagem de destino x e y também de origem de x e y (0, 0, 0, 0) 
 //////////////////////////
 depois temos: largura de imagem de destino e altura de imagem de destino.
 // Temos: largura de imagem de origem e altura de imagem de origem

*/ 
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

 ?>