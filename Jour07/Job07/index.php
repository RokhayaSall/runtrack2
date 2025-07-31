<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "post" action="traitement.php">
        <input type="text" name="str" id="str" >
        <label for="str"></label>

        
        <select name="fonction" id="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <label for="styles"></label>
                    
        <button type="submit">Envoyer</button>

    </form>
</body>
</html>