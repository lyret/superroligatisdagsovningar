<?php 
$rand = rand(0,1);
if ($rand == 0) {
    http_response_code(404);
    include('404.html');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Broken</title>
</head>
<body>
    <p>Success</p>
</body>
</html>