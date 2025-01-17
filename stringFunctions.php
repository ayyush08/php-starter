<?php
$name = "Ayush Kumar Gupta";

echo $name;

echo "<br>";

echo "Length of the string is: ".strlen($name);

echo "<br>";

echo "Word count of the string is: ".str_word_count($name);
echo "<br>";

echo "Reverse of the string is: ".strrev($name);
echo "<br>";

echo "Position of Kumar in the string is: ".strpos($name, "Kumar");
echo "<br>";

echo "Replace Kumar with Singh: ".str_replace("Gupta", "Singh", $name);
echo "<br>";

echo "Repeat the string 5 times: ".str_repeat($name, 5);
echo "<br>";

echo "rTrim the string: ".rtrim($name, "A");
echo "<br>";





?>