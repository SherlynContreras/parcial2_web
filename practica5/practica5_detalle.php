<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detalle registro</title>
</head>
<body>
	<?php 
	$registros= array(
         array("id"=> 1, "nombre" => "Juan", "edad"=> 25, "sexo"=> "M"),
         array("id"=> 2, "nombre" => "Aranza", "edad"=> 20, "sexo"=> "F"),
         array("id"=> 3, "nombre" => "Cesar", "edad"=> 28, "sexo"=> "M"),
         array("id"=> 4, "nombre" => "Diego", "edad"=> 30, "sexo"=> "M"),
         array("id"=> 5, "nombre" => "Carmen", "edad"=> 35, "sexo"=> "F"),
         array("id"=> 6, "nombre" => "Christian", "edad"=> 22, "sexo"=> "M"),
		);
      if (isset($_GET["id"])) {
      	$id= $_GET["id"]-1;
      	echo "<h1> Dtaos de la persona</h1><hr>";
      	echo "ID:". $_GET["id"]."<br>";
      	echo "Nombre:". $registros[$id]["nombre"]."<br>";
      	echo "Edad:". $registros[$id]["edad"]."<br>";
      	echo "Sexo:". $registros[$id]["sexo"]."<br>";

      }else{
      	echo "<h1>El dato de ID es requerido</h1>";
      }
	 ?>
</body>
</html>