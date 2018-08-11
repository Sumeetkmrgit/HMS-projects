<?php
include("feedback.php");
error_reporting(0);
?>
<html>
<head>
<style>

body{color:WHITE;
background:url('Thank-you-Doc.jpg');
background-repeat:no-repeat;
background-size: 1324px 672px;
}
</style>
<title>HMS</title>

</head>
<body background="Thank-you-Doc.jpg"
<body>
<font size="+03"> 
<form action ="" method="GET">

Name <input type="textbox" name="Name" value=""/></br>


 Email<input type ="text" name="Email"  value = ""/></br>


Comments <input type ="text" name="Comments" value=""/></br>
<input type="submit"  name="submit" value="submit"/></br>


<a href ="contact us.html">contact us</a></br>

</font>
</form>
<?php
if($_GET['submit'])
{
	$z=$_GET['Name'];
	$a=$_GET['Email'];
	$b=$_GET['Comments'];
	if($z!="" && $a!="" && $b!="")
	{
		
		$query = "INSERT INTO feedbacktable  VALUES ('$z','$a','$b')";

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

