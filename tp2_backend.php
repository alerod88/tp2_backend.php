<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ejercicio1</h1>
    <?php
    $a = 4;
    
    if ($a > 0) {
        echo "$a es positivo";
    } else {
        echo "$a no es positivo";
    }
    ?>
    <br>
    <hr>

    <h1>Ejercicio2</h1>
    <?php
    $b = 8;

    if ($b > 1 & $b < 10) {
        echo "$b es mayor a 1 y menor que 10";
    } else {
        echo "$b no es mayor a 1 y menor que 10";
    }
    ?>
    <br><hr>

    <h1>Ejercicio3</h1>
    <?php
    $c = 11;

    if ($c > 10 || $c < 2) {
        echo "$c es mayor a 10 o es menor a 2";
    } else {
        echo "$c no es mayor a 10 o no es menor a 2";
    }
   ?>
    <br><hr>

    <h1>Ejercicio4</h1>
    <?php
    $numero1 = 1;
    $numero2 = 2;

    if ($numero1 > $numero2){
        echo "SUMA:" .($numero1 + $numero2).  "<br>RESTA: ". ($numero1 - $numero2);
    } elseif ($numero2 > $numero1) {
        echo "MULTIPLICACIÓN: ". ($numero2 * $numero1) . "<br>DIVISIÓN: " .($numero2 / $numero1) . "<br>RESTO: ". ($numero2 % $numero1);
    } else {
        echo "Los números ingresados son iguales.";
    }


    ?>

</body>
</html>