<?php

session_start();

if (isset($_SESSION["usuario"])) {
 
}

else{echo "<script> location.href='login.php'</script>";
}

$conect = mysqli_connect("localhost", "root", "", "aventura");

$sql = "SELECT * FROM personajes";

$result = mysqli_query($conect, $sql);

$Conexion = mysqli_connect("localhost","root","", "aventura");
$Sql = "SELECT * FROM usuarios ";
$resultado = mysqli_query($Conexion, $Sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>



</head>
<body background="img/estrellas.png">

<div class="bot" style="
margin-top: 100px; margin-left: 3%;">
	<a href="#"><img style="margin-top: 3%;" width="13%" src="img/editar.png" id="editar"></img></a><br>
	<a href="#"><img style="margin-top: 3%;" width="13%" src="img/correos.png" id="enviar"></a></img>
</div>

<a href="logout.php"><img src="img/salir.png" style="width: 10%; margin-left:63%; position: absolute; top: 90%;">
	
</img></a>

		
	</div>

	<div class="negro"><ul class="nav nav-pills
		justify-content-center">
   <ul class="nav nav-pills
		justify-content-center">
		
 </li>

<a href="crear.html"><img src="img/crear.png" style="width: 10%; margin-left: 25%; position: absolute; top:90%;">
	
</img></a>

<a href="index.php"><img src="img/publicaciones.png" style="width: 10%; margin-left: 37%; position: absolute; top:90%;"></img></a>

	<table class="table table-striped"
	style="position: absolute; top: 100px;left: 20%;
	width: 75%; background-color: #3d277a; border-radius: 5px;"  id="tabla">
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

<table class="table table-striped"
	style="position: absolute; top: 100px;left: 20%;
	width: 75%; display: none; background-color: #3d277a; border-radius: 5px; " id="tabla2" >
		<thead>
			<tr style="color:white; font-size: 250%;">

   <th scope="col">Nombre</th>
	<th scope="col">Correo</th>
	<th scope="col">Enviar correo</th>
				</tr>
			</thead>

	<tbody>
<?php  while ($row = mysqli_fetch_array($resultado)) {
 echo "<tr style='color:white; font-size:180%;'><td>";
  echo $row["nombre"];
  echo "</a></td>";
  echo "<td>";
  echo $row["correo"];
   echo "</td>";
  echo "<td><button type='button' class='btn btn' style='background-color:#6317FA;'><a href ='enviar.php?idPerson=";
echo $row["id"];
  echo"' style='color:white;'>Enviar correo</a></button>
      </td>";

    

  echo "</tr>";

}

?>
</tbody>

</table>


<script src="js/codigo.js"></script>
</body>

</html>