<?php
$servername = "localhost";
$username = "root";
$password = "ubuntu";
$dbname = "shoppingcart";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["Name"];
$email = $_POST["email"];
$password = $_POST["password"];


$sql = "INSERT INTO users (UserName,Password,EmailId)
VALUES ('$name','$password','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

<form action= "login.html"  method="post">
<input type="submit" value="go to login page">
</form>
