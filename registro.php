<?php 
$Cont = $_POST["contra"];
$Correo = $_POST["correo"];
$Nomb = $_POST["nombre"];
$Edad = $_POST["edad"];

$Conexion = mysqli_connect("localhost","root","", "aventura");
$Sql = "SELECT * FROM usuarios WHERE nombre = '$Nomb' OR correo = '$Correo'";
$Result = mysqli_query($Conexion, $Sql);
$Contador = mysqli_num_rows($Result);

if ($Contador >= 1) {
    echo "<p> El usuario ya existe, selecione otro nombre de usuario </p>";
}
else
{
    $Sql2="INSERT INTO usuarios (contra,correo,nombre,edad) VALUES('$Cont','$Correo','$Nomb','$Edad')";
    $Result2= mysqli_query($Conexion, $Sql2);
    echo " <p> El usuario se ha registrado exitosamente</p> ";
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="fuentes/fuentes.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<title></title>

	<style>

	p{color: white; font-size: 250%;
		margin-top: 20%;
	    margin-left: 8%;
	    font-family: surabanglus;}

}
</style>

</head>
<body style="font-family: surabanglus; 
color: white; font-size: 15px; background-color: #4040A8; text-align: center;" >

<a href="reglog.php"><button class="btn btn-unique" >Regresar</button></a>
<script src="js/codigo.js"></script>
</body>
</html>