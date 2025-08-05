<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>
    <?php
        if (!empty($_POST['styles'])){
          
           $style1 = "style1.css";
           $style2 = "style2.css";
           $style3 = "style3.css";

           $styleSelect = $_POST['styles'];

         if ($styleSelect === $style1) {

           echo "<link rel='stylesheet' href='" . $style1 . "'>";

         }elseif ($styleSelect === $style2) {

          echo "<link rel='stylesheet' href='" . $style2 . "'>";

         }elseif ($styleSelect === $style3) {

            echo "<link rel='stylesheet' href='" . $style3 . "'>";
         }
         
        } 

    
    ?>
        <form method= "post">
                <label for="styles">background Color</label>
                <select name="styles" id="styles">
                <option value="style1.css">Style 1</option>
                <option value="style2.css">Style 2</option>
                <option value="style3.css">Style 3</option>
                </select>
                
                 <button type="submit">Envoyer</button>
        </form>
        
</body>
</html>


