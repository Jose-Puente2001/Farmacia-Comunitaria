<?php

require_once 'farmacia.php';

if($_POST){

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$medicamento = $_POST['medicamento'];
$cantidad = $_POST['cantidad'];

$query = "INSERT INTO pacientes(nombre, apellido, cedula, medicamento, cantidad, entrega) VALUES('$nombre', '$apellido', '$cedula', '$medicamento', '$cantidad', 'Pendiente')";

$result = mysqli_query($conn, $query);
header("Location: personas.php");

}

?>