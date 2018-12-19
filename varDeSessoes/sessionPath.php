<?php 

require_once('config.php');

echo session_save_path();
echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "As sessões estiveram desabilitados";
		break;

	case PHP_SESSION_NONE:
		echo "As sessões estiveram habilitadas, mas não existe nenhum";
		break;
	case PHP_SESSION_ACTIVE:
		
		echo "As sessões estiveram desabilitadas e uma sessão existe";
		break;
	default:
		echo "Erro fatal";
		break;
}




 ?>