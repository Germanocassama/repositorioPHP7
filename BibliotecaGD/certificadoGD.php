<?php 

// criar imagem a partir de uma imagem 
$image = imagecreatefromjpeg("certificado.jpg");
// cor de funco
$titleColor = imagecolorallocate($image, 0, 0, 0);
// cor do texto
$gray = imagecolorallocate($image, 100, 100, 100);

// Escrever na imagem 
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Malam Silla", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em "). date("d/m/Y"), $titleColor);

// Mudar cabeçalho 
header("content-type: image/jpeg");
// Executar
// Gerar arquivo no disco --> "certificado-".date("d/m/Y")."jpg")
imagejpeg($image, "certificado-".date("d-m-Y").".jpg");

// Liberar memória
imagedestroy($image);

 ?>