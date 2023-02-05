<?php

if(!isset($_SESSION['id']) || !isset($_SESSION['nombredelusuario'])){
  header("Location: index.php");
}

?>