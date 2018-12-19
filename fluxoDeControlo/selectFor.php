<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		select{
			width: 10%;
		}
	</style>
</head>
<body>
	

<?php 
	echo "<select>";
	for ($i=date("Y"); $i >= date("Y")-100; $i--) { 

		
		echo  '<option value=" '.$i.' ">'.$i.'</option>';
	}

	echo "<select>";

 ?>

</body>
</html>

