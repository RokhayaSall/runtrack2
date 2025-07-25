<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=t, initial-scale=1.0">
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
    <?php
        $phrase = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
        $str= str_split($phrase);
        $voyelle=['a','e','i','u','o','y','A','E','I','U','O','U','Y'];
        $cons="bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ";
        $consonne= str_split($cons);
    

        $dic = [
            "voyelle" => 0,
            "consonne" => 0
        ];

        foreach ($str as $caractere) {
            if (in_array($caractere, $voyelle)) {
               $dic["voyelle"]++;
            }elseif (in_array( $caractere, $consonne)) {
                 $dic["consonne"]++;
            }
        }

 ?>

    <table>
        <thead>
            <th>Voyelle</th>
            <th>Consonnes</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelle"]; ?></td>
                <td><?php echo $dic["consonne"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>


