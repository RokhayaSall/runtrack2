<?php

function bonjour($jour){
    if ($jour === true) {
        echo "Bonjour";
    }else {
        echo "Bonsoir";
    }
}

bonjour(false);
  echo "<br>";
bonjour(true);