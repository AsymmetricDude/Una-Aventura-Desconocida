
<?php 

$Conexion = mysqli_connect("localhost","root","", "aventura");
$Sql = "SELECT * FROM usuarios ";
$result = mysqli_query($Conexion, $Sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>editar</title>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body background="img/estrellas.png">


	<table class="table table-striped"
	style="position: absolute; top: 100px;left: 20%;
	width: 75%;" id="tabla">
		<thead>
			<tr style="color:white; font-size: 250%;">

   <th scope="col">Nombre</th>
	<th scope="col">Correo</th>
	<th scope="col">Enviar correo</th>
				</tr>
			</thead>

	<tbody>
	 <?php while ($row = mysqli_fetch_array($result)) {
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
