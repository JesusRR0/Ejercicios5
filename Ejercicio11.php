<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11</title>
</head>
<body>
    <?php 

   
    $palabra =$_POST['palabra'];
    //Accedera por primera vez al formulario y se enviara la clave del array diccionario
    if(!isset($palabra)){
        ?>
    <form action="#" method="post">
        Introduce una palabra en español:
    <input type="text" name="palabra">
    <input type="submit" value="OK">

    </form>
        <?php
    
    //Cuando se envie el formulario se creará la variable diccionario
    }else{
        
        $traduccion =["coche" => "car", "manzana" =>"apple", "raton" => "mouse", "pantalla" => "screen", "galleta" =>"cookie",
        "llave" => "key", "cable" => "cable", "papel" => "paper", "pared" => "wall", "suelo" => "floor",
        "cielo" =>"sky", "atardecer"=> "sunset", "grados" => "degrees", "mesa" => "table", "silla" => "chair",
        "cuchillo" => "knife", "cancion" => "song", "pajaro" => "bird", "luz" => "light", "resfriado" => "cold"
        ]; 
        //se muestra por pantalla el valor de la clave introducida por teclado
        echo $traduccion[$palabra];
    }

    ?>

    

    


</body>
</html>