<?php 
 // Cabeçalho da imagem
header("Content-Type: image/png");
// imagecreate — Cria uma nova imagem baseada em paleta
$image = imagecreate(256, 256);
// Fundo da imagem
$black = imagecolorallocate($image, 0, 0, 0);
// cor de texto 
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);
// Tipo de imagem
imagepng($image);

// fechar 
imagedestroy($image);