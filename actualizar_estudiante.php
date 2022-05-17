<?php
?>
<?php
include_once "conexion.php";
include_once "Estudiante.php";
$estudiante = new Estudiante($_POST["legajo"],$_POST["nombre"], $_POST["apellido"], $_POST["dni"], $_POST["cuil"], $_POST["domicilio"], $_POST["observaciones"], $_POST["telefono"], $_POST["email"]);
$estudiante->actualizar();
header("Location: mostrar_estudiantes.php");