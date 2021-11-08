<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario4.php</title>
</head>
<body>
    <?php 
    
    
     $valoresNrandom=$_POST['nRandom'];
     $clave =$_POST['clave'];
     $valor =$_POST['valor'];

    echo str_replace($clave, $valor,$valoresNrandom); 
     
     
    
    ?>
</body>
</html>