<?php
        if (!empty($_GET['nombre'])){
            
            $nb= $_GET['nombre'];
            if ($nb % 2 === 0) {
                echo "Nombre pair";
            }else {
                echo "Nombre impair";
            }
        
        }
    ?>