<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Variables PHP</title>
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

<?php
$bool = true;
$entier = 42;
$chaine = "Bonjour";
$float = 3.14;
?>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>boolean</td>
            <td>Bool</td>
            <td><?php echo $bool;?></td>
        </tr>
        <tr>
            <td>integer</td>
            <td>Entier</td>
            <td><?php echo $entier;?></td>
        </tr>
        <tr>
            <td>string</td>
            <td>Chaine</td>
            <td><?php echo $chaine;?></td>
        </tr>
        <tr>
            <td>float</td>
            <td>Float</td>
            <td><?php echo $float;?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
