<?php
$name = "Ali";
$value = 51;
$expire = time()+(60*60*24);
setcookie($name,$value,$expire);
//setcookie($name,"null",$expire);
setcookie($name,$value,time()-3600);
include "history.php";

echo $_SERVER['REMOTE_ADDR'].'<br>';
print_r($_COOKIE);
echo '<br>';
echo $_COOKIE['Ali'];
echo '<br>';
if(isset($_COOKIE['Ali'])){
    $test = $_COOKIE['Ali'];
}else{
    $test = "";
}
echo $test.'--------';
?>

<?php
echo $history[rand(0,(count($history))-1)];
?>