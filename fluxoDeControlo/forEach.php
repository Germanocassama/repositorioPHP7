<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	p{
		color: green;
		font-size: 20px;
		font-weight: bold;
	}
		
	</style>
	
</head>
<body>

</body>
</html>

<?php 

$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Novembro", "Dizembro");

foreach ($meses as $indice => $mes) {
	echo '<p>  Indice: '.$indice.' <br> </p>' ;
	echo "Mês de: " .$mes. "<br><br>";
}


 ?>