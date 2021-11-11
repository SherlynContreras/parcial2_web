<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Práctica #2</title>
</head>
<body>
	<?php 
    $numero= rand(1,4);
    $color = ["#339cd4", "#8c91e3", "#ab454e", "#974755"];
    $numcolor= rand(0,3);
    echo "Número generado = ". $numero . "<br>";
    echo "<div style='color:".$color[$numcolor]."'> color generado </div>";
    if ($numero == 1) {
    	
    ?>
    <h1 style="color: <?php  echo $color[$numcolor]; ?>">Titulo 1</h1> <?php  echo "Alumno:Contreras Higuera Sherlyn";?>
    <?php  }  elseif ($numero == 2) {?>
    	<h2 style="background-color:  <?php  echo $color[$numcolor]; ?>">Titulo 2</h2><?php  echo "Alumno:Contreras Higuera Sherlyn";?>
    <?php } elseif ($numero == 3) {?>
     <h1 style="color: <?php  echo $color[$numcolor]; ?>"> Titulo 3 </h1><?php  echo "Alumno:Contreras Higuera Sherlyn";?>
    <?php } else {?>
    	<h4 style="background-color:  <?php  echo $color[$numcolor]; ?>">Titulo 4 </h4><?php  echo "Alumno:Contreras Higuera Sherlyn";?>
    <?php } ?>
</body>
</html>