
<?php 

$inc = include("conexion.php");

$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
?>
<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>Id</td>
			<td>Cedula</td>
			<td>Nombre</td>
			<td>Apellidos</td>
			<td>Direccion</td>
                        <td>telefono</td>
                        <td>Tipo de tarjeta</td>	
                        <td>Numero de tarjeta</td>
                        <td>Estado Civil</td>
		</tr>
<?php
if ($inc) {
$consulta = "SELECT * FROM faker";
$resultado = mysqli_query($conn,$consulta);
if ($resultado) {
for ($i = 1; $i<=13; $i++){

$row = $resultado->fetch_array();
$id = $row['id'];
$cedula = $row['cedula'];
$nombre = $row['nombre'];
$apellidos = $row['apellidos'];
$direccion = $row['direccion'];
$telefono = $row['telefono'];
$tipo_tarjeta = $row['tipo_tarjeta'];
$numero_tarjeta = $row['numero_tarjeta'];
$estado_civil = $row['estado_civil'];
?>
<div>
<tr>
<td><?php echo $id ?></td>
<td><?php echo $cedula ?></td>
<td><?php echo $nombre ?></td>
<td><?php echo $apellidos ?></td>
<td><?php echo $direccion ?></td>
<td><?php echo $telefono ?></td>
<td><?php echo $tipo_tarjeta ?></td>
<td><?php echo $numero_tarjeta ?></td>
<td><?php echo $estado_civil ?></td>
</tr>
<div>


</div>
<?php

}
}
}

?>




