<?php 
$p1=  $_GET["p1"];
$p2=  $_GET["p2"];
$p3=  $_GET["p3"];
$p4=  $_GET["p4"];
$p5=  $_GET["p5"];
$p6=  $_GET["p6"];
$p7=  $_GET["p7"];
$p8=  $_GET["p8"];
$p9=  $_GET["p9"];
$p10=  $_GET["p10"];

$r1=  "Atlántico";
$r2=  "Cuba";
$r7=  "Italia";

$calif=0;

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="cssexamen.css">
	<title>Evaluación Geografía</title>
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-12"><br>
			
		
			<form  method="GET" action="examen.php">
				<h1>Evaluación Geografía</h1><br>
				<label for="">1. ¿Dónde desemboca el río Amazonas?</label><br>
				<?php  
				if ($p1 == $r1  ) {
			echo "CORRECTA";
			echo "<br>";
			$calif++;
			echo"<br>";
			}else{
			echo "INCORRECTA";
    		echo"<br>";
    		echo"<br>";
	
			}?>
				
        
				<label for="">2. ¿En qué cordillera se encuentra el Monte Everest?</label><br>
				<?php 
				if ($p2 =="b") {
	        echo "CORRECTA";
	        echo "<br>";
	        $calif++;
	        echo"<br>";

            }else{
	      echo "INCORRECTA";
    	  echo"<br>";
          echo"<br>";
	
           } ?>
			
      <div class="row">
            <div class="col-12">
      		<label for="">3. Selecciona los continentes que se encuentran en la tierra.</label><br>
      		<?php 
      		for ($i=0; $i < count($p3); $i++) { 
            if($i==0){
                $r3 = $p3[$i].',';
            }elseif ($i == count($p3)) {
                $r3 = $r3.$p3[$i];
            }else {
                $r3 = $r3 . $p3[$i];
            }
        }if ($r3 == "1,3") {
            $estado3 = "CORRECTA";
            echo $estado3;
            echo"<br>";
            $calif++;
        }else{
            $estado3 = "INCORRECTA";
            echo"<br>";
            echo $estado3;
            echo "<br>";
            echo "<br>";
            

        }
 ?>
      		</div>
	    </div>
      		
			<div class="row">
				<div class="col-12">
			<label for="">4. ¿Cuál es la isla más grande del mar Caribe?</label><br>
			<?php 
			if ($p4 == $r2  ) {
			echo "CORRECTA";
			echo"<br>";
			$calif++;
			echo"<br>";
	
	
			}else{
			echo "INCORRECTA";
    		echo"<br>";
} ?>
		</div>
	</div>
			<div class="row">
				<div class="col-12">
					<label for="">5. ¿Cuál es el continente más grande de la tierra?</label><br>
					<?php 
					if ($p5 =="a") {
				echo "CORRECTA";
				$calif++;
				echo"<br>";

				}else{
				echo "INCORRECTA";
    			echo"<br>";
	
				} ?>
		 </div>
      </div>
    <br>
			<div class="row">
				<div class="col-12">
					<label for="">6. Selecciona el nombre de océanos del mundo .</label><br>
					<?php 
					for ($i=0; $i < count($p6); $i++) { 
            if($i==0){
                $r6 = $p6[$i].',';
            }elseif ($i == count($p6)) {
                $r6 = $r6.$p6[$i];
            }else {
                $r6 = $r6 . $p6[$i];
            }
        }if ($r6 == "opcion1,opcion2") {
            $estado6 = "CORRECTA";
            echo $estado6;
            echo "<br>";
            $calif++;
        }else{
            $estado6 = "INCORRECTA";
            echo $r6;
            echo $estado6;
            echo "<br>";
        } ?>
					</div>
				</div>
      		<br>
      <div class="row">
        <div class="col-12">
      <label for="">7. ¿Qué país se parece a una bota?</label><br>
      <?php 
      if ($p7 == $r7  ) {
	echo "CORRECTA";
	$calif++;
	echo"<br>";
	
}else{
	echo $r3;
	echo "INCORRECTA";
    echo"<br>";
}
	 ?>
    
  </div>
      </div><br>
      <div class="row">
        <div class="col-12">
          <label for="">8. ¿Cuál es el estado más grande de México?</label><br>
          <?php 
          if ($p8 =="c") {
	echo "CORRECTA";
	$calif++;
	echo"<br>";

}else{
	echo "INCORRECTA";
    echo"<br>";
	
} ?>
          
     </div>
      </div><br>
      <div class="row">
        <div class="col-12">
          <label for="">9. Selecciona los nombres de volcanes .</label><br>
          <?php 
          for ($i=0; $i < count($p9); $i++) { 
            if($i==0){
                $r9 = $p9[$i].',';
            }elseif ($i == count($p9)) {
                $r9 = $r9.$p9[$i];
            }else {
                $r9 = $r9 . $p9[$i];
            }
        }if ($r9 == "opcion1,opcion2") {
            $estado9 = "CORRECTA";
            echo $estado9;
            echo "<br>";
            $calif++;
        }else{
            $estado9 = "INCORRECTA";
            echo $estado9;
            echo "<br>";
            

        } ?>
          
        </div>
      </div><br>
      <div class="row">
        <div class="col-12">
          <label for="">10. Acompleta la siguiente frase</label><br>
          	<?php 
          	if ($p10 =="b") {
	echo "CORRECTA";
	$calif++;

}else{
	echo "INCORRECTA";
	echo "<br>";
	
} 
echo "<br>";
echo "<br>";
echo "<h2>Calificación: $calif</h2>" 
?>
          
  </div>
</div><br>
      
			</form>
      <div class="row">
        <div class="col-12">
          <hr>
          <label for="">Hecho por Contreras Higuera Sherlyn 2021</label>
        </div>
      </div>
		</div>
	</div>
  </div>
	<script src="js/jquery.min.js"></script>
	<script src="js/util.js"></script>	
	<script src="js/bootstrap.js"></script>	
</body>
</html>

 