<?php
$host = "localhost";      
$pass = "";               
$dbname = "smartcampusdb"; 
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
else
{
    echo("Connected Successfully");
}
?>
