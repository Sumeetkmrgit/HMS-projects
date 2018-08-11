<?php
include("connect.php");
error_reporting(0);
?>


<html>
<head>
<title>insert in mysql from html</title>
</head>
<body>
<form action="" method="GET">
id <input type="textbox" name="id" value=""/>
name <input type="password" name="name" value=""/>
<input type="submit"  name="submit" value="submit"/>
</form>
<?php
$a=$_GET['id'];
$b=$_GET['name'];
echo $a;
echo $b;
$query = "INSERT INTO table1   VALUES ('$a','$b')";

$data=mysqli_query($conn, $query);
if($data)
{
	echo "data is inserted";
}

?>
</body>
</html>

                                                                                                                                                