<?
//Funciones
//Funciones ya definidas  | funcion que devuelve el año
echo date('Y');
echo "<br>";
//Funciones con parametro
function promedio($n1,$n2){
	return ($n1+$n2)/2;
}
echo promedio(10,10);
echo "<br>";

//Funciones sin parametro
function mensaje(){
	return 'Hola buen dia';
}
echo mensaje();
echo "<br>";

//Funciones matematicas
//Lo que hace la funcion round es redondear el numero con coma(numero de tipo flotante(float)) que ingrese 
echo round(5.5); // esto devuelve 6
echo "<br>";
echo round(1.49); // esto devuelve 1; no devuelve 2 ya que el numero ingresado no supera o iguala al ,50
echo "<br>";
echo round(1.48,2); //Con el segundo parametro le estoy indicando la cantidad de numeros dsp de la coma que quiero que se muestre. En este caso, 2 numeros despues de la coma
echo "<br>";

//Funcion floor, es el caso contrario a la funcion round
echo floor(5.60); //Lo que hace la funcion es redondear hacia abajo. En este caso devolveria 5
echo "<br>";

//Funcion ceil, es parecido a round, solo que con que haya un solo decimal en el flotante, va a redondear hacia arriba
echo ceil(6.001); //En este caso devolveria 7
echo "<br>";

//Funcion exponente
echo pow(5,3);//El segundo parametro es la cantidad de veces que voy a multiplicar el primer parametro. En este caso me devolveria 125 = 5*5*5
echo "<br>";

//Funcion raiz cuadrada
echo sqrt(4);
echo "<br>";
//Funcion que genera un numero aleatorio entre un minimo(1) y maximo(10)
echo rand(1,10);


//include y required
include(nombreArchivo.php); //incluye variables, funciones y todo lo que tenga el archivo nombreArchivo en este achivo que estoy escribiendo
required(nombreArchivo.php); //incluye variables, funciones y todo lo que tenga el archivo nombreArchivo en este achivo que estoy escribiendo, pero si el archivo que incluyo esta mal, sigue ejecutando el codigo de abajo que le sigue

?>
