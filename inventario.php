<?php

include('farmacia.php');
include('includes/prohibiracceso.php');

$id = $_POST['id_farmacia'];
$cantidad = $_POST['total'];
$sql = "UPDATE farmacia set total= total -'$cantidad' WHERE id_farmacia='$id'";
$rta = mysqli_query($conn, $sql);
header("Location: medicamentos.php");




?>

