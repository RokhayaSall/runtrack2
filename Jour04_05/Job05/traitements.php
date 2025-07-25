<?php
        if (!empty($_POST['username']) && !empty($_POST['password'])){
            
            $username= "John";
            $password= "Rambo";

            if ($_POST['username'] === $username && $_POST['password'] === $password) {
                echo "C'est pas ma guerre";
            }else {
                
                echo "Votre pire cauchemar";
            }
        
        }




    ?>