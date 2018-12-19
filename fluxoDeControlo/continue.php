<?php 

for ($i=0; $i < 1000; $i+=5) { 
	if ($i > 200 && $i < 800) continue;  // continue serve para ignorar um elemento
		echo $i ."<br>";

	if ($i === 800) break;
	echo $i ."<br>";
	
}



 ?>