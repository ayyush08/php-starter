<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "cura_db";

//create a connection object

$conn = mysqli_connect($servername, $username, $password, $database);





if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
else echo "Connected successfully";

$firstname = "Ramesh";
$lastname = "Shrestha";


$sql = "INSERT INTO `users` (`id`, `firstname`, `lastname`) VALUES ('3', '$firstname', '$lastname')";

$result = mysqli_query($conn, $sql);
if($result){
    echo "Data inserted successfully";
}
else echo "Error inserting data: ".mysqli_error($conn);

?>