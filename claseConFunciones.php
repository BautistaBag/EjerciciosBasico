<?
//Declaro una clase
class miClase{
	//declaro atributos
	public $resultado=0;
	public  function retornaString($edad){
		if($edad > 18 ){
			echo "Es mayor de edad";
		}else{
			echo "Es menor de edad";
		}
	}
	public function retornaEntero($valor){
		if($valor > 0){
			return 1;
		}else{
			return 0;
		}
	}
	public  function retornaArray($ciclos){
		$datos=array();
		for($i=0;$i<$ciclos;$i++){
			$datos[$i]=$i;
		}
		return $datos;
	}
	public function retornaJson(){
		$arr = array(
		"hdd"=>500,
		"pantalla"=>32,
		"ram"=>16);
	return json_encode($arr);
	}
}

//Declaramos un objeto
$obj = new miClase();
//Mandamos a llamar a la funcion retornaString del objeto miClase(muestra por pantalla el mensaje "Es mayor de edad"(ingresandole el valor 20 como parametro))
echo $obj->retornaString(20);
echo "<br>";

//Mandamos a llamar a la funcion retornaArray del objeto miClase(con ayuda de la funcion var_dump muestro por pantalla el arraglo con todos sus valores) 
echo var_dump($obj->retornaArray(4));
echo "<br>";
//Mandamos a llamar a la funcion retornaJson del objeto miClase(mostrando por pantalla los valores del array declarado en dicha funcion)
echo $obj->retornaJson();

?>


