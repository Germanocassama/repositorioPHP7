<?php 
/*
O PHP suporta libcurl, uma biblioteca criada por Daniel Stenberg, que permite que você se conecte e se comunique com diferentes tipos de servidores usando diferentes tipos de protocolos. libcurl atualmente suporta os protocolos https, ftp, gopher, telnet, dict, file e ldap. libcurl também suporta certificados HTTPS, HTTP POST, HTTP PUT, upload via FTP (isso também pode ser feito com a extensão ftp do PHP), upload HTTP por formulário, proxies, cookies, e autenticação com usuário e senha.
*/

$cep ="01001000";

$link = "https://viacep.com.br/ws/$cep/json/";
// curl_init — Initialize a cURL session
$ch = curl_init($link);

// curl_setopt — Definir uma opção para uma transferência cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// ch --> variavel curl_inir
// CURLOPT_RETURNTRANSFER --> o que deseja fazer 
// valor: 0 só enviar, 1 enviar e receber
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// CURLOPT_SSL_VERIFYPEER --> ele não verifica se o nosso url é valido

// Dispara acesso para o ULR indicado 
$response = curl_exec($ch);

curl_close($ch);
// Transformar $data em array
// passamos $data como TRUE para garantir que é um array se não vai descodificar e passar ele como um objeto
$data = json_decode($response, true);

foreach ($data as $key => $value) {

	echo "<br/>". $key.' : '. $value;
}

 ?>