<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4.php</title>
</head>
<body>
    <?php 
    
    for($i =0; $i<100; $i++){
         $nRandom[$i] = rand(0,20);
        
    }

    $stringnRandom = implode(" ",$nRandom);
    echo "Los numeros aleatorios son: ".$stringnRandom;

        

    ?>
    <br>
    <form action="Formulario4.php" method="post">
        Introduzca el numero que desee cambiar:
        <input type="text" name="clave" /><br>
        Introduzca el numero con el que desee cambiarlo:
        <input type="text" name="valor" /><br>
        <input type="hidden" name="nRandom" value="<?php echo $stringnRandom;?>">
        
        <input type="submit" value="OK" />
    </form>


</body>
</html>