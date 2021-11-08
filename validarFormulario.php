//Verifico si en los campos ingresados estan cargados; si estan vacios muestro un mensaje de Agregar datos en dicho campo//Valido los campos

<?
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
?>

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
  <!--Los if que estan dentro de los value son para el caso que se complete ese campo, 
pero que algun otro campo no sea valido, entonces la pagina(fuente) se reiniciaria  pero se seguiria mostrando los valores validos-->

<form action="formulario.php" method="post">
<h1>Promedios</h1>
<label for="">Nombre: </label>
<input type="text" name="nombre" value="<? if(isset($nombre)) echo $nombre?>">

<label for="">Apellido: </label>
<input type="text" name="apellido" value="<? if(isset($apellido)) echo $apellido?>">

<label for="">Direccion: </label>
<input type="text" name="direccion" value="<? if(isset($direccion)) echo $direccion?>">

<input type="submit" value="Enviar"name="submit">
</form>
</body>
</html>

<?
include("verificarFormulario.php");
?>
