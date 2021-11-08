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

    if(!isset($palabra)){
        ?>
    <form action="#" method="post">
        Introduce una palabra en español:
    <input type="text" name="palabra">
    <input type="submit" value="OK">

    </form>
        <?php
    

    }else{
        
        $traduccion =["coche" => "car", "manzana" =>"apple", "raton" => "mouse", "pantalla" => "screen", "galleta" =>"cookie",
        "llave" => "key", "cable" => "cable", "papel" => "paper", "pared" => "wall", "suelo" => "floor",
        "cielo" =>"sky", "atardecer"=> "sunset", "grados" => "degrees", "mesa" => "table", "silla" => "chair",
        "cuchillo" => "knife", "cancion" => "song", "pajaro" => "bird", "luz" => "light", "resfriado" => "cold"
        ]; 

        echo $traduccion[$palabra];
    }

    ?>

    

    


</body>
</html>