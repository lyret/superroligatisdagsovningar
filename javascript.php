<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Javascript</title>
</head>
<body style="margin: 0; padding: 0;" onload="checkSubmit()">
    <h1 style="text-align: center; color: white; background-color: black; margin: 0; padding: 1em;">Javascript formulär</h1>
    <form action="">
    <textarea name="textMessage" id="text" cols="30" rows="10"></textarea><br><br>
    <input type="submit" onclick="getText()">
    </form>
    <script type="text/javascript">
        function getText(){
            window.sessionStorage['submit'] = document.getElementById("text").value;
        }
        function checkSubmit(){
            if(window.sessionStorage['submit']){
                alert(window.sessionStorage['submit']);
                window.sessionStorage['submit'] = "";
            }
        }
    </script>
</body>
</html>