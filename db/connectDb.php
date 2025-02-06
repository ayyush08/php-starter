<?php

//Ways to connect to a MySQL database
//1. MySQLi extension (MySQL improved) -- it is an improved version of the original MySQL extension, 
//2. PDO (PHP Data Objects) -- if you want to use different databases, you can use PDO


//Connecting to database needs three parameters: servername, username, password

$servername = "localhost";
$username = "root";
$password = "";

//create a connection object

$conn = mysqli_connect($servername, $username, $password);



$sql = "CREATE DATABASE cura_db22";

$result = mysqli_query($conn, $sql);

echo var_dump($result);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
else echo "Connected successfully";

?>