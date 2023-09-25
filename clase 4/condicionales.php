<!DOCTYPE html>
<html>
    <head>
        <title>Edad</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
    $edad = 110;

    #condicional multiple que imprime un texto segun la edad
    #mejora el codigo para que los rangos sean MAYOR: 18 a 80 y MENOR 11 a 17
    if($edad >= 18 && $edad <110){
        echo "Eres mayor de edad, tu edad es $edad";
    }else if ($edad < 18 && $edad >14){
        echo "Eres menor de edad";
    }else{
        echo "Algo anda mal :( ";
    }
    ?>
    </body>
</html>