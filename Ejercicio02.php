
<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio02.php</title> 
</head><body> 
Ejercicio02.php.<br>
 Vamos a hacer algo parecido al ejercicio1. En este caso usa arrays asociativos.
 Los indices que vas a usar son: base, escolta, alero, alapivot y pivot.
 <hr>
<?php 


$array1 = array ( 
    'base' => "Christian", 
    'escolta' => 'Manuel', 
    'alapivot' => 'García López', 
    'pivot' => "Mariu" ,
    'alero' => "Ana" 
); 

 echo "<table border=1>";  

foreach ($array1 as $position=>$element){ 
	echo "<tr>";
	
    echo "<td>" . $position . "<td>" . $element; 
    
    echo "</tr>"; 
} 

 echo "</table>";  


?> 
</body></html>