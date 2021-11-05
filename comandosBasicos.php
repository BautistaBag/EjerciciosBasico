<?
//Variable integer(entero)
$edad = 29;

//Variable string
$nombre = 'Ignacio';

//con comillas simples debo concatenar las variables y los textos con un punto
echo $nombre. ' tiene una edad de: '.$edad;
echo "<br>";

//con comillas dobles no es necesario utilizar puntos para concatenar
echo "$nombre tiene una edad de: $edad";
echo "<br>";

//Creamos una variable constante(no se le puede cambiar el valor asignado)
define('NOMBRE','Bautista');
echo NOMBRE;
echo "<br>";

//Arrgelos
$frutas = array("manzana","pera","platano");
//Imprimo todos los valores del arreglo
print_r($frutas);
echo "<br>";

//Otra forma de imprimir todo los valores del arreglo frutas
for($i=0;$i<count($frutas);$i++){
	echo $frutas[$i].'<br>';
}
echo "<br>";

//Imprimo el valor que se encuentra en la posicion 2 del arreglo
echo $frutas[2];
echo "<br>";

//Otra forma de asignar valores en un arreglo
$edades = array('Lucas'=> 23,'Marcos'=>10);
print_r($edades);
echo "<br>";
//este echo de abajo me devuelve el valor que tiene Marcos asignado(que seria 10)
echo $edades['Marcos'];
echo "<br>";

//Ejemplo de uso del foreach |  la variable key toma lo que tiene la variable edades y values toma los valores que tiene la variable keys
foreach ($edades as $key => $value){
	echo $key.' tiene el valor de '.$value. ' <br>';
}
echo "<br>";

//Array indexados y asociativos
//indexados
$arrayi = array('elemento 1 ','elemento 2 ');
echo $arrayi[0];
echo $arrayi[1];
echo "<br>";
for($i=0;$i<count($arrayi);$i++){
	echo "indice: $i valor: $arrayi[$i]";
}

//asociativos
$arraya = array('Pedro' => 'MX', 'Joel' => 'USA');
echo "<br>".$arraya["Pedro"]."<br>";
foreach ($arraya as $key => $value) {
	echo " $key: $value ";
}
echo "<br>";

$meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');

foreach ($meses as $mes) {
	echo $mes.'<br>';
}


?>

