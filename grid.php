<?php
    $toAdd = "<table>";
    for ($z = 0; $z < 8; $z++) {
        $toAdd .= '<tr>';
        for ($i = 0; $i < 8; $i++) {
            $rand = rand(0,100);
            $toAdd .= '<td class="box">'. $rand .'</td>';
            $rows[$z][$i] = $rand;
        }
        $toAdd .= '</tr>';
    }
    $toAdd .= "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            width: 4em;
            border: 1px solid black;
        }
    </style>
</head>
<body>
        <?php echo $toAdd; ?>
</body>
</html>