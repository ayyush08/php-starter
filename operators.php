<?php


$a = 45;
$b = 8;


// Arithmetic Operators
echo "For a + b  = " . ( $a + $b ) ." <br>";
echo "For a - b  = " . ( $a - $b ) ." <br>";
echo "For a * b  = " . ( $a * $b ) ." <br>";    
echo "For a / b  = " . ( $a / $b ) ." <br>";
echo "For a % b  = " . ( $a % $b ) ." <br>";
echo "For a ** b  = " . ( $a ** $b ) ." <br>";


// Assignment Operators

$x=$a;
$x+=6;
echo "Value of x = $x <br>";


// Comparison Operators

$p = 56;
$q = 34;

echo "For p==q, the result is: ",var_dump($p==$q)."<br>";
echo "For p!=q, the result is: ",var_dump($p!=$q)."<br>";



?>