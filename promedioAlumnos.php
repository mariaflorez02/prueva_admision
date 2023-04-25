<?php

$estudiantes = array(
    "Juan" => 8.5,
    "María" => 9.0,
    "Carlos" => 7.5,
    "Luisa" => 10.0,
    "Ana" => 8.0
    );

$sum=0; 

foreach($estudiantes as $clave => $nota){
    echo " $clave : $nota " . "<br>";
    $sum += $nota; 

}
$promedio= $sum/ count($estudiantes);
echo "el promedio de calificaciones es: ".  number_format($promedio, 2, '.', ',');; 
?>