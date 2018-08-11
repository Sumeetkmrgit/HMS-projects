 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "table";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
echo "";
} 
else
{
    die("Connection failed: because " .mysqli_connect_error());
} 
?>