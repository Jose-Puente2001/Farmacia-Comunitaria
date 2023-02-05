<?php require_once 'farmacia.php'; ?>

<?php
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: solid 1px #eee;
    padding: 5px;
}

th {
    background-color: blue;
    color: white;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #eee;
}

tr:hover {
    background-color: #aaa;
    cursor: pointer;
}
h1{
  text-align:center;
}
  
  </style>
</head>
<body>
  <h1>REPORTE DE ENTREGA DE MEDICAMENTOS</h1>
<table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Cedula</th>
              <th>Medicamentos</th>
              <th>Cantidad</th>
              <th>Entrega</th>
            </tr>
        </thead>
     <tbody>
<?php

$query = "SELECT * FROM pacientes";
$result = mysqli_query($conn, $query);

 while($row = mysqli_fetch_array($result)): ?>
        <tr>
            <td><?php echo $row["nombre"]; ?></td>
            <td><?php echo $row["apellido"]; ?></td>
            <td><?php echo $row["cedula"]; ?></td>
            <td><?php echo $row["medicamento"]; ?></td>
            <td><?php echo $row["cantidad"]; ?></td>
            <td><?php echo $row["entrega"]; ?></td> 
        <?php endwhile; ?>
         </tr>
  </tbody>
 </table>
</body>
</html>

<?php

$html = ob_get_clean();

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml(utf8_decode($html));
$dompdf->setPaper('letter');
$dompdf->render();
$dompdf->stream("farmacia-pacientes.pdf", array("Attachment" => false));


 ?>
