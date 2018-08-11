<!DOCTYPE html>
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
 <h1><font size="+20"> MANAGEMENT LOGIN</font></h1>
</head>
<body background="9194869.jpg"
<body>
<font size="+03"> 

<form method="POST">
 id:
 <input type="text" name="id">
 <br />
 Password:
 <input type="Password" name="Password">
 <br />
 <input type="submit" name="sub">
 </font>

</form>
 
<?php 
 
 if(isset($_POST['sub'])){
 
 $db = new mysqli("localhost","root","","management");
 
 
 $query = "SELECT * FROM managementtable WHERE id='".$_POST['id']."' AND Password='".$_POST['Password']."'";
 
 
 $sql = $db->query($query);

 $n = $sql->num_rows;
 
 
 if($n > 0){

 echo "LOGGIN";
	header('location:didplaypatientdetail.php');
	
 } else {
 
 echo "Incorrect username or password";
 }
 }
?>

</body>
</html>