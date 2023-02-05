<?php

include("farmacia.php");

if($_POST){

$medicamento=$_POST['medicamentos'];
$lote=$_POST['lote'];
$vencimiento=$_POST['vencimiento'];
$total=$_POST['total'];
$ubicacion=$_POST['ubicacion'];

$query = "INSERT INTO farmacia(medicamento, lote, vencimiento, total, ubicacion) VALUES ('$medicamento','$lote','$vencimiento','$total','$ubicacion')";
$result = mysqli_query($conn, $query);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/stylesSC2.css" /> 
    <title>Document</title>
  
</head>
<body>

    <form action="SC2.php" id="tabla" method="post">

        <h1>Registrar Medicamento</h1>

   <label>Medicamento</label> <br>
   <input type="text" name="medicamentos" id="medicamento" placeholder="Medicamento"> <br/>
   <label>Lote de medicamento</label> <br>
   <input type="text" name="lote" id="lote" placeholder="Lote"> <br/>
   <label>Vencimiento del medicamento</label> <br>
   <input type="text" name="vencimiento" id="vencimiento" placeholder="Vencimiento"> <br/> 
   <label>Cantidad Total</label> <br>
   <input type="text" name="total" id="total" placeholder="Total"> <br/> 
   <label>Ubicacion</label> <br>
   <input type="text" name="ubicacion" id="ubicacion" placeholder="Ubicacion"> <br/> 

   <input type="submit" value="Guardar">
   <a href="medicamentos.php">Regresar</a>

    </form>
</body>
</html>