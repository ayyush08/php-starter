<?php

function processMarks($marks){
    $sum=0;
    foreach($marks as $mark){
        $sum+=$mark;
    }
    return $sum;
}

$marks = array(7, 8, 0, 8, 3);

// echo processMarks($marks);

$d = date("d-m-y h:i:s"); //search on php.net -> dates for more formats

echo "Today's data is: $d";






?>