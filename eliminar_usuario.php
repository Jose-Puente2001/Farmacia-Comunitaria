<?php 

include('farmacia.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn,$query);
    header("Location:usuarios.php");
}

?>