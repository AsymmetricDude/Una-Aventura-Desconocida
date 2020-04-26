<?php 
$Nombre = $_POST["nombre"];
$Comentario = $_POST["comentario"];

$Correo= "julian.murillo.jMG@gmail.com";
$Asunto = "Correo enviado desde el sitio web por:" . $Nombre;
$Mensaje = "<div><b>Nombre:</b><br>" . $Nombre . "<br><b>Mensaje:</b><br></div>" . $Comentario;
$TipoMensaje = "Content-type:text/html;charset=UTF-8";

mail($Correo, $Asunto, $Mensaje,$TipoMensaje);
echo "<div>Se envió el mensaje:<br>" . $Mensaje. "</div>"; 

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/fuentes.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		div{background:#3E277A; width: 30%; margin-left: 35%;}
	</style>
</head>
<body background="img/estrellas.png" style =" font-family: surabanglus;
color: white;
font-size:2em; text-align: center;"><br>
<button  type="button" class="btn btn-light"  style="background-color: #3E277A; color:white;"><a style="text-decoration: none; color: white;" href="index.php">Regresar</a></button>
<script src="js/codigo.js"></script>
</body>
</html>