<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <form method= "get">
            <label for="nom"></label>
            <input type="text" id="nom" name="nom" placeholder="nom">

            <label for="prenom"></label>
            <input type="text" id="prenom" name="prenom" placeholder="prenom">
            
            <button type="submit">Envoyer</button>
    </form>

    <table>
    <thead>
        <tr>
            
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php  
                    if (!empty($_GET['prenom'])){
                
                    
                    echo "Prénom";
                
                    }   
                ?>
            </td>

            <td>
                <?php  
                    if (!empty($_GET['prenom'])){
                
                    
                    echo $_GET['prenom'];
                
                    }   
                ?>
            </td>
                
        </tr>
            <tr>
                <td>
                <?php  
                    if (!empty($_GET['nom'])){
                
                    
                    echo "Nom";
                
                    }   
                ?>
            </td>

            <td>
                <?php  
                    if (!empty($_GET['nom'])){
                
                    
                    echo $_GET['nom'];
                
                    }   
                ?>
            </td>
            </tr>
           
    </tbody>
</table>

</body>
</html>
