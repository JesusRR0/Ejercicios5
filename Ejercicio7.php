<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php 

    
    $numero2 = [];

    //Creamos un for para asignar un numero aleatorio en un array de 20
    for($i=0;$i<20;$i++){

        $numero[$i] = rand(0,100);
        
    }
            
    //un bucle que comprueba los datos del array anterior 
    for($x=0;$x<20;$x++){
        
        //si el numero de la posicion es par se asigna al inicio de otro array ese numero
        if($numero[$x] % 2 == 0){

            array_unshift($numero2,$numero[$x]);
        //si el numero de la posicion es inpar se asigna al final de otro array ese numero
        }else{

            array_push($numero2,$numero[$x]);
        }

        
        

    }

    print_r ($numero2);
       
    ?>
</body>
</html>