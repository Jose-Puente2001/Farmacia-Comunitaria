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
  <h1>FARMACIA COMUNITARIA RAUL GONZALEZ CASTRO</h1>
<table>
        <thead>
          <tr>
              <th>Medicamento</th>
              <th>Lote</th>
              <th>Vencimiento</th>
              <th>Restante</th>
              <th>Total</th>
              <th>Ubicacion</th>
            </tr>
        </thead>
     <tbody>
<?php

$query = "SELECT * FROM farmacia";
$result = mysqli_query($conn, $query);

 while($row = mysqli_fetch_array($result)): ?>
        <tr>
            <td><?php echo $medicamento=$row["medicamento"]; ?></td>
            <td><?php echo $lote=$row["lote"]; ?></td>
            <td><?php echo $vencimiento=$row["vencimiento"]; ?></td>
            <td><?php echo $restante=$row["restante"]; ?></td>
            <td><?php echo $total=$row["total"]; ?></td>
            <td><?php echo $ubicacion=$row["ubicacion"]; ?></td> 
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
$dompdf->stream("farmacia-medicamentos.pdf", array("Attachment" => false));


 ?>
