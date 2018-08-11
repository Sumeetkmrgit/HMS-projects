<style>
td,th{
padding: 10px;
}body{color:black;
background:url('updatepatient.jpg');
background-repeat:no-repeat;
background-size: 1424px 700px;}
<body background="updatepatient.jpg"
</style>

<?php
include("doctor.php");
error_reporting(0);
$query ="SELECT * FROM doctordetail ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total !=0)
{
	?>
	
	<h1>DOCTOR DETAILS </h1>
	<table>
		<tr>
			<th>ID</th>
			<th>DOCTORNAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>AGE</th>
			<th>GENDER</th>
			<th>ADDRESS</th>
			<th>DEPT.</th>
			<th colspan="2">OPERATIONS</th>
		</tr>
		
	<?php
	while($result = mysqli_fetch_assoc($data))
	{

		echo"<tr>
			<td>".$result['id']."</td>
			<td>".$result['Doctorname']."</td>
			<td>".$result['Password']."</td>
			<td>".$result['Email']."</td>
			<td>".$result['Age']."</td>
			<td>".$result['Gender']."</td>
			<td>".$result['Address']."</td>
			<td>".$result['Dept']."</td>
			<td><a href ='updatedoctor.php?z=$result[id]&a=$result[Doctorname]&b=$result[Password]&c=$result[Email]&d=$result[Age]&e=$result[Gender]&f=$result[Address]&g=$result[Dept]'>Edit</a></td>
			<td>Delete</td>
			
		</tr>";
		
	}
	
}
else
{
	echo "record empty";
}
?>
