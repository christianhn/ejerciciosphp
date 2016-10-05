
<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio01.php</title> 
</head><body> 
Ejercicio01.php.<br>
Crea un scprit php que guarde en un array ordenado ($array1) 
el nombre de 5 personas, inicializalo en una sóla sentencia. Recorrelo con un 
bucle foreach y muestra el contenido en una tabla. Haz lo mismo en $array2 pero
ahora añade los elementos uno a uno y muestra el orden ocupado por cada elemento.
<hr>
<?php 

$array1 = array("Christian","Alfredo","Fernando", "Juan", "Mariu", "Ana"); 

 echo "<table border=1>";  

foreach ($array1 as $element){ 
	echo "<tr>";
	echo "<td>";
    echo $element . '<br>';
    echo "</td>";
    echo "</tr>"; 
}
 echo "</table>";  



$array2[0]="Christian"; 
$array2[1]="Fernando"; 
$array2[2]="Ana"; 
$array2[3]="Alfredo"; 
$array2[4]="Mariu"; 

 echo "<table border=1>";  

	foreach ($array2 as $position=>$element){ 
	
	echo "<tr>";
    echo "<td>" . $position . "</td>";
    echo "<td>" . $element . "</td>";
    echo "</tr>"; 
  
} 

 echo "</table>";  
?> 
</body></html>