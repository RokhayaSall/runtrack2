<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      
  

        if (isset($_POST['reset'])) {
          $_SESSION['prenom'] = [];
        }

    
        if (!empty($_POST['prenom'])) {
            $_SESSION['prenom'][] = $_POST['prenom'];
        }

        if (!empty($_SESSION['prenom'])) {
            echo "<ul>";
            foreach ($_SESSION['prenom'] as $prenom) {
                echo "<li>$prenom</li>";
            }
            echo "</ul>";
        }
       
      ?>
        <form method= "post" >
                
                <label for="prenom"></label>
                <input type="text" id="prenom" name="prenom" placeholder="prenom">
               
                
                <button type="submit">Envoyer</button>
                <button type="submit" name="reset">Reset</button>
        </form>
</body>
</html>


