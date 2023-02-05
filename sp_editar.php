<?php
include("farmacia.php");
$id = $_POST['id_farmacia'];
$medicamento = $_POST['medicamento'];
$lote = $_POST['lote'];
$vencimiento = $_POST['vencimiento'];
$restante = $_POST['restante'];
$total = $_POST['total'];
$ubicacion = $_POST['ubicacion'];

 
 $sql = "UPDATE farmacia set medicamento='$medicamento', 
 lote='$lote', vencimiento='$vencimiento', total='$total', 
 ubicacion='$ubicacion' where id_farmacia='$id'";
 $rta = mysqli_query($conn, $sql); 
 if (!$rta) {
    echo "No se Actualizo!";
 }
 else {
    header("Location: medicamentos.php");
 }
?>