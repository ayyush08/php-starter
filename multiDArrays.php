<?php


$mat = array(
    array(1,2,3,4),
    array(2,3,4,5),
    array(3,4,5,6),
);

// echo $mat[0][1];

foreach ($mat as $element) {
    foreach ($element as $value) {
        echo $value." ";
    }
    echo "<br>";
}




?>