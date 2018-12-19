<?php 

$teste2 = array(
			"a",
						array(
							"aa1",
							"aa2"
					  		),

			"b",
							array( "bb1",
									
							array(

								"sub bb 1",
								"sub bb 2",7
								
								"sub2"
								 ),
						)
);

function printRecursive($teste2){

	foreach ($teste2 as $dados) {
		
		echo $dados . "<br>";
		foreach ($dados as $valores) {
			
			echo $valores . "<br>";

			foreach ($valores as $valores1) {
				
				echo $valores1 . "<br>";
			}
		}

	}

}

echo printRecursive($teste2);

 ?>