


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Math</title>
</head>
<body>
    


        <form method="post" action=''>  
        Number: <input type="text" name="number1"> <br>
        Number: <input type="text" name="number2"> <br>
        <input type="submit" name="submit" value="submit">
        </form>
<?php
        
        if(isset($_POST['submit']))
               {
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    $answer = $number1 * $number2;
                       echo  '<textarea rows="5" name="message" cols="30">'. $answer. '</textarea>'; 
               }
    
           ?>
</body>
</html>