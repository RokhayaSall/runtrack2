<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 
      

        if (isset($_POST['dec'])) {
          setcookie("prenom", "", time() - 3600);
          $_COOKIE['prenom'] = NULL;
        }

        

        

       
      
      
      
      ?>

        <form method= "post" >
                
                
                
                <button type="submit" name="dec">Deconnexion</button>
                <label for="prenom"></label>
                <input type="text" id="prenom" name="prenom" placeholder="prenom">
                <button type="submit" name="con">Connexion</button>
        </form>

        
</html>