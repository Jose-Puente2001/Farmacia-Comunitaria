<?php 

include('farmacia.php');

if(isset($_GET['id_farmacia'])){

    $id = $_GET['id_farmacia'];
    $query = "DELETE FROM farmacia WHERE id_farmacia = $id";
    $result = mysqli_query($conn,$query);
    header("Location:medicamentos.php");
}

?>