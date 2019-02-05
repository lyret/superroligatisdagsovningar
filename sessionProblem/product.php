<?php
echo "
<form method='post'>
<input type='submit' value='sign out' name='restartPage'>
</form>


";

session_start();
if(isset($_POST['submit'])){
    $submittedValue = "Here we go";
    $_SESSION['test'] =  $submittedValue;
   
    

}
if(isset($_SESSION['test'])){
    echo "Welcome to product page";
    

} else {
    echo "det finns något fel";
}

if(isset($_POST['restartPage'])) {
    unset($_SESSION['test']);
    header("Location: ./login.php");
    die();
}
?>