<?php 

// fopen() --> serve para criar um arquivo 
// ele espera dois parâmetros: 
// 1º --> caminho do arquivo 
// 2º --> como quer controlar o arquivo 
 $file = fopen("logo.txt", "a+");
 fwrite($file, date("Y/m/d H:i:s")."\r\n"); //\r\n --> retorna nova linha
 fclose($file); // limpar a memória
 echo " Arquivo criado com sucesso!";
 // fwrite() --> serve para escrever no arquivo 
 // ele espera dois parâmetros 
 // 1º --> variável do arquivo
 // 2º --> informação que vai ser inserido dentro do arquivo




 ?>