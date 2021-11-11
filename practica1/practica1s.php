<?php  

  echo "Práctica 1";
  echo "<br> <br>";

  echo "<h1 style='color:blue;'>Lista de numeros</h1>";

  for ($i=0; $i < 10 ; $i++) { 
    echo $i+1 . "<br>";
  }

  for ($i=0; $i < 10; $i++) { 
    
    echo "<div style='border:1px solid black; padding:30px; width:30px; display:inline-flex; background-color:gray'>";
    echo $i+1;
    echo "</div>";
  }
  echo "<br>";
  for ($i=0; $i < 50 ; $i++) { 
    
  if ($i % 2 == 0){
      echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:pink'>";
    } else {
      echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:purple'>";
    }

    echo $i+1;
    echo "</div>";
  }

  echo "<h3 style='color:red;'>Alumno:Contreras Higuera Sherlyn</h3>";

 ?>