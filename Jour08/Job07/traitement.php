<?php

function gras($str){
    
     if ($str >= "A" && $str <= "Z") {
            return "<b>$str</b>";
        }else {
            return $str;
        }
    
}

if (!empty($_POST['str']) && !empty($_POST['fonction'])) {
    
    if ($_POST['fonction'] === "gras" ) {
        echo gras($_POST['str']);
    }elseif ($_POST['fonction'] === "cesar") {
        echo cesar($_POST['str']);
    }elseif ($_POST['fonction'] === "plateforme") {
        echo plateforme($_POST['str']);
    }
}

function cesar($str, $decalage = 2){

    $str = str_split($str);
  
    $majuscule = "abcdefghijklmnopqrstuvwxyz";
    $maj = str_split($majuscule);
    $minuscule = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $min = str_split($minuscule);
    $resultat = "";
   
    foreach ($str as $caractere) {
        if (in_array($caractere, $min)) {

            $index = array_search($caractere, $min);
            if ($index + $decalage < 26) {
               $newIndex = ($index + $decalage) % 26;
               $resultat .= $min[$newIndex];
            }
            
        }elseif (in_array($caractere, $maj)) { 

            $index = array_search($caractere, $maj);
            if ($index + $decalage < 26) {
               $newIndex = ($index + $decalage) % 26;
               $resultat .= $maj[$newIndex];
            }
           
        }else {
            return $resultat .=$caractere;
        }
       
    }

     return $resultat;
   

}

function plateforme($str){

   

    $caracteres = str_split($str);
    $me = "me";
    $char = str_split($me);


    foreach ($caracteres as $caractere) {
    
    
    }

    
}


