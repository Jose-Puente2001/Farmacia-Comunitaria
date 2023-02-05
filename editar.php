<?php require_once 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id_farmacia'];
$medicamento = $_GET['medicamento'];
$lote = $_GET['lote'];
$vencimiento = $_GET['vencimiento'];
$total = $_GET['total'];
$ubicacion = $_GET['ubicacion'];
?>
<br/>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col"></div>
        <div class="col">

        <div class="card">
    <div class="card-header">
        Ingresar Datos
    </div>
    <div class="card-body">
        
<form action="sp_editar.php" method="POST">

    <input type="text" name="id_farmacia" id="" style="visibility:hidden" value="<?=$id?>">
                    <br/>
                    MEDICAMENTO:
                    <input type="text" name="medicamento" id="" value="<?=$medicamento?>">
                    <br/>
                    LOTE:
                    <input type="text" name="lote" id="" value="<?=$lote?>">
                    <br/>
                    VENCIMIENTO:
                    <input type="text" name="vencimiento" id="" value="<?=$vencimiento?>">
                    <br/>
                    CANTIDAD:
                    <input type="text" name="total" id="" value="<?=$total?>">
                    <br/>
                    UBICACION:
                    <input type="text" name="ubicacion" id="" value="<?=$ubicacion?>">
                    <br/><br/>
                    <input class="btn btn-primary" type="submit" value="Actualizar">
                    <a class="btn btn-danger" href="medicamentos.php" >Cancelar</a>
                    
               
        </form>

    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>

        </div>
        <div class="col"></div>
    </div>
</div>

</body>
</html>
<?php require_once 'includes/footer.php'; ?>