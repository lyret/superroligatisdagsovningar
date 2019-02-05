<?php
    function fakultet($number){
        if($number === 0){
            return 1;
        }
        else {
            return $number * fakultet($number -1);
        }
    }
    echo fakultet(5);
?>