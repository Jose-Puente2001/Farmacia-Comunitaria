<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Paciente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="agregarpaciente.php" method="POST">
      <div class="modal-body">
      	Nombre: <input type="text" name="nombre" placeholder="nombre">
      </br>
        Apellido: <input type="text" name="apellido" placeholder="apellido">
        </br>
        Cedula: <input type="text" name="cedula" placeholder="cedula">
        </br>
        Medicamento: <input type="text" name="medicamento" placeholder="medicamento">
        </br>
         Cantidad: <input type="text" name="cantidad" placeholder="cantidad">
        </br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary" name="agregar">Agregar</button>
      </div>
      </form>
    </div>
  </div>
</div>