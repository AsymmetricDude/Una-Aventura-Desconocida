<?php

$idUser = $_GET["idPerson"];

$conect = mysqli_connect("localhost", "root", "", "aventura");

$sql = "DELETE FROM personajes WHERE id='$idUser'";

$result = mysqli_query($conect, $sql);
echo "<script> location.href='editar.php'</script>";

?>