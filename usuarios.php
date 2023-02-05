<?php

require_once 'farmacia.php';

if(isset($_GET['id_paciente'])){

  $id = $_GET['id_paciente'];
  $query = "UPDATE pacientes SET entrega = 'Entregado' WHERE id_paciente=$id";
    mysqli_query($conn, $query);
    header("Location: personas.php");
}

?>

