<?php
session_start();mysqli_connect("localhost","root","patient");
if($_POST['submit']) {
	
	$Patientname = strip_tags($_POST['Patientname']);
	$Password = strip_tags($_POST['Password']);
	$sql = "SELECT id,Patientname,Password FROM patient where Patientname = '$Patientname' LIMIT 1";
	$query = mysqli_query($db, $sql);
	if($query) {
		$row = mysqli_fetch_row($query);
		$userId= $row[0];
		$dbUserName = $row[1];
		$dbPassword = $row[2];
	}
	if($Patientname == $dbUserName && $Password == $dbPassword) {
		$_SESSION['Patientname'] = $Patientname;
		$_SESSION['id'] = $userId;
		header('Location: home.html');
	}
	else {
		echo "<b><i>Incorrect credentials</i><b>";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP-SQL Login</title>
</head>
<body>
<h1>Login</h1>
<form method="post" action="index2.php">
	<input type="text" name = "Patientname" placeholder="Enter Patientname">
	<input type="Password" name="Password" placeholder="Enter password here">
	<input type="submit" name="submit" value="Login">
</form>

<a href="register.php" >Register</a>

</body>
</html>