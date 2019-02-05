<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
        Förnamn: <input type="text" name="firstName">
        Efternamn: <input type="text" name="lastName">
        E-mail: <input type="email" name="email">
        <br>
        <br>
        <input type="submit" value="Är du med?"> 
    </form>

<?php

session_start();

if(isset($_POST)) {
    $_SESSION['regInfo'] = $_POST; 
}

    if($_SESSION['regInfo']) { 
        $firstName = $_SESSION['regInfo']['firstName'];
        $lastName = $_SESSION['regInfo']['lastName'];
        $email = $_SESSION['regInfo']['email'];
        ?>
        <h4>Du finns: <?php echo $firstName ?>  <?php echo $lastName ?> <br> Email: <?php echo $email ?>.</h4> 
        <?php 
    } else {
        ?>
        <h4>Du finns ej än</h4> 
        <?php
    }
?>

</body>
</html>