<?php

include ("conexion.php");
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    

</head>
<body>
<?php
$sql = "DELETE FROM faker";
if ($conn->query($sql) === TRUE) {
    echo "datos borrados correctamente";
} else {
    echo "Hubo un error al insertar datos" . $conn->error;
}
// Cerramos la conexión
$conn->close();
?>
<form action = "index.php" id="admin" method="POST">
            <button type="submit" class="btn btn-primary" >Admin</button>
        </form>


</body>
</html>
