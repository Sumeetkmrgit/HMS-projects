<!DOCTYPE html>
<html>
<head>
<style>
h1{
	color:RED;
	border-bottom:2px SKY BLUE;
}
body{color:GREEN;
background:url('3.jpg');
background-repeat:no-repeat;
background-size: 1424px 700px;
}
</style>
 <title>HMS</title>
 <h1><font size="+20"> DOCTOR LOGIN</font></h1>
</head>
<body background="3.jpg"
<body>
<font size="+03"> 
<!-- your html form -->
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
 
 $db = new mysqli("localhost","root","","doctor");
 
 
 $query = "SELECT * FROM doctordetail WHERE id='".$_POST['id']."' AND Password='".$_POST['Password']."'";
 

 $sql = $db->query($query);
 
 $n = $sql->num_rows;
 
 
 if($n > 0){

 echo " LOGGEDIN";
 
header('Location: welcome doctor.html');

 } else {
 
 echo "Incorrect username or password";
 }
 }
?>

</body>
</html>