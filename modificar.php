<?php

$idUser = $_GET["idPerson"];

$conect = mysqli_connect("localhost", "root", "", "aventura");

$sql = "SELECT * FROM personajes WHERE id = '$idUser'";

$result = mysqli_query($conect,$sql);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">

	<title></title>
</head>
<body style="background: url(img/estrellas.png); color:white; font-size: 200%; margin-top: 12%; margin-left: 30%;">

	<h4 style="font-size: 200%;">Editar: <?php echo $row["nombre"];?></h4>
    <form method="post" action="update.php" enctype="multipart/form-data">
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>
        <textarea style="width: 80%;height: 200px; border-radius: 5px;"  name="descripcion" value="<?php echo $row['descripcion']; ?>"></textarea><br>
      <input  type="file" name="foto" value="<?php echo $row['foto']; ?>">
        <br>
        <input type="hidden" name="ident" value="<?php echo $row['id']?>">
        <input type="submit" name="">

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>