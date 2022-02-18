/*1. Imprime en pantalla  los números impares del 1 al 100, y su suma. Guarda tu trabajo en practica_4_1.php.*/


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Impares</title>
</head>
<body>
	<?php
		
		for ($x = 0; $x <= 100; $x + 1) {
			if (($x % 2) == 1) {
				echo "Es impar $x";
				$resultado = $x + $resultado;
			}

		}
			echo "Total de la suma es $resultado";

		
	?>

</body>
</html>
 
/*2. Imprime en pantalla el cuadrado de los números del 1 al 50, ambos incluidos, y los sume, devolviendo la dicha suma  total. Guarda tu trabajo en practica_4_2.php.*/




