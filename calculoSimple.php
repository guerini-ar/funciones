<!DOCTYPE html>

<!--Hacer un script PHP que permita ingresar dos números a travez de 
un textbox y dividirlos. Además debe mostrar el resultado al pulsar 
un botón. -->

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculoSimple</title>
</head>
<body>
    <title>Divisor de dos factores:</title>
    <h3>Ingresa los factores y selecciona el tipo de cálculo: </h3>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="factor1" placeholder="1° FACTOR"> <!--CBX1-->
        <select name="operaciones">
            <option value="elige">elige la operación</option>
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicación</option>
            <option value="division">división</option>
        </select>
        <input type="text" name="factor2" placeholder="2° FACTOR"> <!--CBX2-->
        <input type="submit" name="enviar" value="Ejecutar"> <!--BTN-->
    </form>

    <?php
    /*Función para realizar las operaciones matemáticas*/
    function calculoSimple($f1, $f2){ /*La función recibe los dos parámetros enviados*/

        if($_POST['operaciones'] == "elige"){   /*El if 'lee' la tag 'select name: "operaciones"' 
                                                y la 'option value: "elige"'*/
            $resultado = 'Debes elegir una operación.'; /*Si está seleccionado 'elige', ejecuta 
                                                        este $resultado*/
        }elseif($_POST['operaciones'] == 'suma'){
            $resultado = 'El resultado de la suma, es: '.($f1+$f2);
        }elseif($_POST['operaciones'] == 'resta'){
            $resultado = 'El resultado de la resta, es: '.($f1-$f2);
        }elseif($_POST['operaciones'] == 'multiplicacion'){
            $resultado = 'El resultado de la multiplicación, es: '.($f1*$f2);
        }elseif($_POST['operaciones'] == 'division'){
            $resultado = 'El resultado de la división, es: '.($f1/$f2);
        }

        return $resultado; /*Cuando se resuelve el if, la función devuelve un resultado ($resultado)*/
        
    }

    /*Mostrar el resultado luego de presionar el botón*/
    if(isset($_POST['enviar'])){
        echo '<hr/>'.calculoSimple($_POST['factor1'], $_POST['factor2']); /*Paso parámetros 
                                                             del CBX1 y CBX2 a la función,
                                                             y luego del que esta realice el 
                                                             cálculo, muestro el resultado.*/   
    }

    ?>

</body>
</html>