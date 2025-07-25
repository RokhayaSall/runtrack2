<?php
        if (!empty($_GET['largeur']) && !empty($_GET['hauteur'])){
            $largeur = $_GET['largeur'];
            $hauteur = $_GET['hauteur'];            
            echo "<pre>";
            if ($largeur > 1 && $hauteur > 0) {
                $toit = $largeur / 2;
                
                for ($i=0; $i < $toit ; $i++) { 
                    echo str_repeat(" ",number_format ($toit - $i));
                    echo "/";
                    echo str_repeat("_", $i * 2);
                    echo "\ <br>";
                }
                for ($i=0; $i < $hauteur ; $i++) { 
                    echo "|".str_repeat(" ", $largeur)."| <br>";

                }
                echo "-".str_repeat("-", $largeur)."-";
            }

            echo "</pre>";
        
        } 

    
    ?>