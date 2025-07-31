<?php

// function occurences($str,$char){
//   $count = 0;
//  for ($i=0; $i < strlen($str) ; $i++) { 

//    if ($str[$i] === $char) {
//      return $count++;
//    }

//     return $count;
//  }

// }

// function occurences($str,$char){
//   $strArray = str_split($str);
//   $count = 0;
//   foreach ($strArray as $caractere) {
//     if ($caractere === $char) {
//      return $count++;

//     }
//     return count;
//   }
// }

function occurences($str,$char){

   return substr_count($str,$char);

}


$resultat = occurences("il était une fois","t");
echo $resultat;