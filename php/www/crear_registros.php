<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Registros</title>
    

</head>
<body>
<form action = "borrar.php" id="borrar-registros" method="POST">
            <button type="submit" class="btn btn-primary" >Borrar registros</button>
        </form>
<form action = "index.php" id="admin" method="POST">
            <button type="submit" class="btn btn-primary" >Admin</button>
        </form>

</body>
</html>
<?php
# Load Fakers own autoloader
require_once 'vendor/autoload.php';
include ("conexion.php");
$faker = Faker\Factory::create('es_Es');

$conn = new mysqli($servidor, $usuario, $password, $nombreBD);

//se incorpora faker a las columnas de la tabla faker con datos aleatorios

for ($i=1; $i<=10; $i++) {
$more_escaped = addcslashes($escaped, ",%_-x+'.()");
$sql = "INSERT INTO faker VALUES(
'{$faker->randomDigit()}',
'{$faker->randomDigit()}',
'{$faker->name()}',
'{$faker->randomDigit()}',
'{$faker->randomDigit()}',
'{$faker->phoneNumber()}',
'{$faker->creditCardType()}',
'{$faker->creditCardNumber()}',
'{$faker->randomElement($array = array('Soltero', 'Casado', 'Divorciado'))}')
 ";

if ($conn->query($sql) === TRUE) {
   // echo "datos agregados correctamente";
} else {
    echo "Hubo un error al insertar datos" . $conn->error;
}





}
?>
<?php
require_once 'mostrar_tablas.php';
?>


