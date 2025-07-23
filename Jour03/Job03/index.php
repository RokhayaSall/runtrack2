<?php

$texte= "I'm sorry Dave I'm afraid I can't do that";

$str= str_split($texte);

$voyelle=['a','e','i','u','o','y','A','E','I','U','O','U','Y'];

echo '<pre>';
    print_r ($str);
    print_r ($voyelle);
echo '</pre>';
 var_dump($voyelle);

foreach ($str as $caractere) {
    if (in_array($caractere,$voyelle)) {
        echo $caractere;
    }
    
}

