<?
//Declaro una clase
class miClase{
	//declaro atributos
	public $resultado=0;
	
	//declaro funciones
	public function miMetodo($v1,$v2){
		$this->resultado=$v1+$v2;
		return $this->resultado;
	}
}

//Declaramos un objeto
$obj = new miClase();
//Mandamos a llamar a un metodo de un objeto(muestra por pantalla el valor 15)
echo $obj->miMetodo(5,10);

?>


