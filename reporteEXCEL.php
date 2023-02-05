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
              <td>id</td>
              <td>Medicamento</td>
              <td>Lote</td>
              <td>Vencimiento</td>
              <td>Restante</td>
              <td>Total</td>
              <td>Ubicacion</td>
            </tr>
            <tbody>
            <?php
           $consulta="SELECT * from farmacia";
           $resultado=mysqli_query($conn,$consulta);

           while($row = mysqli_fetch_array($resultado)): ?>
        <tr>
            <th><?php echo $id=$row["id_farmacia"]; ?></th>
            <th><?php echo $medicamento=$row["medicamento"]; ?></th>
            <th><?php echo $lote=$row["lote"]; ?></th>
            <th><?php echo $vencimiento=$row["vencimiento"]; ?></th>
            <th><?php echo $restante=$row["restante"]; ?></th>
            <th><?php echo $total=$row["total"]; ?></th>
            <th><?php echo $ubicacion=$row["ubicacion"]; ?></th> 
        <?php endwhile; ?>
            </tr>
          </tbody>
        </table>
        
        
<script src="excel.js"></script>
</body>
</html>