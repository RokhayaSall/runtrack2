<?php

 $str= "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$caracteres = str_split($str);

echo '<pre>';
    print_r ($caracteres);
echo '</pre>';

$index = 0;

foreach ($caracteres as $caractere) {

    if ($index % 2 == 0 ) {
        echo $caractere;
    }
    $index++;
}

