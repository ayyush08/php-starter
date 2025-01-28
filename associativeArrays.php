<?php


//Numeric/Index Arrays - keys are numeric indexes
$arr = array("This","That","What","Who","Why");

//Associative Arrays - key-value pairs
//Associative arrays are arrays that use named keys that you assign to them.
// here keys are defined by the user
$favColor = array("Ayush"=>"Blue","Rahul"=>"Green","Rohit"=>"Red");

foreach ($favColor as $key => $value) {
    echo $key."=>".$value."<br>";
}


?>