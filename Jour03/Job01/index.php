<?php

$nbs = [200,2004,173,98,171,404,459];

 echo '<pre>';
    print_r ($nbs);
    echo '</pre>';

foreach($nbs as $nb){
    if ($nb % 2 == 0) {
        echo $nb." est paire<br/>";
    }else {
        echo $nb. " est impaire<br/>";
    }
}







?>