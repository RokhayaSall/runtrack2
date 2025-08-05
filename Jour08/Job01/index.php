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
          $_SESSION['nbvisites'] = 0;
        }

        if (isset($_SESSION['nbvisites'])) {
          $_SESSION['nbvisites']++;
          
        }else {
          $_SESSION['nbvisites'] = 1;
        }
        
      
      ?>

      <h1>Nombre de visite :<?php echo $_SESSION['nbvisites']; ?></h1>
      <form methode="post">
        <button type="submit" name="reset">Reset</button>
      </form>

        
</html>