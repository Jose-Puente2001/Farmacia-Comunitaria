<?php

require_once 'farmacia.php';

?>

<?php include('includes/header.php');?>
<?php include('includes/menu.php');?>
<br/><br/>
<div class="clearfix"> </div><br/>
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

 $busqueda = $_POST['buscar'];
 $query = "SELECT * FROM pacientes WHERE nombre LIKE '%$busqueda%'";
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
<?php include('includes/footer.php'); ?>