<?php

/* 
    Hacer una función para mostrar una sucesión de números.
    Ingresar los números de inicio y fin, usando el método GET.
/*

function secuenciaNumerica($a, $b){
    
    $sec = "";

    if($a < $b){
        /*Secuencia ascendente*/
        echo 'Secuencia numerica ascendente:'.'<br/>';
        for ($a=$a; $a <= $b; $a++) { 
            $sec .= $a.', ';
        }
    }elseif($a > $b){
        /*Secuencia descendente*/
        echo 'Secuencia numerica descendente:'.'<br/>';
        for ($a=$a; $a > $b; $a--) { 
            $sec .= $a.', ';
        }
    }else{
        echo 'Ambos numeros son iguales.';
    }

    return $sec;
}

if(isset($_GET['n1']) && isset($_GET['n2'])){
    echo secuenciaNumerica($_GET['n1'], $_GET['n2']);
}else{
    echo 'No se ingresaron numeros por el metodo GET';
}


?>
