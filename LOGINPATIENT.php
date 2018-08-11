<!DOCTYPE html>
<html>
<head>
<style>
h1{
	color:ORANGE;
	border-bottom:2px solid pink;
}
body{color:SKY BLUE;
background:url('4.jpg');
background-repeat:no-repeat;
background-repeat:no-repeat;
background-size: 1424px 700px;
}
</style>
 <title>HMS</title>
 <h1><font size="+20"> PATIENT LOGIN</font></h1>
</head>
<body background="4.jpg"
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
 // this will trigger when submit button click
 if(isset($_POST['sub'])){
 
 $db = new mysqli("localhost","root","","patient");
 
 // create query
 $query = "SELECT * FROM patientdetail WHERE id='".$_POST['id']."' AND Password='".$_POST['Password']."'";
 
 // execute query
 $sql = $db->query($query);
 // num_rows will count the affected rows base on your sql query. so $n will return a number base on your query
 $n = $sql->num_rows;
 
 // if $n is > 0 it mean their is an existing record that match base on your query above 
 if($n > 0){
// echo "<a href="welcome patient.html"></a>";
 echo "LOGGIN";
header('Location: welcome patient.html');

 } else {
 
 echo "Incorrect username or password";
 }
 }
?>

</body>
</html>