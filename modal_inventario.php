<?php

require_once 'includes/header.php';
require_once 'farmacia.php';

if(isset($_GET['id'])){

$id =  $_GET['id_farmacia'];
$total = $_GET['total'];



}

?>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Descuento de Medicamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="inventario.php" method="POST">
      <div class="modal-body">
      	<input type="text" name="id_farmacia" id="" style="visibility:hidden"value="<?=$id?>">
      </br>
        Cantidad: <input type="number" name="total" value="<?=$total?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary" name="descontar">Descontar</button>
      </div>
      </form>
    </div>
  </div>
</div>
