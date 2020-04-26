<?php
session_start();

if (isset($_SESSION["usuario"])) {
 
}

else{echo "<script> location.href='login.php'</script>";
}

$idUser = $_GET["idPerson"];

$conect = mysqli_connect("localhost", "root", "", "aventura");

$sql = "SELECT * FROM usuarios WHERE id = '$idUser'";

$result = mysqli_query($conect,$sql);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contactenos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</head>
<body background="img/estrellas.png" style="text-align: center; font-family: surabanglus;
color: white;
font-size:2em;">
	<form action="envio.php" method="post">
	<?php
	echo "<h2 style='color:white;'>Enviar correo a: <h2>";
echo '<h2 style= "color:white;">'. $row["nombre"].'<h2>';
	?>
	<br>


		<label for="com" style="color: white;">Comentario:</label><br>
		<textarea id="com" name="comentario"
		style="height: 280px;"></textarea><br>
		 <input type="hidden" name="ident" value="<?php echo $row['id']?>">
		  <input type="hidden" name="mail" value="<?php echo $row['correo']?>">
		    <input type="hidden" name="hola" value="<?php echo $row['nombre']?>">

		<input type="submit">
	</form>
<script src="js/codigo.js"></script>	
</body>
</html>