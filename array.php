<?php 
$array = array(
    1 => "valueOne",
    2 => "valueTwo",
    3 => "valueThree",
    4 => "valueFour",
    5 => "valueFive"
);
$keys = array_keys($array);
for ($i = 0; $i < count($keys); $i++) {
    echo $keys[$i] . ' ' . $array[$keys[$i]]. "<br>";
}
?>