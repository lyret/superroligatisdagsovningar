<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1 style="text-align: center; font-style: italic;">Superroliga tisdagsövningar</h1><br>
    <p>Klicka på någon av följande länkar:</p><br>
    
    <?php

    $fileList = scandir("./");

    foreach ($fileList as $fileName) {
        if (!is_dir("./$fileName"))    {
            echo "<a href=$fileName>".$fileName."</a>"."<br>";
        }
    }

    ?>


    </body>

    
</html>