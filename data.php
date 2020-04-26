<?php

$nombre = $_POST["nomb"];
$password = $_POST["pass"];

$link = mysqli_connect("localhost","root","","aventura")or die("error");
$sql = "SELECT * FROM login WHERE nombre='$nombre' AND contra = '$password'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

if ($count == 1) {
    session_start();
    $_SESSION["usuario"] = $nombre;
    echo "<script> location.href='administrador.php'</script>";
}

else{
    echo "<script> location.href='login.php?error=dato'</script>";
}

mysqli_close($link);

?>