<?php
require_once 'farmacia.php';
?>

<?php require_once 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel</title>

    
    <script src="libreriaexcel/xlsx.full.min/xlsx.full.min.js"></script>
    <script src="libreriaexcel/FileSaver.min/FileSaver.min.js"></script>
    <script src="libreriaexcel/tableexport.min/tableexport.min.js"></script>



    <div class="container">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar Excel
            </button>
    <br><br/>
        <table id="tabla" class="table table-bordered table-hover">
        
           <tr>
              <td>ID</td>
              <td>Nombre</td>
              <td>Apellido</td>
              <td>Cedula</td>
              <td>Medicamento</td>
              <td>Cantidad</td>
              <td>Entrega</td>
            </tr>
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
        <?php endwhile; ?>
            </tr>
          </tbody>
        </table>
        
        
<script src="excel.js"></script>
</body>
</html>