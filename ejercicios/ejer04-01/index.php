<?php
	$combs=[];
?>
<!DOCTYPE html>
<html>

<head>
	<title>tabla condicional</title>
	<style>
		table * {
			border: 1px solid black;
		}
	</style>
</head>

<body>
	<h1>Tabla de condicional</h1>

	<table style="border: 1px solid black">
		<tbody>
			<tr>
				<td>Combinación:</td>
				<?php
					while (count($combs) < 6)
					{	
						$num = mt_rand(1, 49);						
						if (in_array($num, $combs))
							continue;

						$combs[] = $num;
						echo "<td style='color:green'>$num</td>";
					}
				?>
			</tr>
			<tr>
				<td colspan="6">Complementario</td>
				<?php
					while (in_array($num, $combs))
						$num = mt_rand(1, 49);
					echo "<td style='color:red'>$num</td>";
				?>
			</tr>
		</tbody>
	</table>
</body>

</html>

<pre>Funciones para generar números aleatorios: rand() y la mejorada mt_rand() (mucho más rápida)

La forma más simple es: 

rand(5, 10)
mt_rand(1,100)
Ejercicio: 

Haz un generador de resultados para la lotería primitiva.
El juego consiste en elegir 6 números entre1 y 49 para acertar la combinación
Ganadora en el sorteo correspondiente. Además, el complementario. 

Por pantalla se mostrará: una tabla de este tipo: 


Combinación	48	36	12	5	9	47
Complementario	13
</pre>