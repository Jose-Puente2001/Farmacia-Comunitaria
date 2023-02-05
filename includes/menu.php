<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
   <h2>Farmacia Comunitaria Raul Gonzales Castro</h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php 
    $idusers = $_SESSION['id'];
    $query = "SELECT id, name FROM users WHERE id='$idusers'";
    $result = mysqli_query($conn, $query);
    while($row= mysqli_fetch_array($result)):?>
      <h5>Bienvenido <?php echo $row['name']; ?></h5>
    <?php endwhile; ?></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="medicamentos.php">Medicamentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="personas.php">Pacientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cerrar.php">Cerrar sesion</a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>