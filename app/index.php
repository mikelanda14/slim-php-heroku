<?php
/*Aplicación Nº 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.
*/
//variables indice del vector para guardar el ultimo indice utilizado del vector.
$indiceVector=0;
$vector;
//bucle for en el cual se se cargan los valores pares.
for ($i=0; $i <20 ; $i++) { 
	if (($i%2)==0) 
	{
		//consulta no pude ubicar el metodo sizeof($vector dentra del indice de vector hay alguna forma de hacer esto?)
		$vector[$indiceVector] = $i;
		$indiceVector=sizeof($vector);
	}
	
}
echo '<br>';
echo "Impresion For", "<br>";
for ($i=0; $i <10 ; $i++) { 
	echo $vector[$i] , "<br>";
}
echo '<br>';
echo "Impresion while", "<br>";
$i=0;// sizeof($vector);
while ($i <sizeof($vector)) {
	//$indiceVector=sizeof($vector);
	
	echo $vector[$i] , "<br>";
	$i++;
}

echo '<br>';
echo "Impresion foreach", "<br>";
foreach ($vector as $key => $value) {
	echo $value , "<br>";
}
//echo sizeof($vector);
?>