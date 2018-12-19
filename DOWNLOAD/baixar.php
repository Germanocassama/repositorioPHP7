<?php 

$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$constant = file_get_contents($link);

// parse_url — Interpreta uma URL e retorna os seus componentes
$parse = parse_url($link);

//basename — Retorna apenas a parte que corresponde ao nome do arquivo de um caminho/path
$basename = basename($parse["path"]);

// Criar e rebendo o arquivo com fopen() ao tempo gerando o nome dele
$file = fopen($basename, "w+");

// escrever o arquivo dentro do nosso disco rigido
fwrite($file, $constant);

fclose($file);

 ?>

 <img src="<?=$basename?>">