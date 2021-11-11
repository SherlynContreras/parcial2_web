<?php  
$nombre = $_GET["nombre"];
    echo "<br> El nombre del cliente es: " . $nombre;
    echo "<br>";

    $edad = $_GET["edad"];
    echo "<br> La edad del cliente es: " . $edad;
    echo "<br>";

    $correo = $_GET["correo"];
    echo "<br> Correo electronico del cliente: " . $correo;
    echo "<br>";

    $fecha_nacimiento = $_GET["fecha_nacimiento"];
    echo "<br> Fecha de nacimiento cliente: " . $fecha_nacimiento;
    echo "<br>";

    $sexo = $_GET["sexo"];
    echo "<br> Sexo del cliente: " . $sexo;
    echo "<br><br>";

    $areas = $_GET["areas"];
    echo "Areas de preferencia: <br>";
    for ($i=0; $i < count($areas); $i++) { 
        echo "$areas[$i]" . "<br>";
        
    }
    echo "<br><br>";
    echo "Alumno:Contreras Higuera Sherlyn";

    ?>