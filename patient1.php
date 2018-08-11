<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
echo "connecteds";
} 
else
{
    die("Connection failed: " .mysqli_connect_error());
} 
?>