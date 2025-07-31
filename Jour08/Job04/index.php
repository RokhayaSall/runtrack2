<?php

function calcul($a, $operation, $b){

    if ($operation === "+") {
        return $a + $b;
    }elseif ($operation === "-") {
        return $a - $b;
    }elseif ($operation === "*") {
       return $a * $b;
    }elseif ($operation === "%") {
        return $a % $b;
    }elseif ($operation === "/") {
         return $a / $b;
    }
}

$resultat = calcul(5,"%",10);
echo $resultat;

