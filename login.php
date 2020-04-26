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
<body background= "img/estrellas.png" style="font-family: surabanglus;
color: white;
font-size:2em;">

	<div class="jumbotron login" style="width: 60%; margin-left: 20%; margin-top: 7%; background-color: #4040A8; 
    color:white;">
		<h2>Login</h2>
		<hr>
		<form action="data.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">usuario</label>
    <input type="text" class="form-control" name="nomb" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ingrese nombre de usuario">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">contraseña</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="ingresa la contraseña">
  </div>
  <div class="form-group form-check">
  </div>
  <input type="submit" class="btn btn-primary" style="background-color: white; color:black;">
  <a href="data.php"></a></input>
</form>  

<div class="mensaje">
    <?php 
    if(isset($_GET["error"])){
        echo "los datos no son correctos";
    }
     ?>

</div>

	</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>