<?php 

/*
O PHP suporta de forma transparente cookies HTTP. Cookies são um mecanismo para armazenar dados no navegador remoto e assim rastrear ou identificar usuários que retornam. Você pode criar cookies usando as funções setcookie() ou setrawcookie(). Cookies fazem parte do cabeçalho HTTP, logo, setcookie() deve ser chamada antes que qualquer saída seja enviada ao navegador. Esta é a mesma limitação que a função header() tem. Você pode usar as funções de buffering de saída para atrasar as impressões no script até que você tenha decidido se vai ou não configurar qualquer cookie ou enviar quaisquer cabeçalhos.
*/

/* Nota: uma nota muito importantes quando criamos cookies estamos a criar dentro da maquina do usuário então para isso
precisamos informar quando este cookies vai expirar, se não definir quando o usuario fechar sessão este cookies vai morrer
*/

$data = array("empresa"=>"BissauMultigrafica");

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "Ok";

?>