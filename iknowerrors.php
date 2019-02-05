<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!-- Skriv en sida som skriver ut tre olika typer 
av fel som kan ske i php och förklarar dem.

Sidan ska skriva ut felen oavsett inställningarna på servern -->
<body>
<h4>The problem 1</h4><br>
<p>Problemt här att personen skriver ut något som användaren inte har satt än</p>
<a href="./issueWithUndfiendIndex/undefiendIndex.php"> Check the undefiend variables</a><br>
<h4>The solution 1</h4><br>
<a href="./issueWithUndfiendIndex/solutionForUndefiend.php"> Check the solution for undefiend variables</a><br>


<h4>The problem 2</h4><br>
<p>Problemt här att användaren inte behöver click på sign out och vi vill tvinga användare att göra det och inte avända backward arrow</p><br>
<a href="./sessionProblem/main.php"> Check the login and the user can go back to login page</a><br>
<h4>The solution 2</h4><br>
<a href="./sessionProblem/solution/main.php"> Check the  solution login that the user can NOT go back to login page</a><br>


<h4>The problem 3</h4><br>
<p>Problemt här att användare vill titta på värdet print_r och namnet men får namnet och kan inte skriva ut arrayen</p><br>
<a href="./echoProblem/checkIssue.php"> Ech problem</a><br>
<h4>The solution 3</h4><br>
<a href="./echoProblem/solution.php"> Echo solution</a><br>
<?php
?>
</body>
</html>



