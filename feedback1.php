<?php
include("feedbackconnection.php");
error_reporting(0);
?>
<html>
<head>
<style>
h2,h3{
	color:royalBLUE;

}

body{color:YELLOW;
background:url('Emergency-Numbers.jpg');
background-repeat:no-repeat;
background-size: 1424px 670px;
}
</style>
<title>HMS</title>

<font size="+03"> 
<body background="Thank-you-Doc.jpg"
<body>
<font size="+03"> 
<form action ="" method="GET">
<h2><font size="+70">CONTACT INFORMATION</font></h2>
<font size="+02"><p>Monday-Saturday : 9:30 AM to 6:30 PM </p>
<p>Address:123 Some Street,Bangalore,Karnataka,India-560037</p>
<p>Fax:(123)984-1234</p>
<p>Email:healthcare@domain.com</p>
<h3>LEAVE US A  FEEDBACK</h3>
Name <input type="textbox" name="Name" value=""/></br>


 Email<input type ="text" name="Email"  value = ""/></br>


Comments <input type ="text" name="Comments" value=""/></br>
<input type="submit"  name="submit" value="submit"/></br>


<a href ="contact.html">home</a></br>

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
			header('location: feedback.html');
		}
		
	}
	else
	{
		echo "please fill the options";
		
	}
	
}

?>
</body>

</html>

