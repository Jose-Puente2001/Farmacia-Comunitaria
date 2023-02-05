<?php
require 'includes/header.php';
include('farmacia.php');
include('includes/prohibiracceso.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Farmacia</title>  
</head>
<body>

<?php require_once 'includes/menu.php'; ?>

<br/><br/>
<div class="clearfix"> </div><br/>
  <div class="d-flex justify-content-center">
    <div class="col-sm-2">
    <a class="btn btn-primary"  href="SC2.php">AGREGAR</a>
</div>
<div class="col-sm-2">
    <a class="btn btn-success"  href="reporteEXCEL.php">DESCARGAR EXCEL</a></div>
    <div class="col-sm-2">
    <a class="btn btn-danger"  href="pdf.php">DESCARGAR PDF</a>
</div>
</div>
</div>
    
    <form class="d-flex justify-content-center m-4" action="buscador.php" method="post">
        <div class="form-group">
        <label for="campo">Medicamentos: </label>
      </div>
       <div class="form-group">
        <input type="text" name="search" id="search">
    </div>
        <div class="form-group">
        <input class="btn btn-info ml-1" type="submit" name="enviar" value="Buscar Medicamentos">
    </div>
    </form>

    <div class="clearfix"> </div>
    <br>
    <div class="container">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th> 
                <th scope="col">Medicamento</th> 
                <th scope="col">Lote</th> 
                <th scope="col">Vencimiento</th>  
                <th scope="col">Cantidad</th> 
                <th scope="col">Ubicacion</th>
                <th scope="col">Acciones</th>
                <th scope="col">Acciones</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>  
    <tbody>
    <?php 
    $query = "SELECT * FROM farmacia";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)): ?>
        <tr>
            <th><?php echo $id=$row["id_farmacia"]; ?></th>
            <th><?php echo $medicamento=$row["medicamento"]; ?></th>
            <th><?php echo $lote=$row["lote"]; ?></th>
            <th><?php echo $vencimiento=$row["vencimiento"]; ?></th>
            <th><?php echo $total=$row["total"]; ?></th>
            <th><?php echo $ubicacion=$row["ubicacion"]; ?></th>
            <th><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id ?>">
           <i class="fa-solid fa-cart-shopping"></i>
         </button><?php include("modal_inventario.php"); ?></th>
            <th>
            <a href="editar.php? 
                    id_farmacia=<?php echo $row['id_farmacia'];?>  &
                    medicamento=<?php echo $row['medicamento'];?> &
                    lote=<?php echo $row['lote'];?> &
                    vencimiento=<?php echo $row['vencimiento'];?> &
                    restante=<?php echo $row['restante'];?> &
                    total=<?php echo $row['total'];?> &
                    ubicacion=<?php echo $row['ubicacion'];?>
                    " class="btn btn-primary">Editar</a>
            </th>
            <th><a class="eliminar btn btn-danger" href="eliminar.php?id_farmacia=<?php echo $row['id_farmacia'];?>">Eliminar</th> 
        <?php endwhile; ?>
       </tbody>
    </table>
</div>
</body>
</html>
<?php require_once 'includes/footer.php'; ?>


