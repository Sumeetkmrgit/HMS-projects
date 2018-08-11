

<?php
include("patient.php");
error_reporting(0);
 $_GET['z'];
 $_GET['a'];
 $_GET['b'];
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

id <input type="textbox" name="id" value="<?php echo $_GET['z']; ?>"/>


Patientname <input type ="text" name="Patientname"  value = "<?php echo $_GET['a']; ?>"/></br>


Password <input type ="text" name="Password" value="<?php echo $_GET['b']; ?>"/></br>
<input type="submit"  name="submit" value="Update"/></br>
<a href ="welcome patient.html">login</a></br>
<a href ="contact us.html">contact us</a></br>

</font>
</form>
<?php
if($_GET['submit'])
{
	$id=$_GET['id'];
	$name=$_GET['Patientname'];
	$password=$_GET['Password'];
	$query="UPDATE patientdetail SET Patientname='$name',Password='$password' WHERE id='$id'";
	$data=mysqli_query($conn,$query);
	if($data){
		echo" record is updated!!!!!!!   <a href='didplaypatientdetail.php'>check updated list here</a>";
	}
	else{
		echo " record is not updated";
	}
}
else
{
	echo"<font color='lightgreen'>click to update the changes"; 
}
?>
</body>

</html>

