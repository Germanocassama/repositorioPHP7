<?php 

// Configuração regional com SETLOCALE()

// LC_ALL --> significa toda a minha minha configuração para configuração indicada



setlocale(LC_ALL, "pt-BR", "pt-BR.utf8", "portuguese");

echo ucwords(strftime("%A %B"));

echo " <br> Data e hora <br>";

setlocale(LC_TIME, "pt-BR", "pt-BR.utf8", "portuguese"); 

echo ucwords(strftime("%A %d %B %Y"));






 ?>