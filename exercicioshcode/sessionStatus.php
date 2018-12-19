<?php 

// estado de sessoes 
require_once('config.php');

var_dump(session_status());

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		ECHO " As sessoes estiveram desabilitados";
		break;

	case PHP_SESSION_NONE:
		echo "As sessoes estiveram habilitadas mas, nenhuma existir";
		break;
	case PHP_SESSION_ACTIVE:
		echo "As sessoes estiveram habilitadas e uma existir";;
	
	default:
		
		break;
}


 ?>