<?php

require_once 'farmacia.php';
include('includes/prohibiracceso.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
</head>

<body>

<?php require_once 'includes/menu.php'; ?>

<br><br><br>
<div class="d-flex justify-content-center">
<div class="col-sm-2">
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">AGREGAR PACIENTE</button><?php include("modal_pacientes.php");?>
</div>
 <div class="col-sm-2">
    <a class="btn btn-success"  href="pacientes_reporteEXCEL.php">DESCARGAR EXCEL</a></div>
    <div class="col-sm-2">
    <a class="btn btn-danger"  href="pacientes_pdf.php">DESCARGAR PDF</a>
</div>
</div>
<form class="d-flex justify-content-center m-4" action="buscador_pacientes.php" method="post">
    <label for="buscar">Pacientes: </label>
    <input type="text" name="buscar" id="buscar">
    <input class="btn btn-info" type="submit" name="enviar" value="Buscar Pacientes">
</form>
<br>
<div class="container">
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th> 
            <th scope="col">Apellido</th> 
            <th scope="col">Cedula</th> 
            <th scope="col">Medicamento</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Entrega</th> 
            <th scope="col">Acciones</th>
            <th scope="col">Acciones</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php
   
    $query = "SELECT * FROM pacientes";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_array($result)): ?>
    <tr>
        <th><?php echo $row['id_paciente'];?></th>
        <th><?php echo $row['nombre'];?></th>
        <th><?php echo $row['apellido'];?></th>
        <th><?php echo $row['cedula'];?></th>
        <th><?php echo $row['medicamento'];?></th>
        <th><?php echo $row['cantidad'];?></th>
        <th><?php echo $row['entrega'];?></th>
        <th><a href="usuarios.php?id_paciente=<?php echo $row['id_paciente'];?>"><img src="img/bolsa.jpg" class="img-fluid" alt="Responsive image" style="height:100px"></a></th>
        <th><a href="" class="btn btn-primary">Editar</a></th>
        <th><a href="" class="btn btn-danger">Eliminar</a></th>
    </tr>
   <?php endwhile; ?>
    </tbody>
</table>
</div>
</body>
</html>