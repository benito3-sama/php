<!DOCTYPE html>
<html>
    <head>
        <title>Temperatura</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    //A parte de for(), existe el while(): ciclo mientras
    $temperatura = 0;
    //a diferencia del for(), el while() requiere indicar el contador o sumador
    //mientras mas proximo al valor 100 pintar en un tono rojo mas fuerte
    while($temperatura <= 100){
        echo "La temperatura es: $temperatura";
    }
    ?>
    </body>
</html>