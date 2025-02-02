<?php
    $a = 98;


function printVal(){
    $a = 23; 
    //in php global variables are not accessible inside the function
    //local variables are accessible inside the function
    echo $a."<br>";



    //to access the global variable inside the function we have to use the global keyword
    global $a;
    echo $a."<br>";
}


// echo $a."<br>";
printVal();

echo var_dump($GLOBALS);//prints all the global variables







?>