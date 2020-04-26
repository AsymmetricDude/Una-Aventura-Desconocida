<?php

$conect = mysqli_connect("localhost" , "root" , "", "aventura");

$sql = "SELECT * FROM personajes";

$result = mysqli_query($conect, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Una aventura desconocida</title>
	<link rel="stylesheet" href="fuentes/fuentes.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body style="background-color: #268BEB;" >

<div class="container">
  <div style="">
   <a  href="reglog.php"> <img src="img/icono.png" width="4%" style="background:white; margin-left: 95%; border-radius: 5px;"></a>
  </div>

<nav class="row">

	<div class="col-lg-3 col-md-6 col-3 col-sm-3"  >
		<img src="img/logo.png" id="logo" 
    style=" width: 250%; 
    position: absolute; bottom: 1%; object-fit: contain; margin-left:175px;" >
	<video controls class="d-block" style="width: 300%; position: relative;left: 65%; top:65%; " >

		<source src="vid/UnaAventuraDesconocida.mp4"  >

	</video>
    </div>

<section class="row" style="margin-top: 25%; font-family: surabanglus; font-size: 23px;">

<?php 

while ($row = mysqli_fetch_array($result)) {

  echo '<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
 echo '<div class="modal-dialog" role="document">';
    echo '<div class="modal-content">';
      echo '<div class="modal-header">';

       echo '<h5 class="modal-title" id="exampleModalLabel">'; 
        echo $row["nombre"];

        echo '</h5>';

        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>';
      echo "</div>";

     echo '<div class="modal-body">';
        echo $row["descripcion"];
      echo '</div>';

      echo '<div class="modal-footer">';
        
      echo '</div>';

    echo '</div>';

  echo '</div>';

echo '</div>';

echo '<div class="personajes col-lg-6 col-md-12 col-12 col-sm-12" style="color:white;">';
	echo' <img class="card-img-top" ';
 echo 'src="';
 echo $row["foto"];
 echo '" alt="Card image cap">';
 echo '</div>';

echo '<div class="info col-lg-6 col-md-12	 col-12 col-sm-12" style = "margin-top:3%; color:white;
background: #3d277a;">';
		echo "<h1>";
    echo $row["nombre"]; 
    echo "</h1>";
    echo "<hr>";

    echo "<p>";
    echo $row["descripcion"]; 
    echo "</p>";
		


	echo "</div>";

  }
      ?>

</section >

<section class="row ">

	<div class="col-lg-12 col-md-12	 col-12 col-sm-12 idk">
		<h1>Sinopsis:</h1>
		<p>Andrés es un niño de 11 años que, aburrido de su ordinaria vidas siempre visitaba el bosque cercano a su casa, en el observaba a los animales, sus favoritos eran los pájaros por eso decide un día adentrarse en el bosque en busca de la leyenda de Isma, una maga que vive en el bosque y que le brindara a Andrés una experiencia única, Una aventura desconocida.</p>

</div>

</section>


  <a href="#"><img data-toggle="modal" data-target="#exampleModal" src="img/varita.png" style="width: 8%;
       position: fixed;
       top: 95%;
       right: 2%;"></a>

       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contactenos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="contactenos.php" method="post">
    <label for="nom" style="margin-left: 33%;">Nombre:</label><br>
    <input style="margin-left: 15%; border-radius: 8px;" id="nom" type="text" name="nombre"><br><br>

    <label style="margin-left: 33%;" for="com">Comentario:</label><br>
    <textarea style="margin-left: 15%; border-radius: 8px; height: 500px;" id="com" name="comentario"></textarea><br>
    <input type="submit" class="btn btn-unique" style=" margin-left: 40%; background: #4040A8; color: white;">
  </form>



      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<script src="js/codigo.js"></script>
</body>
</html>