<?php
?>
<!DOCTYPE html>
<html>

<head>
	<title>tabla condicional</title>
</head>

<body>
	<h1>Tabla de condicional</h1>

	<table style="border: 1px solid black">
		<tbody>
			<?php
			for ($i = 0; $i <= 2; $i += 0.25)
			{
				$color = $i <= 1 ? "red" : "green";
				echo "
					<tr>
						<td style='border: 1px solid black;color:$color'>$i</td>
					</tr>
				";
			}
			?>
		</tbody>
	</table>
</body>

</html>

<pre>
Ejercicio 1

Creo un fichero HTML . 

Vamos a crear una tabla, utilizando dos etiquetas PHP. 
Una en la que incluiremos un if y otra en la que incluiremos un for.

Con la parte del for, recorreremos del 0 al 2 de 0.25 en 0.25. 

La parte del if la utilizaremos para indicar el dato y colorearlo.

Veamos cómo lo tenéis que hacer: (seguid los pasos y haced y probad cosa a cosa, 
no todo de golpe).

En la cabecera, que el título sea "tabla condicional"

En el cuerpo, crea un encabezado con el texto "tabla de números" 

A continuación, código PHP, donde se defina una función denominada "dato" al que se
le pasa un parámetro denominada $valor.

En esta función, ejecutamos una condición IF. Se encarga de devolver un 
"dato de tabla" de html (&lt;td&gt;) con el texto que tiene el $valor, y el
texto del color: si el dato es entre 0 y 1 incluido en rojo; y si es mayor de
1 hasta 2, en verde.

En este primer PHP, sólo incluimos la definición de la función.
Cerramos la etiqueta del código PHP. 

Después , mediante código habitual html, define una tabla. (Es decir, etiqueta table)
"Dentro de la tabla" (entre las etiquetas de apertura y cierre de la tabla) vuelve a
poner código PHP. 

En este código PHP lo que harás es definir un for, que recorra desde el 0 hasta el 2,
y vaya de 0.25 en 0.25.
Dentro de este for :
		- Pondremos una etiqueta de línea de tabla (&lt;tr&gt;)
		- Después llamaremos a la función con el valor que estamos 
				recorriendo el for (por lo que nos pondrá un dato de la tabla, un &lt;td&gt;),
				y finalmente cerraremos la etiqueta tr

Con esto finalizaremos nuestro fichero html

Quedará una tabla del estilo:

0
0.25
0.5
0.75
1
1.25
1.5
1.75
2
</pre>