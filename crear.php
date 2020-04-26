<?php

session_start();

if (isset($_SESSION["usuario"])) {
 
}

else{echo "<script> location.href='login.php'</script>";
}

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$foto = $_FILES["foto"];

$ruta = "img/" . $foto["name"];
$conect = mysqli_connect("localhost", "root", "", "aventura");
$sql = "INSERT INTO personajes ( id, nombre, descripcion, foto) VALUES (NULL,'$nombre','$descripcion','$ruta')";

$result = mysqli_query($conect, $sql);

move_uploaded_file($foto["tmp_name"], "img/".$foto["name"]);

if ( $foto["error"] > 0 ) {
    echo "<h2>error al subir el archivo </h2> <br> ";
}else{
    echo " <h2>archivo cargado </h2> <br>  ";
}

if ( $foto["type"] == "image/jpeg" || $foto["type"] == "image/png" ) {
    echo " <h2>El formato del archivo es válido </h2> <br>";
}else{
    echo  " <h2>El formato no es válido, seleccione un .jpg o un .png </h2> <br> ";
}

if ( file_exists( "img/" .$foto["name"]) ) {
            echo " <h2>el nombre del archivo ya existe</h2> <br> ";
        }

$abc = "abcdefghijklmnopqrstuvwxyz0123456789";
$abcseparado = str_split($abc); 
$textoNuevo = "";
for ($i=0; $i<10 ; $i++) { 
    $random = rand(0,35);
    $textoNuevo .= $abcseparado[$random];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>

h2{color: white; font-size: 250%; margin-top: 6%; margin-left: 20%;
}
	
</style>

</head>
<body background="img/estrellas.png">

<a href="crear.html"><img src="img/crear.png" style="
                      width: 10%; margin-left: 58%; 
                      position: absolute; top:3%;"></img></a>

<a href="administrador.php"><img src="img/editar.png" style="
                      width: 10%; margin-left: 71%; 
                      position: absolute; top:3%;"></img></a>

<a href="index.php"><img src="img/publicaciones.png" style="
                      width: 11%; margin-left: 84%; 
                      position: absolute; top:3%;"></img></a>




</body>
</html>