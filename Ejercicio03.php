

<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio03.php</title> 
</head><body> 
Ejercicio03.php. <br>
Crea una array asociativo con las cinco posiciones. En cada posición debes almacenar uno o más jugadores en un array ordenado. Muestra toda la plantilla usando listas no ordenadas html (ul y li)

<hr>
<?php 


$array1 = array ( 
    'Base' => $arrayBase = array("Christian","Alfredo","Fernando") , 
    'Escolta' => $arrayEscolta = array("Juan","Oscar","Alejandro"), 
    'Alapivot' => $arrayAlapivot = array("Luis","Fran") , 
    'Pivot' => $arrayPivot = array("Jose","Jorge","Gomez") ,
    'Alero' => $arrayAlero = array("Brahim","Edu","Sergio") 
); 

 
foreach ($array1 as $position=>$aJugadores){ 
	echo "<li>" . $position . "</li>";
    
    echo "<ul>";
    foreach ($aJugadores as $nombres){
        echo "<li>" . $nombres . "</li>";
    }
    echo "</ul>";
} 

  


?> 
</body></html>