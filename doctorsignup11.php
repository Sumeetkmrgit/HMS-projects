<?php
include("doctor.php");
error_reporting(0);
?>
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
<h1>DOCTOR SIGNUP</h1>
</head>
<body background="9194869.jpg"
<body>
<font size="+03"> 
<form action ="" method="GET">

id <input type="textbox" name="id" value=""/></br>
Doctorname <input type ="text" name="Doctorname"  value = ""/></br>
Password <input type ="text" name="Password" value=""/></br>
Email <input type ="text" name="Email" value=""/></br>
Age <input type ="text" name="Age" value=""/></br>
Gender <input type ="text" name="Gender" value=""/></br>
Address <input type ="text" name="Address" value=""/></br>
Dept <input type ="text" name="Dept" value=""/></br>
<input type="submit"  name="submit" value="submit"/></br>

<a href ="feedback1.php">Contact us</a></br>
<a href ="contact.html">Home</a></br>

</font>
 
</form>
<?php
if($_GET['submit'])
{
	$z=$_GET['id'];
	$a=$_GET['Doctorname'];
	$b=$_GET['Password'];
	$c=$_GET['Email'];
	$d=$_GET['Age'];
	$e=$_GET['Gender'];
	$f=$_GET['Address'];
	$g=$_GET['Dept'];
	if($z!="" && $a!="" && $b!="" && $c!="" && $d!="" && $e!="" && $f!="" && $g!="")
	{
		
		$query = "INSERT INTO 	doctordetail  VALUES ('$z','$a','$b','$c','$d','$e','$f','$g')";

		$data=mysqli_query($conn, $query);//to mysqli-query to run the query
		if($data)
		{
			echo "successfully signedup";
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
