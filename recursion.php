<?php
    function fakultet($number){
        if($number === 0){
            return 1; //base statement.
        }
        else {
            return $number * fakultet($number -1);
        }
    }
    echo fakultet(5);
?>