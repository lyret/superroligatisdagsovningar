<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lyrics</title>
</head>
<body>

<h1>Lyrics</h1>
<?php

include 'lyrics.php';

$listOfSongs = array(
    "Super Trouper" => $superTrouper,
    "Mamma Mia" => $mammaMia,
    "Fernando" => $fernando,
    "Honey, Honey" => $honeyHoney,
    "Chiquitita" => $chiquitita,
    "Dancing Queen" => $dancingQueen
);


function printArray($array) {
    
    echo "<ul>\n";

    foreach ($array as $key => $value) {
        echo "<li><a href=\"list.php?key=".$value." \">".$key."</a></li>\n";
    }

    echo "</ul>\n";
}

printArray($listOfSongs);
echo $_GET["key"];

?>

</body>
</html>