<?php session_start();?> 
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "ubuntu";
$dbname = "shoppingcart";
$log = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
     // output data of each row
     while($row = $result->fetch_assoc())
     {
         if($row["EmailId"]==$_POST["email"] && $row["Password"]==$_POST["password"] )
         {
$_SESSION['name']=$_POST["email"];
header('Location:http://localhost/products.php');
break;
             
           }
      else      {
               echo ("error");
		     }
	   }
}
else {
     header('http://localhost/login.html');
}

$conn->close();
?>

</body>
</html>
