<?php
include("patient.php");
error_reporting(0);
?>
<html>
<head>
<style>
h1{
	color:darkblue;
	border-bottom:2px solid pink;
}
body{color:GREEN;
background:url('hj.jpg');
background-repeat:no-repeat;
background-size: 1424px 700px;
}
</style>
<title>HMS</title>
<h1>PATIENT SIGNUP</h1>
</head>
<body background="hj.jpg"
<body>
<font size="+03"> 

<form action ="" method = "GET">
Patient id <input type ="textbox" name="Patient id" value=""/></br>
Name <input type ="text" name="Name" value=""/></br>
Email <input type ="text" name="Email" value=""/></br>
 Age <input type ="textbox" name="Age" value=""/></br>
Gender <input type ="text" name="Gender" value=""/></br>
Address <input type ="text" name="Address" value=""/></br>
Dept <input type ="text" name="Dept" value=""/></br>
<input type="submit"  name="submit" value="submit"/></br>
<a href ="contact us.html">contact us</a></br>
</font>
</form>
<?php
$p=$_GET['Patient id'];
$q=$_GET['Name'];
$r=$_GET['Email'];
$s=$_GET['Age'];
$t=$_GET['Gender'];
$u=$_GET['Address'];
$v=$_GET['Dept'];
/*if (isset($_GET['Patient id'])) {
    if ($_GET['Patient id'] == 'jwshxnsyllabus')
        echo "<body onload=\"loadSyllabi('syllabus', '../syllabi/jwshxnporsyllabus.xml',         '../bibliographies/jwshxnbibliography_')\">";
    else if ($_GET['Patient id'] == 'aquinas')
        echo "<body onload=\"loadSyllabi('syllabus', '../syllabi/AquinasSyllabus.xml')\">"; 
    else if ($_GET['Patient id'] == 'POP2')
        echo "<body onload=\"loadSyllabi('POP2')\">";
} else {
    echo "<body>";
}*/
echo $p;
echo $q;
echo $r;
echo $s;
echo $t;
echo $u;
echo $v;
$query = "INSERT INTO patient.patientsignup  VALUES ('$p','$q','$r','$s','$t','$u','$v')  ";

$data =  mysqli_query($conn, $query);
if($data)
{
	echo "$data is inserted";
}

?>
</body>
</html>


