<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="traitements.php" method="post">
        <label for="username"></label>
        <input type="text"name="username" placeholder="username" value="<?=htmlentities($_POST['username']??'')?>">

        <label for="password"></label>
        <input type="password"name="password" placeholder="password" value="<?=htmlentities($_POST['password']??'')?>" >

        <button type="submit" name="connexion">Connexion</button>

    

    </form>


    
</body>
</html>