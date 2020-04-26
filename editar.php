<?php

session_start();

if (isset($_SESSION["usuario"])) {
 
}

else{echo "<script> location.href='login.php'</script>";
}

$conect = mysqli_connect("localhost", "root", "", "aventura");

$sql = "SELECT * FROM personajes";

$result = mysqli_query($conect, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>editar</title>
</head>
<body background="img/estrellas.png">

<a href="logout.php"><img src="img/salir.png" style="width: 10%; margin-left: 89%; position: absolute; top: 90%;">
	
</img></a>

		
	</div>

	<div class="negro"><ul class="nav nav-pills
		justify-content-center">
   <ul class="nav nav-pills
		justify-content-center">
		
 </li>

<a href="crear.html"><img src="img/crear.png" style="width: 10%; margin-left: 45%; position: absolute; top:90%;">
	
</img></a>

<a href="index.php"><img src="img/publicaciones.png" style="width: 10%; margin-left: 34%; position: absolute; top:90%;"></img></a>

	<table class="table table-striped">
		<thead>
			<tr style="color:white; font-size: 250%;">

   <th scope="col">Nombre</th>
	<th scope="col">Editar</th>
	<th scope="col">Eliminar</th>
				</tr>
			</thead>

	<tbody>
		 <?php while ($row = mysqli_fetch_array($result)) {
  echo "<tr style='color:white; font-size:180%;'><td>";
  echo $row["nombre"];
  echo "</a></td>";
  echo "<td><button type='button' class='btn btn' style='background-color:#6317FA;'><a href ='modificar.php?idPerson=";
echo $row["id"];
  echo"' style='color:white;'>Editar</a></button>
      </td>";

      echo "<td><button type='button' class='btn btn-danger'><a href ='eliminar.php?idPerson=";
      echo $row["id"];
      echo "' style='color: white;'>Eliminar</a></button>
      </td>";

  echo "</tr>";

}
?>
</tbody>

</table>

	<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>