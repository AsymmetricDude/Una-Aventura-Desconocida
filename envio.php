
<?php 

session_start();

if (isset($_SESSION["usuario"])) {
 
}

else{echo "<script> location.href='login.php'</script>";
}
$conect = mysqli_connect("localhost", "root", "", "aventura");

$sql = "SELECT * FROM usuarios";

$result = mysqli_query($conect,$sql);
$row = mysqli_fetch_array($result);

$id = $_POST["ident"];
$mail = $_POST["mail"];
$Comentario = $_POST["comentario"];
$name = $_POST["hola"];


$Correo= $mail;
$Asunto = "Correo enviado desde el sitio web por:" . $name;
$Mensaje = "<b>Nombre:</b><br>" . $name . "<br><b>Mensaje:</b><br>" . $Comentario;
$TipoMensaje = "Content-type:text/html;charset=UTF-8";

mail($Correo, $Asunto, $Mensaje,$TipoMensaje);
echo "<p> Se envió el mensaje:<br>" . $Mensaje. "</p>";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</head>
<style>
	p{color: white;}


</style>
<body background="img/estrellas.png" style="text-align: center; font-family: surabanglus;
color: white;
font-size:2em;">

<a href="administrador.php"><img width="13%" src="img/editar.png"></a>


<script src="js/codigo.js"></script>
</body>
 
</html>