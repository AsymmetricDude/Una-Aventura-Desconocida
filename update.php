<?php 

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$foto = $_FILES["foto"];
$id = $_POST["ident"];
$ruta = "img/" . $foto["name"];

$conect = mysqli_connect("localhost", "root", "", "aventura");

$sql = "UPDATE personajes SET nombre = '$nombre', descripcion = '$descripcion', foto = '$ruta' WHERE id = '$id'";

$result = mysqli_query($conect,$sql);

move_uploaded_file($foto["tmp_name"], "img/".$foto["name"]);

echo "<script> location.href='administrador.php'</script>";

?>
