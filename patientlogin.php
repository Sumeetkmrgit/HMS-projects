<?php
include("patient.php");
error_reporting(0);
?>
<html>
<head>
<style>
h1{
	color:yellow;
	border-bottom:2px solid pink;
}
body{color:pink;
background:url('9194869.jpg');
background-repeat:no-repeat;
background-size: 1424px 700px;
}
</style>
<title>HMS</title>
<h1><font size="+20"> PATIENT LOGIN</font></h1>
</head>
<body background="9194869.jpg"
<body>
<font size="+03"> 
<form action ="" method="GET">

id <input type="textbox" name="id" value=""/>


Patientname <input type ="text" name="Patientname"  value = ""/></br>


Password <input type ="text" name="Password" value=""/></br>
<input type="submit"  name="submit" value="submit"/></br>

<a href ="welcome patient.html">login</a></br>
<a href ="contact us.html">contact us</a></br>

</font>
</form>
<?php
if($_GET['submit'])
{
	$z=$_GET['id'];
	$a=$_GET['Patientname'];
	$b=$_GET['Password'];
	if($z!="" && $a!="" && $b!="")
	{
		
		$query = "INSERT INTO patientdetail  VALUES ('$z','$a','$b')";

		$data=mysqli_query($conn, $query);
		if($data)
		{
			echo "data is inserted";
		}
		
	}
	else
	{
		echo "datafields are not complete";
		
	}
	
}

?>
</body>

</html>


