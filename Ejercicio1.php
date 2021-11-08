<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php 
    


    for($i=0;$i<=20;$i++){
        //se crea un array de 20 posiciones con un numero aleatorio entre el 0 y el 100
        echo ("numero = ".$numero[$i] = random_int(0,100). "   "." || ");
        //se obtiene el cuadrado de cada uno de los numeros del array anterior
        echo ("cuadrado = ".$cuadrado[$i] = $numero[$i] * $numero[$i]. "   ". " || ");
        //se obtiene el cubo de los valores del array inicial
        echo ("cubo = ".$cubo[$i] = $numero[$i] * $numero[$i] * $numero[$i]. "   "."<br>");

    }

    
    
    
    ?>
</body>
</html>