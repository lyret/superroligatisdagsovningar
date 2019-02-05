<?php

$diet = array (
    
    "Sat" => array ("Apple","Bannana","Milk"),
    "San" =>array("Eggs","Breed","Milk"),
    "Man" =>array("Elevs","Apple","Milk"),
    "Tu" =>array("Apple","Checken","Milk"),
    "Th" =>array("Gurka","Bannana","Milk"),
);
foreach ($diet as $key => $value) {
    echo $key;
    foreach($value as $index)
    {
        print_r("<ul><li>$index</li></ul>"."<br>");
    
    }
}
   
  