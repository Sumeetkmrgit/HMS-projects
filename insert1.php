<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<head>
<title>insert in mysql from html</title>
</head>
<body>
<form action="insert1.php" method = "post">
firstname : <input type="text" name=firstname">
<br/>
lastname: <input type="text" name=lastname">
<br/>
email: <input type="text" name=email">
<br/>
<input type ="submit" value="insert">
</form>
</body>
</html>