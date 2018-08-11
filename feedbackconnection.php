<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
echo " ";
} 
else
{
    die("Connection failed: " .mysqli_connect_error());
} 
?>