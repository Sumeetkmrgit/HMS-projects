

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
<h1><font size="+20"> UPDATE DETAIL</font></h1>
</head>
<body background="9194869.jpg"
<body>
<font size="+03"> 
<form action ="" method="GET">

id <input type="textbox" name="id" value="<?php echo $_GET['z']; ?>"/></br>




Patientname <input type ="text" name="Patientname"  value = "<?php echo $_GET['a']; ?>"/></br>


Password <input type ="text" name="Password" value="<?php echo $_GET['b']; ?>"/></br>

Email <input type ="text" name="Email" value="<?php echo $_GET['c']; ?>"/></br>
Age <input type ="text" name="Age" value="<?php echo $_GET['d']; ?>"/></br>
Gender <input type ="text" name="Gender" value="<?php echo $_GET['e']; ?>"/></br>
Address <input type ="text" name="Address" value="<?php echo $_GET['f']; ?>"/></br>
Dept <input type ="text" name="Dept" value="<?php echo $_GET['g']; ?>"/></br>
<input type="submit"  name="submit" value="Update"/></br>

<a href ="feedback1.php">contact us</a></br>
<a href ="contact.html">Home</a></br>
</font>
</form>
<?php
if($_GET['submit'])
{
	$id=$_GET['id'];
	$name=$_GET['Patientname'];
	$password=$_GET['Password'];
	$email=$_GET['Email'];
	$age=$_GET['Age'];
	$gender=$_GET['Gender'];
	$address=$_GET['Address'];
	$dept=$_GET['Dept'];
	$query="UPDATE patientdetail SET Patientname='$name',Password='$password',Email='$email',Age='$age',Gender='$gender',Address='$address',Dept='$dept'  WHERE id='$id'";
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

