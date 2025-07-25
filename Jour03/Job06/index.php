<?php

$phrase = "Les choses que l'on possède finissent par nous posséder.";
$str = str_split($phrase);

var_dump($str);
Krsort($str);

foreach ($str as $caractere) {
    echo $caractere;
}