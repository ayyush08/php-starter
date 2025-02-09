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


$sql = "CREATE TABLE `users` (
    `id` INT(6) NOT NULL AUTO_INCREMENT,
    `firstname` VARCHAR(30) NOT NULL,
    `lastname` VARCHAR(30) NOT NULL,
    PRIMARY KEY(`id`)
)";


$result = mysqli_query($conn, $sql);
if($result){
    echo "Table created successfully";
}
else{
    echo "Error creating table: ".mysqli_error($conn);
}



?>