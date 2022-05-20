<?php
    $originalArray = [];
    for ($i=1; $i <= 100; $i++) {
        array_push($originalArray, $i);
    }
    shuffle($originalArray);
    for($i=0; $i < 5; $i++) {
        echo $originalArray[$i] . "<br />";
    }
?>