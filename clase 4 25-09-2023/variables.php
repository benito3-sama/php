<!doctype html>
<html>
<head>
    <title>Comparar dos numeros</title>
    <meta charset="UTF-8"/>
</head>
<body>
    <?php
    //esto es un comentario
    //las variables inician con el simbolo $ (pesos)
    $numero_1 = 10;
    $numero_2 = 20;

    #condicional <si class="sino">
    if($numero_1 > $numero_2){
        echo("El numero mayor es NUMERO_1 que es igual a ".$numero_1);
    }else if($numero_1 < $numero_2){
        echo("El numero mayor es NUMERO_2 que es igual a ".$numero_2);
    }else{
        echo("Ambos son iguales");
    }
    ?>
</body>
</html>
    