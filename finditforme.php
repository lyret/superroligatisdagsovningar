<?php

echo "
    <form method='get'>
        <label>Type Google or DuckDuckGo </lable><br>
        <input type='text' name='search'><br>
        <input type='submit' value='skicka' name='submit'>
    </form>


";

if(isset($_GET['submit'])){
    $var = $_GET['search'];
    if($var == "Google"){
        header("Location: https://www.google.com/");
    }
    if($var == "DuckDuckGo"){
        header("Location: https://duckduckgo.com/");
    }

}

?>