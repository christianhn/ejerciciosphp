
<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio04.php</title> 
</head><body> 
Ejercicio04.php <br>
 Crea dos funciones llamadas mayor y menor. Cada una de ellas debe recibir un array numérico y devolver el valor mayor y menor respectivamente.

<hr>
<?php 

function mayor($array)
{
	$mayor=0;
	foreach ($array as $numero){
        if ($numero > $mayor){
        	$mayor= $numero;
        }
    }
}

function menor($array)
{
	
	foreach ($array as $numero){
        if ($numero < $menor){
        	$menor= $numero;
        }
    }
}



?> 
</body></html>