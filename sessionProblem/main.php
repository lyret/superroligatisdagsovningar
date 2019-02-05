<?php
//Issue is when us click on login then by
//clicking backword should not go to sing in page again

session_start();
if(!isset($_SESSION['test'])){
    header("Location: ./login.php");
    die();
}

if(isset($_SESSION['test'])){
    header("Location: ./product.php");
    die();
}








?>