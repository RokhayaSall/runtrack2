<?php

$phrase= "Certaines choses changent, et d'autres ne changeront jamais.";
$str = str_split($phrase);
$phrase2 = "Ertaines choses changent, et d'autres ne changeront jamais.c";
$str2 = str_split($phrase2);
$newArray = array_replace($str,$str2);

foreach ($newArray as $caractere) {
   echo $caractere;
}



