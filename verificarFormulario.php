<?



if (isset($_POST['submit'])) {
	
	if(empty($nombre)){
		echo "<p class='error'>* Agregar tu nombre </p>";
	}
	
	if(empty($apellido)){
		echo "<p class='error'>* Agregar tu apellido </p>";
	}
	
	if(empty($direccion)){
		echo "<p class='error'>* Agregar tu direccion </p>";
	}
	
}

?>

