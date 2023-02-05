<?php

include('farmacia.php');

$nombre = $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];



//Para iniciar sesión
if(isset($_POST["btnloginx"]))
{

$queryusuario = mysqli_query($conn,"SELECT * FROM users WHERE name = '$nombre'");
$nr 		= mysqli_num_rows($queryusuario); 
$mostrar	= mysqli_fetch_array($queryusuario); 
	
if (($nr == 1) && (password_verify($pass,$mostrar['password'])))
	{ 
		
		$_SESSION['nombredelusuario']=$nombre;
		$_SESSION['id'] = $mostrar['id'];
		header("Location: medicamentos.php");
	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'index.php' </script>";
	}
}


//Para registrar
if(isset($_POST["btnregistrarx"]))
{

$queryusuario 	= mysqli_query($conn,"SELECT * FROM users WHERE name = '$nombre'");
$nr 			= mysqli_num_rows($queryusuario); 

if ($nr == 0)
{

	$pass_fuerte = password_hash($pass, PASSWORD_BCRYPT);
	$queryregistrar = "INSERT INTO users(name, password) values ('$nombre','$pass_fuerte')";
	

if(mysqli_query($conn,$queryregistrar))
{
	echo "<script> alert('Usuario resgistrado: $nombre');window.location= 'index.php' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
}

}else
{
		echo "<script> alert('No puedes registrar a este usuario: $nombre');window.location= 'index.php' </script>";
}

} 

?>