<!--Ejercicio donde pongo en practica php y el uso de una unica fuente(archivo)-->
<!--Formulario donde ingresamos nombre y 3 notas, y devuelve el nombre con el promedio de las 3 notas. Todo en la misma pagina-->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>BB</title>
  <style>

  </style>
</head>
<body>
<form action="BauInicioDeSesion.php" method="post">
<h1>Promedios</h1>
<label for="">Nombre: </label>
<input type="text" name="nombre">

<label for="">Nota 1: </label>
<input type="text" name="nota1">

<label for="">Nota 2: </label>
<input type="text" name="nota2">

<label for="">Nota 4: </label>
<input type="text" name="nota3">
<input type="submit" value="Calcular"name="submit">
</form>
</body>
</html>

<?
if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$nota3 = $_POST['nota3'];
	$promedio = ($nota1 + $nota2 + $nota3)/3;
	echo "<p> $nombre tu promedio es: $promedio</p>";
}
?>
