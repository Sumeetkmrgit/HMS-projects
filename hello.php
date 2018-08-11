<?php
include("connect.php");
$query = "INSERT INTO table1   VALUES ('7','nirmal')";

$data=mysqli_query($conn, $query);
if($data)
{
	echo "data is inserted";
}

?>
