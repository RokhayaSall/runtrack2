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
$monBool = true;
$monEntier = 42;
$maChaine = "Bonjour";
$monFloat = 3.14;
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
            <td>monBool</td>
            <td><?php echo $monBool;?></td>
        </tr>
        <tr>
            <td>integer</td>
            <td>monEntier</td>
            <td><?php echo $monEntier;?></td>
        </tr>
        <tr>
            <td>string</td>
            <td>maChaine</td>
            <td><?php echo $maChaine;?></td>
        </tr>
        <tr>
            <td>float</td>
            <td>monFloat</td>
            <td><?php echo $monFloat;?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
