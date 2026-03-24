<?php

session_start();

include 'conexion.php';
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];


$sql="SELECT idAlumno FROM alumno
WHERE correo='".$correo."'
AND contrasena='".$contrasena."';";

echo $sql;
echo "<br/>";


?>