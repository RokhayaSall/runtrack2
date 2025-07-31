
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
          setcookie("nbvisites", "", time() - 3600);
          $_COOKIE['nbvisites'] = 0;
        }

        if (isset($_COOKIE['nbvisites'])) {
          $nbvisites = $_COOKIE['nbvisites']+1;
          
        }else {
          $nbvisites = 1;
          
        }

        setcookie("nbvisites", $nbvisites, time() - 3600);
      
      
      
      ?>

      <h1>Nombre de visite :<?php echo $nbvisites; ?></h1>
      <form methode="post">
        <button type="submit" name="reset">Reset</button>
      </form>

        
</html>