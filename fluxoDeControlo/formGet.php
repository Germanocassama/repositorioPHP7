<form>
	Nome: <input type="text" name="none">
	Data de Nascimento: <input type="date" name="nascimento">
	<input type="submit" value="Enviar">
</form>

<?php 

if (isset($_GET)) {
	// Quando não declaramos o metodo no formulário por padrão ele é GET
	
	foreach ($_GET as $key => $value) {

		echo "Nome do campo: " .$key. "<br>";

		echo "Valor do campo: " .$value;

		echo "<hr>";
	}
}

 ?>