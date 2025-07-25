<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "get" action="traitements.php <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="largeur"></label>
            <input type="number" id="largeur" name="largeur" placeholder="largeur">

            <label for="hauteur"></label>
            <input type="number" id="hauteur" name="hauteur" placeholder="hauteur">

            <button type="submit">Envoyer</button>
    </form>
</body>
</html>
